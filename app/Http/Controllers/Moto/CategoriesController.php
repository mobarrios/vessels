<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\CategoriesRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class CategoriesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'categories';
        $this->data['section']  = $this->section;

    }

}
