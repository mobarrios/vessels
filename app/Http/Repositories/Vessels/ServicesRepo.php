<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\Services;
use App\Http\Repositories\BaseRepo;

class ServicesRepo extends BaseRepo {

    public function getModel()
    {
        return new Services();
    }

}
