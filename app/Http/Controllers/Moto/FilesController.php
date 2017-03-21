<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\CategoriesRepo;
use App\Http\Repositories\Moto\FilesRepo as Repo;
use App\Http\Repositories\Moto\ProvidersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class FilesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'files';
        $this->data['section']  = $this->section;





    }



}
