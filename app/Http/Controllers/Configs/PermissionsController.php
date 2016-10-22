<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class PermissionsController extends Controller
{
    public function  __construct(PermissionsRepo $repo, Route $route){

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
