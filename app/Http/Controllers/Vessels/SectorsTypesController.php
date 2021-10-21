<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\SectorsTypesRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SectorsTypesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'sectorsTypes';
        $this->data['section']  = $this->section;
    }


}
