<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Sales;
use App\Http\Repositories\BaseRepo;


class SalesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Sales();
    }

   
}