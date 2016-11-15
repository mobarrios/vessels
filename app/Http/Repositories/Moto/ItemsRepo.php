<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Items;
use App\Http\Repositories\BaseRepo;


class ItemsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Items();
    }
    

}