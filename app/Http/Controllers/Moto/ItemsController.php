<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Certificates;
use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\CertificatesRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ItemsRepo as Repo;
use App\Http\Repositories\Moto\ModelsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;


class ItemsController extends Controller
{

    protected  $certificatesRepo;

    public function  __construct(Request $request, Repo $repo, Route $route, ModelsRepo $modelsRepo, ColorsRepo $colorsRepo ,  BrandsRepo $brandsRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'items';
        $this->data['section']  = $this->section;

        //data
        $this->data['models_types'] = $modelsRepo->ListsData('name','id');
        $this->data['colors']       = $colorsRepo->ListsData('name','id');

        $this->data['brands']   = $brandsRepo->getAllWithModels();

       // $this->certificatesRepo = $certificatesRepo;
    }

    public function index()
    {
        //breadcrumb activo
        $this->data['activeBread'] = 'Listar';

        //si request de busqueda
        if( isset($this->request->search) && !is_null($this->request->filter))
        {
            $model = $this->repo->search($this->request);

            if(is_null($model) || $model->count() == 0)
                //si paso la seccion
                $model = $this->repo->listAll($this->section);
        }
        else
        {
            $type = $this->route->getParameter('types');

            $model  = Items::whereHas('models',function($q) use ($type){
                return $q->where('types_id',$type);
            });

        }



        //guarda en session lo que se busco para exportar
        Session::put('export',$model->get());

        //pagina el query
        $this->data['models'] = $model->paginate(config('models.'.$this->section.'.paginate'));

        //return view($this->getConfig()->indexRoute)->with($this->data);
        return view(config('models.'.$this->section.'.indexRoute'))->with($this->data);


    }

    public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));

        //crea a traves del repo con el request
        $model = $this->repo->create($this->request);

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),$model->models->types_id)->withErrors(['Regitro Agregado Correctamente']);
    }


    public function update()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));

        $id = $this->route->getParameter('id');

        //edita a traves del repo
        $model = $this->repo->update($id,$this->request);

        return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),$model->models->types_id)->withErrors(['Regitro Editado Correctamente']);
    }


    public function itemsByModels()
    {
        $id = $this->route->getParameter('id');

        $data = $this->repo->ItemsByModels($id);
        return response()->json($data);
    }

    //busca nro motor
    public function itemsByMotor()
    {
        // busca si el numero de motor existe devuelvo bool

        $nMotor = $this->route->getParameter('nMotor');
        $res = $this->repo->getModel()->where('n_motor', $nMotor)->get();

        if($res->count() == '1')
            return response()->json(true);
        else
            return response()->json(false);
    }


    //busca nro cuadro
    public function itemsByCuadro()
    {
        // busca si el numero de motor existe devuelvo bool

        $nCuadro = $this->route->getParameter('nCuadro');
        $res = $this->repo->getModel()->where('n_cuadro', $nCuadro)->get();

        if($res->count() == '1')
            return response()->json(true);
        else
            return response()->json(false);
    }


    
}
