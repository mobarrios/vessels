<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\SectorsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Entities\Vessels\CargoTypes;

class SectorsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, CargoTypes $cargoTypes)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'sectors';
        $this->data['section']  = $this->section;
        $this->data['cargoTypes'] = $cargoTypes->lists('name','id');
    }


}
