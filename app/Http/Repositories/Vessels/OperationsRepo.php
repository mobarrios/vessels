<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\Operations;
use App\Http\Repositories\BaseRepo;

class OperationsRepo extends BaseRepo {

    public function getModel()
    {
        return new Operations();
    }

}
