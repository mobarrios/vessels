<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\Locations;
use App\Http\Repositories\BaseRepo;

class LocationsRepo extends BaseRepo {

    public function getModel()
    {
        return new Locations();
    }

}
