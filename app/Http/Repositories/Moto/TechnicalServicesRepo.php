<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\TechnicalServices;
use App\Http\Repositories\BaseRepo;


class TechnicalServicesRepo extends BaseRepo
{

    public function getModel()
    {
        return new TechnicalServices;
    }

}