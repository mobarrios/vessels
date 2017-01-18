<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\ProvidersPayments;
use App\Http\Repositories\BaseRepo;


class ProvidersPaymentsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new ProvidersPayments();
    }



}