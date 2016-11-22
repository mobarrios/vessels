<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Models;
use App\Entities\Moto\PurchasesOrders;
use App\Http\Repositories\BaseRepo;


class PurchasesOrdersRepo extends BaseRepo {
    
    public function getModel()
    {
        return new PurchasesOrders();
    }



}