<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Services;
use App\Http\Repositories\BaseRepo;


class ServicesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Services();
    }
    

}