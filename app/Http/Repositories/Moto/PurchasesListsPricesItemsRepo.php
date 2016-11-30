<?php
namespace App\Http\Repositories\Moto;


use App\Entities\Moto\PurchasesListsPricesItems;
use App\Http\Repositories\BaseRepo;


class PurchasesListsPricesItemsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new PurchasesListsPricesItems();
    }



}