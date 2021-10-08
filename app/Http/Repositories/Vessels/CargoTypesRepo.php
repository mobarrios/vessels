<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\CargoTypes;
use App\Http\Repositories\BaseRepo;

class CargoTypesRepo extends BaseRepo {

    public function getModel()
    {
        return new CargoTypes();
    }

}
