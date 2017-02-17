<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\MyRequestRepo as Repo;
use Collective\Html\FormBuilder;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;


class MyRequestController extends Controller
{

    public function  __construct(Request $request, Repo $repo, Route $route, ItemsRepo $itemsRepo, BrandsRepo $brandsRepo, ColorsRepo $colorsRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'myRequest';
        $this->data['section']  = $this->section;

        //data
        //$this->data['models_types'] = $modelsRepo->ListsData('name','id');
        $this->data['colors']       = $colorsRepo->ListsData('name','id');

        $this->data['brands']   = $brandsRepo->getAllWithModels();
        
    }
    

}
