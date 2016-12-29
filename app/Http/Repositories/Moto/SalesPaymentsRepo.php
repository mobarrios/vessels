<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\SalesPayments;
use App\Http\Repositories\BaseRepo;


class SalesPaymentsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new SalesPayments();
    }
  

}