<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\Caracteristicas;
use App\Http\Repositories\BaseRepo;


class CaracteristicasRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Caracteristicas();
    }

}