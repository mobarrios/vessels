<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Colors;
use App\Http\Repositories\BaseRepo;


class ColorsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Colors();
    }
    

}