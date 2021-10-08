<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\Services;
use App\Http\Repositories\BaseRepo;
class ServicesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Services();
    }

}
