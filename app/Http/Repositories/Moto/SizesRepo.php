<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Sizes;
use App\Http\Repositories\BaseRepo;


class SizesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Sizes();
    }
    

}