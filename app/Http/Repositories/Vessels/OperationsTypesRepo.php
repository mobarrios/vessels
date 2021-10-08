<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\OperationsTypes;
use App\Http\Repositories\BaseRepo;

class OperationsTypesRepo extends BaseRepo {

    public function getModel()
    {
        return new OperationsTypes();
    }

}
