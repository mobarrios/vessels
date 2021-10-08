<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\EquipmentsRepo;
use App\Http\Repositories\Tecnica\EquipmentsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class EquipmentsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'equipments';
        $this->data['section']  = $this->section;
    }

  
}
