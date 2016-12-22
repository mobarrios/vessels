<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Budgets;
use App\Entities\Moto\BudgetsItems;
use App\Http\Repositories\BaseRepo;


class BudgetsItemsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new BudgetsItems();
    }

   
}