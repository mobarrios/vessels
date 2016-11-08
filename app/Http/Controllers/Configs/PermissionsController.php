<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class PermissionsController extends Controller
{
    public function  __construct(Repo $repo, Route $route, PermissionsRepo $permission, Request $request){

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->config = (object)$repo->getConfig();
        $this->data['routes'] = $this->config;

        //filter options
        $this->data['filters']       = $this->repo->getColumnSearch();

        //data paginate
        $this->paginate = 50;
    }

    
}
