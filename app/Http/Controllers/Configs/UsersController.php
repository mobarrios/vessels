<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Configs\RolesRepo;
use App\Http\Repositories\Configs\UsersRepo as Repo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function  __construct(Repo $repo, Route $route , RolesRepo $rolesRepo , Request $request, BranchesRepo $branchesRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;
        $this->rolesRepo = $rolesRepo;


        //filter options
        $this->data['filters']   = $this->getColumnSearch();

        //data paginate
        $this->paginate = 50;

        //data select
        $this->data['roles']    = $rolesRepo->listsData('name','id');
        $this->data['branches'] = $branchesRepo->listsData('name', 'id');

        //configs
        $this->data['config']  =  $this->getConfig();

    }

        //----- configs
        public function getColumnSearch()
        {
            return ['Nombre'=>'name','Apellido'=>'last_name' ,'Email'=>'email'];
        }

        public function configs()
        {
            $config['section']      = 'Usuarios';
            $config['routes']       = 'configs.users';
            $config['views']        = 'configs.users';
            $config['urlDestroy']   = route("configs.users.destroy");
            $config['imagesPath']   = 'uploads/users/images/';

            return (object)$config;
        }

        public function getValidation($type = null)
        {
            if($type == 'store')
                // validacion para crear
                  return
                      [
                        'email'     =>'required|unique:users,email|email',
                        'name'      =>'required',
                        'last_name' =>'required',
                        'password'  => 'required',
                        'roles_id'  => 'required',
                        'branches_id' => 'required',
                     ];
            else
                // validacion para editar
                return
                    [
                        'name'      =>'required',
                        'last_name' =>'required',
                        'roles_id'  => 'required',
                        'branches_id' => 'required',
                    ];

        }
}
