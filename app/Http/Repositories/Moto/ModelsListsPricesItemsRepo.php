<?php
namespace App\Http\Repositories\Moto;


use App\Entities\Moto\ModelsListsPricesItems;
use App\Http\Repositories\BaseRepo;


class ModelsListsPricesItemsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new ModelsListsPricesItems();
    }



}