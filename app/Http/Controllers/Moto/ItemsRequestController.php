<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ItemsRequestRepo as Repo;
use App\Http\Repositories\Moto\ModelsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ItemsRequestController extends Controller
{

    public function  __construct(Request $request, Repo $repo, Route $route, ModelsRepo $modelsRepo, ColorsRepo $colorsRepo ,  BrandsRepo $brandsRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'itemsRequest';
        $this->data['section']  = $this->section;

        //data
        //$this->data['models_types'] = $modelsRepo->ListsData('name','id');
        //$this->data['colors']       = $colorsRepo->ListsData('name','id');

        //$this->data['brands']   = $brandsRepo->getAllWithModels();

    }

}
