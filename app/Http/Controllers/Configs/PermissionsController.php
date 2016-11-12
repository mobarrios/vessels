<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class PermissionsController extends Controller
{
    public function  __construct(Repo $repo, Route $route,  Request $request){

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        //filter options
        $this->data['filters']   = $this->getColumnSearch();

        //data paginate
        $this->paginate = 50;

        //data select

        //configs
        $this->data['config']  =  $this->getConfig();
    }


    //----- configs
    public function getColumnSearch()
    {
        return ['Nombre'=>'name','Slug'=>'slug' ];
    }

    public function configs()
    {
        $config['section']      = 'Permisos';
        $config['routes']       = 'configs.permissions';
        $config['views']        = 'configs.permissions';
        $config['urlDestroy']   = 'configs/permissions/destroy/';
        $config['imagesPath']   = 'uploads/permissions/images/';

        return (object)$config;
    }

    public function getValidation($type = null)
    {
        if($type == 'store')
            // validacion para crear
            return
                [
                    'name' =>'required',
                    'slug' =>'required|unique:permissions,slug',
                ];
        else
            // validacion para editar
            return
                [
                    'name' =>'required',
                    'slug' => 'required',
                ];

    }

    
}
