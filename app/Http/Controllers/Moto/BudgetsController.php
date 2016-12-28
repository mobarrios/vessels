<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Budgets;
use App\Entities\Moto\BudgetsItems;
use App\Entities\Moto\Clients;
use App\Entities\Moto\Models;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\BudgetsItemsRepo;
use App\Http\Repositories\Moto\BudgetsRepo as Repo;
use App\Http\Repositories\Moto\FinancialsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class BudgetsController extends Controller
{
    protected $clients;
    protected $budgets;
    protected $models;

    public function  __construct(Request $request, Repo $repo, Route $route, BrandsRepo $brandsRepo, FinancialsRepo $financialsRepo, Clients $clients, Budgets $budgets, Models $models)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'budgets';
        $this->data['section']  = $this->section;

        $this->data['brands']       = $brandsRepo->getAllWithModels();
        $this->data['financials']   = $financialsRepo->getAllWithDues() ;

        $this->clients = $clients;
        $this->models = $models;
    }

    public function index($id = null){
        $this->data['budgets'] = $this->clients->find($id)->budgets;

        return parent::index();
    }


    public function findByClients()
    {
        $clients_id = $this->route->getParameter('id');

        $data = $this->repo->findByClients($clients_id);
        
        return response()->json($data);
    }


    public function create($cliente = null, $id = null)
    {
        if($id){
            $this->data['budget'] = $this->repo->find($id);
            $this->data['items'] = $this->models->lists('name','id');
        }

        $this->data['client'] = $this->clients->find($cliente);

        return parent::create();
    }

    public function edit($cliente = null, $id = null)
    {
        if($id){
            $this->data['budget'] = $this->repo->find($id);
            $this->data['items'] = $this->models->lists('name','id');
        }

        $this->data['client'] = $this->clients->find($cliente);

        return parent::edit();
    }

    public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));

        //crea a traves del repo con el request
        $model = $this->repo->create(collect(['date' => date('Y-m-d H:i:s',time()),'clients_id' => $this->request->get('clients_id')]));


        //guarda imagenes
        if(config('models.'.$this->section.'.is_imageable'))
            $this->createImage($model, $this->request);

        //guarda log
        if(config('models.'.$this->section.'.is_logueable'))
            $this->repo->createLog($model, 1);

        //si va a una sucursal
        if(config('models.'.$this->section.'.is_brancheable'))
            $this->repo->createBrancheables($model, $this->request->user()['branches_id']);

        $this->data['models'] = $model;

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),[$this->request->get('clients_id'),$model->id])->withErrors(['Registro Agregado Correctamente']);
    }

    public function update()
    {
        dd($this->request->get('modo_financiamiento'));
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));

        if($this->route->getParameter('id'))
            $id = $this->route->getParameter('id');
        else
            $id = $this->request->get('id');


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
            $this->repo->createBrancheables($model, $this->request->all()['branches_id']);

        if($this->route->getParameter('id'))
            return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),$model->id)->withErrors(['Regitro Editado Correctamente']);
        else
//            return redirect()->back();
            return redirect()->route('moto.'.$this->section.'.pdf',$model->id);

    }



    public function addItems(BudgetsItemsRepo $budgetsItemsRepo)
    {
        $budgetsItemsRepo->create($this->request);

        return redirect()->route('moto.'.$this->section.'.edit',[$this->route->getParameter('cliente'),$this->request->budgets_id]);
    }

    public function editItems($cliente = null,$item = null,$id = null,BudgetsItemsRepo $budgetsItemsRepo)
    {
        $this->data['modelItems'] = $budgetsItemsRepo->find($id);
        $this->data['activeBread'] = 'Editar';
        $this->data['budget'] = $this->repo->find($item);

        $this->data['items'] = $this->models->lists('name','id');


        $this->data['client'] = $this->clients->find($cliente);

        return view(config('models.'.$this->section.'.editView'))->with($this->data);
    }

    public function updateItems($cliente = null,$item = null,$id,BudgetsItemsRepo $budgetsItemsRepo)
    {
//        $budgetsItemsRepo->update($id,$this->request);

//        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));

        $id = $this->route->getParameter('id');

        //edita a traves del repo
        $model = $budgetsItemsRepo->update($id,$this->request);

        //guarda imagenes
        if(config('models.'.$this->section.'.is_imageable'))
            $this->createImage($model, $this->request);

        //guarda log
        if(config('models.'.$this->section.'.is_logueable'))
            $budgetsItemsRepo->createLog($model, 3);

        //si va a una sucursal
//        if(config('models.'.$this->section.'.is_brancheable'))
//            $budgetsItemsRepo->createBrancheables($model, $this->request->all()['branches_id']);


        $this->data['activeBread'] = 'Editar';

        $this->data['items'] = $this->models->lists('name','id');


        $this->data['client'] = $this->clients->find($cliente);

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),[$cliente,$item])->withErrors(['Registro modificado Correctamente']);
    }

    public function deleteItems($cliente = null,$item = null,$id,BudgetsItemsRepo $budgetsItemsRepo)
    {
        $budgetsItemsRepo->destroy($id);

        $this->data['activeBread'] = 'Editar';

        $this->data['items'] = $this->models->lists('name','id');


        $this->data['client'] = $this->clients->find($cliente);

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),[$cliente,$item])->withErrors(['Registro modificado Correctamente']);
    }

}
