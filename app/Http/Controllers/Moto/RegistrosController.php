<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\ProvinciasRepo;
use App\Http\Repositories\Moto\RegistrosRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class RegistrosController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, ProvinciasRepo $provinciasRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'registros';
        $this->data['section']  = $this->section;

        $this->data['provincias'] = $provinciasRepo->listAll()->get();


    }

}
