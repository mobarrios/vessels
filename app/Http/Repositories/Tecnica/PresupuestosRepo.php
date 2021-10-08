<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\Presupuestos;
use App\Http\Repositories\BaseRepo;

class PresupuestosRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Presupuestos();
    }

}
