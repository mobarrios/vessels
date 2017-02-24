<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Banks;
use App\Entities\Moto\Checkbooks;
use App\Http\Repositories\BaseRepo;


class BanksRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Banks;
    }


}