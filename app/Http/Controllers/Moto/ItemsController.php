<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Certificates;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\CertificatesRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ItemsRepo as Repo;
use App\Http\Repositories\Moto\ModelsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


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
