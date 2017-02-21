<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\SmallBoxes;
use App\Http\Repositories\BaseRepo;


class SmallBoxesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new SmallBoxes;
    }


}