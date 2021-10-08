<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\Productos;
use App\Http\Repositories\BaseRepo;

class ProductosRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Productos();
    }

}
