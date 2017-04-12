<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Charges;
use App\Http\Repositories\BaseRepo;


class ChargesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Charges();
    }

}