<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\LocationsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class LocationsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'locations';
        $this->data['section']  = $this->section;
    }


}
