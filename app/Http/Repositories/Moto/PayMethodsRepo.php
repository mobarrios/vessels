<?php

namespace App\Http\Repositories\Moto;

use App\Entities\Moto\PayMethods;
use App\Http\Repositories\BaseRepo;

class PayMethodsRepo extends BaseRepo {

    public function getModel()
    {
        return new PayMethods();
    }





}