<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Categories;
use App\Http\Repositories\BaseRepo;


class CategoriesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Categories();
    }
    

}