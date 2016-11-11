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
        $this->data['roles']    = $rolesRepo->listsAll();
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
            $config['urlDestroy']   = 'configs/users/destroy/';
            $config['imagesPath']   = 'uploads/users/images/';

            return (object)$config;
        }



    /*

        public function update()
        {
            $id = $this->route->getParameter('id');

            if(empty($this->request->password))
                $this->request->offsetUnset('password');
            else
                $this->request['password'] = Hash::make($this->request->password);

            $this->repo->udpate($id,$this->request);

            return redirect()->route($this->config->indexRoute)->withErrors(['Regitro Editado Correctamente']);

        }
    */

}
