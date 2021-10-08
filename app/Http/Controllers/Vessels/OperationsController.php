<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\OperationsRepo as Repo;
use App\Http\Repositories\Vessels\SectorsRepo;

use App\Entities\Vessels\OperationsTypes;
use App\Entities\Vessels\Locations;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class OperationsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, SectorsRepo $SectorsRepo, OperationsTypes $operationsTypes, Locations $locations)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'operations';
        $this->data['section']  = $this->section;
        $this->data['sectors']  = $SectorsRepo->getModel()->where('vessels_id',5)->lists('name','id');

        $this->data['operationsTypes'] = $operationsTypes->lists('name','id');
        $this->data['locations'] = $locations->lists('name','id');
    }




}
