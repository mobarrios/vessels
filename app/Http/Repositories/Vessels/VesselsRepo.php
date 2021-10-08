<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\Vessels;
use App\Http\Repositories\BaseRepo;

class VesselsRepo extends BaseRepo {

    public function getModel()
    {
        return new Vessels();
    }

}
