<?php
namespace App\Http\Repositories\Moto;


use App\Entities\Moto\PurchasesOrdersItems;
use App\Http\Repositories\BaseRepo;


class PurchasesOrdersItemsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new PurchasesOrdersItems();
    }



}