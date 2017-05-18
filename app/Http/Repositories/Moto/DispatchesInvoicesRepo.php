<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\DispatchesInvoices;
use App\Http\Repositories\BaseRepo;


class DispatchesInvoicesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new DispatchesInvoices();
    }

   
}