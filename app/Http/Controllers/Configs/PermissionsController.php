<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class PermissionsController extends Controller
{
    public function  __construct(PermissionsRepo $repo, Route $route){

        $this->repo  = $repo;
        $this->route = $route;
        $this->data['searchRoute'] = 'configs.permissions';
        $this->data['section']    = 'Permisos';
        $this->indexRoute =  'configs.permissions.index';
        $this->paginate = 50;

    }

    
}
