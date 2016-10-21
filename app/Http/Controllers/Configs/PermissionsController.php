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

        //routes
        $this->data['indexRoute']   = 'configs.permissions.index';
        $this->data['storeRoute']   = 'configs.permissions.store';
        $this->data['createRoute']  = 'configs.permissions.create';
        $this->data['showRoute']    = 'configs.permissions.show';
        $this->data['editRoute']    = 'configs.permissions.edit';
        $this->data['updateRoute']  = 'configs.permissions.update';
        $this->data['destroyRoute'] = 'configs.permissions.destroy';

        $this->indexRoute           = 'configs.permissions.index';

        //url
        $this->data['destroyUrl'] = 'configs/permissions/destroy/';

        //views
        $this->storeView   = 'configs.permissions.form';

        //section name
        $this->data['section']     = 'Permisos';

        //filter options
        $this->data['filters']       = $this->repo->getColumnSearch();

        //data paginate
        $this->paginate = 5;
    }

    
}
