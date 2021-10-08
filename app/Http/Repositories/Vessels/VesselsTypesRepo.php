<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\VesselsTypes;
use App\Http\Repositories\BaseRepo;

class VesselsTypesRepo extends BaseRepo {

    public function getModel()
    {
        return new VesselsTypes();
    }

}
