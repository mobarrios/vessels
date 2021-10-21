<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\SectorsTypes;
use App\Http\Repositories\BaseRepo;

class SectorsTypesRepo extends BaseRepo {

    public function getModel()
    {
        return new SectorsTypes();
    }

}
