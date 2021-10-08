<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\VesselsTypesRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class VesselsTypesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'vesselsTypes';
        $this->data['section']  = $this->section;

    }

  

}
