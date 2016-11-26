<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Dispatches;
use App\Http\Repositories\BaseRepo;


class DispatchesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Dispatches();
    }

}