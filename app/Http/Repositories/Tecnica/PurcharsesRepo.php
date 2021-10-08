<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\Purcharses;
use App\Http\Repositories\BaseRepo;

class PurcharsesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Purcharses();
    }

}
