<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Brands;
use App\Http\Repositories\BaseRepo;


class BrandsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Brands();
    }
    

}