<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\UsersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class UsersController extends Controller
{
    public function  __construct(UsersRepo $repo, Route $route){

        $this->repo     = $repo;
        $this->route    = $route;

        //routes
        $this->data['indexRoute']   = 'configs.users.index';
        $this->data['storeRoute']   = 'configs.users.store';
        $this->data['createRoute']  = 'configs.users.create';
        $this->data['showRoute']    = 'configs.users.show';
        $this->data['editRoute']    = 'configs.users.edit';
        $this->data['updateRoute']  = 'configs.users.update';
        $this->data['destroyRoute'] = 'configs.users.destroy';

        $this->indexRoute           = 'configs.users.index';

        //url
        $this->data['destroyUrl'] = 'configs/users/destroy/';

        //views
        $this->storeView   = 'configs.users.form';

        //section name
        $this->data['section']     = 'Usuarios';

        //filter options
        $this->data['filters']       = $this->repo->getColumnSearch();

        //data paginate
        $this->paginate = 50;
    }


    
    
}
