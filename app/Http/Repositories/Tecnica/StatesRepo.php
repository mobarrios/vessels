<?php
namespace App\Http\Repositories\Tecnica;


use App\Entities\Tecnica\States;
use App\Http\Repositories\BaseRepo;
class StatesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new States();
    }

}
