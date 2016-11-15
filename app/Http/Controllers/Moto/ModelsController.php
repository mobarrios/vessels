<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\CategoriesRepo;
use App\Http\Repositories\Moto\ModelsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ModelsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, BrandsRepo $brandsRepo, CategoriesRepo $categoriesRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'models';
        $this->data['section']  = $this->section;

        // data
        $this->data['brands'] = $brandsRepo->ListsData('name','id');
        $this->data['categories'] = $categoriesRepo->ListsData('name','id');

    }

}
