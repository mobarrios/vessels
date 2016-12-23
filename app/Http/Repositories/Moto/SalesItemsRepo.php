<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\SalesItems;
use App\Http\Repositories\BaseRepo;


class SalesItemsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new SalesItems();
    }

    
}