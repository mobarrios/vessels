<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\DispatchesItems;
use App\Http\Repositories\BaseRepo;


class DispatchesItemsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new DispatchesItems();
    }
    
}