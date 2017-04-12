<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Payments;
use App\Http\Repositories\BaseRepo;


class PaymentsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Payments();
    }

}