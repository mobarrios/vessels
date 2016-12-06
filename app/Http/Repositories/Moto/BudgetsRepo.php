<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Budgets;
use App\Http\Repositories\BaseRepo;


class BudgetsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Budgets();
    }

   
}