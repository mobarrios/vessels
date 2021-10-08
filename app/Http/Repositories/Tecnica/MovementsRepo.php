<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\Movements;
use App\Http\Repositories\BaseRepo;


class MovementsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Movements();
    }

}