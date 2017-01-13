<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Budgets;
use App\Entities\Moto\Clients;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BudgetsRepo;
use App\Http\Repositories\Moto\ClientsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request as RequestFacade;
use Illuminate\Support\Facades\Session;

class ClientsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, BudgetsRepo $budgetsRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->budgetsRepo     = $budgetsRepo;
        $this->route    = $route;

        $this->section          = 'clients';

        if(\Illuminate\Support\Facades\Request::segment(2) == 'prospectos')
            $this->data['section']  = 'prospectos';
        else
            $this->data['section']  = $this->section;

    }

    public function index()
    {

        //breadcrumb activo
        $this->data['activeBread'] = 'Listar';

        //si request de busqueda
        if( isset($this->request->search) && !is_null($this->request->filter))
        {
            if(RequestFacade::segment(2) == $this->section)
                $model = $this->repo->searchWhere($this->request,['prospecto' => 0]);
            else
                $model = $this->repo->searchWhere($this->request,['prospecto' => 1]);

            if(is_null($model) || $model->count() == 0){

                //si paso la seccion
                if(RequestFacade::segment(2) == $this->section)
                    $model = $this->repo->listAllWhere($this->section,['prospecto' => 0]);
                else
                    $model = $this->repo->listAllWhere($this->section,['prospecto' => 1]);

            }

        }else{
            if(RequestFacade::segment(2) == $this->section)
                $model = $this->repo->listAllWhere($this->section,['prospecto' => 0]);
            else
                $model = $this->repo->listAllWhere($this->section,['prospecto' => 1]);
        }

        //guarda en session lo que se busco para exportar
        Session::put('export',$model->get());

        //pagina el query
        $this->data['models'] = $model->paginate(config('models.'.$this->section.'.paginate'));

        if(RequestFacade::segment(2) == $this->section){
            //return view($this->getConfig()->indexRoute)->with($this->data);
            return view(config('models.'.$this->section.'.indexRoute'))->with($this->data);

        }else
            return view('moto.clients.prospectosIndex')->with($this->data);

    }


    public function store()
    {
        if(!$this->request->get('budgets')) {
            //validar los campos
            $this->validate($this->request, config('models.' . $this->data['section'] . '.validationsStore'));
            //crea a traves del repo con el request
            if($this->data['section'] == 'prospectos')
                $model = $this->repo->create($this->request,1);
            else
                $model = $this->repo->create($this->request,0);


            //guarda imagenes
            if (config('models.' . $this->data['section'] . '.is_imageable'))
                $this->createImage($model, $this->request);

            //guarda log
            if (config('models.' . $this->data['section'] . '.is_logueable'))
                $this->repo->createLog($model, 1);

            //si va a una sucursal
            if (config('models.' . $this->data['section'] . '.is_brancheable'))
                $this->repo->createBrancheables($model, Auth::user()->branches_active_id);


            return redirect()->route(config('models.' . $this->data['section'] . '.postStoreRoute'), $model->id)->withErrors(['Regitro Agregado Correctamente']);
        }else{

            //validar los campos
            $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));

            //crea a traves del repo con el request
            $model = $this->repo->create($this->request,1);

            //guarda imagenes
            if(config('models.'.$this->section.'.is_imageable'))
                $this->createImage($model, $this->request);

            //guarda log
            if(config('models.'.$this->section.'.is_logueable'))
                $this->repo->createLog($model, 1);

            //si va a una sucursal
            if(config('models.'.$this->section.'.is_brancheable'))
                $this->repo->createBrancheables($model, Auth::user()->branches_active_id);

            $budget = $this->budgetsRepo->create(collect(['date' => date('Y-m-d H:i:s',time()),'clients_id' => $model->id]));

            return redirect()->route(config('models.budgets.createRoute'),$budget->id);
        }
    }

    public function update()
    {
        if (!$this->request->get('budgets')){
            //validar los campos
            $this->validate($this->request, config('models.' . $this->data['section'] . '.validationsUpdate'));

            $id = $this->route->getParameter('id');
    
            //edita a traves del repo
            $model = $this->repo->update($id, $this->request);
    
            //guarda imagenes
            if (config('models.' . $this->data['section'] . '.is_imageable'))
                $this->createImage($model, $this->request);
    
            //guarda log
            if (config('models.' . $this->data['section'] . '.is_logueable'))
                $this->repo->createLog($model, 3);
    
            //si va a una sucursal
            if (config('models.' . $this->data['section'] . '.is_brancheable'))
                $this->repo->createBrancheables($model, Auth::user()->branches_active_id);
    
    
            return redirect()->route(config('models.' . $this->data['section'] . '.postUpdateRoute'), $model->id)->withErrors(['Regitro Editado Correctamente']);
        }else{
            //validar los campos
            $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));

            $id = $this->route->getParameter('id');

            //edita a traves del repo
            $model = $this->repo->update($id,$this->request);

            //guarda imagenes
            if(config('models.'.$this->section.'.is_imageable'))
                $this->createImage($model, $this->request);

            //guarda log
            if(config('models.'.$this->section.'.is_logueable'))
                $this->repo->createLog($model, 3);

            //si va a una sucursal
            if(config('models.'.$this->section.'.is_brancheable'))
                $this->repo->createBrancheables($model, Auth::user()->branches_active_id);

            $budget = $this->budgetsRepo->create(collect(['date' => date('Y-m-d H:i:s',time()),'clients_id' => $this->request->get('model')]));

            return redirect()->route(config('models.budgets.createRoute'),$budget->id);
        }
    }

    public function show($id){
        return $this->repo->find($id);
    }

}
