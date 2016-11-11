<?php
namespace App\Http\Repositories\Configs;

use App\Http\Repositories\BaseRepo;
use Bican\Roles\Models\Permission;

class PermissionsRepo extends BaseRepo {

    public function getModel()
    {
        return new Permission();
    }

    
    public function getPermissonsByRoles(){

        return $this->attributes['created_at'];
    }



}