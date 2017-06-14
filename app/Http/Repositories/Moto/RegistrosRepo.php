<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Registros;
use App\Http\Repositories\BaseRepo;


class RegistrosRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Registros();
    }


}