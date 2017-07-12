<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\ServicesRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ServicesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'services';
        $this->data['section']  = $this->section;

    }

}
