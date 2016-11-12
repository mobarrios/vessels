<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo;
use App\Http\Repositories\Configs\LogsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class LogsController extends Controller
{
    public function  __construct(Repo $repo, Route $route, PermissionsRepo $permission, Request $request){

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->data['routes'] = $this->config;

        //filter options
        $this->data['filters']       = $this->getColumnSearch();

        //data paginate
        $this->paginate = 50;

        //data select
        $this->data['permissions']    = $permission->ListAll()->get();

        $this->data['permissionsRepo'] = $permission;

        //configs
        $this->data['config']  =  $this->getConfig();

    }

    //----- configs
    public function getColumnSearch()
    {
        return ['Nombre'=>'log'];
    }

    public function configs()
    {
        $config['section']      = 'Logs';
        $config['routes']       = 'configs.logs';
        $config['views']        = 'configs.logs';
        $config['urlDestroy']   = 'configs/logs/destroy/';
        $config['imagesPath']   = 'uploads/logs/images/';

        return (object)$config;
    }

    public function getValidation($type = null)
    {
        if($type == 'store')
            // validacion para crear
            return
                [
                    'email'     =>'required|unique:users,email|email',

                ];
        else
            // validacion para editar
            return
                [
                    'name'      =>'required',

                ];

    }

    
}
