<?php
namespace App\Http\Repositories\Moto;


use App\Entities\Moto\ModelsListsPrices;
use App\Http\Repositories\BaseRepo;


class ModelsListsPricesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new ModelsListsPrices();
    }



}