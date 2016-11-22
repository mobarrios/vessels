<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Clients;
use App\Http\Repositories\BaseRepo;


class ClientsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Clients();
    }


}