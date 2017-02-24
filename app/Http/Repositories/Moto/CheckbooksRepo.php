<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Checkbooks;
use App\Http\Repositories\BaseRepo;


class CheckbooksRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Checkbooks;
    }


}