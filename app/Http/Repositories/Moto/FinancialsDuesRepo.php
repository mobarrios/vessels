<?php
namespace App\Http\Repositories\Moto;


use App\Entities\Moto\FinancialsDues;
use App\Http\Repositories\BaseRepo;


class FinancialsDuesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new FinancialsDues();
    }



}