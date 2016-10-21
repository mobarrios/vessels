<?php
namespace App\Http\Repositories\Configs;

use App\Http\Repositories\BaseRepo;
use Bican\Roles\Models\Permission;

class PermissionsRepo extends BaseRepo {

    public function getModel(){
        return new Permission();
    }

    public function listAll(){

      return $this->model;
    }

    public function getColumnSearch(){

        return ['Nombre'=>'name','Slug'=>'slug','Descripción'=>'description'];
    }




}