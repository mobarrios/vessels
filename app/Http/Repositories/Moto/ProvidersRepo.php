<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Providers;
use App\Http\Repositories\BaseRepo;


class ProvidersRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Providers();
    }



}