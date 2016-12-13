<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Financials;
use App\Http\Repositories\BaseRepo;


class FinancialsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Financials();
    }

    public function getAllWithDues(){
        return $this->model->with('FinancialsDues')->get();
    }

}