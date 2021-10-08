<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\OrderServices;
use App\Http\Repositories\BaseRepo;

class OrderServicesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new OrderServices();
    }

}
