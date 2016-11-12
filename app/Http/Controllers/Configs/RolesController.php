<?php

namespace App\Http\Controllers\Configs;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\PermissionsRepo;
use App\Http\Repositories\Configs\RolesRepo as Repo;



class RolesController extends Controller
{
    public function  __construct(Repo $repo, Route $route , Request $request, PermissionsRepo $permission )
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        //filter options
        $this->data['filters']   = $this->getColumnSearch();

        //data paginate
        $this->paginate = 50;

        //data select
        $this->data['permissions']     = $permission->ListsData('name','id');


        $this->data['permissionsRepo'] = $permission;

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
        $config['section']      = 'Roles';
        $config['routes']       = 'configs.roles';
        $config['views']        = 'configs.roles';
        $config['urlDestroy']   = 'configs/roles/destroy/';
        $config['imagesPath']   = 'uploads/roles/images/';

        return (object)$config;
    }

    public function getValidation($type = null)
    {
        if($type == 'store')
            // validacion para crear
            return
                [
                    'name'      =>'required',
                    'slug'      =>'required|unique:roles,slug',
                    'permissions_id' => 'required',
                ];
        else
            // validacion para editar
            return
                [
                    'name'      =>'required',
                    'permissions_id' => 'required',
                ];

    }

    
}
