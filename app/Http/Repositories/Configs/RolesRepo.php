<?php
namespace App\Http\Repositories\Configs;

use App\Http\Repositories\BaseRepo;
use Bican\Roles\Models\Role;

class RolesRepo extends BaseRepo {

    public function getModel(){
        return new Role();
    }

    public function listAll(){

      return $this->model;
    }

    public function listsAll()
    {
        return $this->model->lists('name','id');
    }


    public function getColumnSearch(){

        return ['Nombre'=>'name','Slug'=>'slug','Descripción'=>'description','Nivel'=>'level'];
    }


    public function getConfig(){

        return [
            //nombre de la seccion
            'sectionName' => 'Roles',

            //routes
            'indexRoute'    => 'configs.roles.index',
            'storeRoute'    => 'configs.roles.store',
            'createRoute'   => 'configs.roles.create',
            'showRoute'     => 'configs.roles.show',
            'editRoute'     => 'configs.roles.edit',
            'updateRoute'   => 'configs.roles.update',
            'destroyRoute'  => 'configs.roles.destroy',

            //urls
            'destroyUrl' => 'configs/roles/destroy/',

            //views
            'storeView' =>  'configs.roles.form',
            'editView'  =>  'configs.roles.form',

        ];
    }

}