<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo as Repo;
use App\Http\Repositories\Configs\UsersRepo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class BranchesController extends Controller
{
    protected $userRepo;

    public function  __construct(Request $request, Repo $repo, Route $route, UsersRepo $usersRepo){

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;
        $this->userRepo = $usersRepo;
        
        //filter options
        $this->data['filters']  = $this->getColumnSearch();

        //data paginate
        $this->paginate         = 50;

        //data select
        $this->data['users']    = $usersRepo->ListAll()->get();

        //configs
        $this->data['config']  =  $this->getConfig();
    }



    //----- configs
    public function getColumnSearch(){

        return ['Nombre'=>'name','Dirección'=>'address','Telefono'=>'Phone','Tipo'=>'type'];
    }

    public function configs()
    {
        $config['section']      = 'Sucursales';
        $config['routes']       = 'configs.branches';
        $config['views']        = 'configs.branches';
        $config['urlDestroy']   = 'configs/branches/destroy/';
        $config['imagesPath']   = 'uploads/branches/images/';


        return (object)$config;
    }

    public function getValidation($type = null)
    {
        if($type == 'store')
            // validacion para crear
            return
                [
                    'name'      =>'required',
                    'address' =>'required',
                    'phone'  => 'numeric'
                ];
        else
            // validacion para editar
            return
                [
                    'name'      =>'required',
                    'address' =>'required',
                    'phone'  => 'numeric'
                ];

    }

}
