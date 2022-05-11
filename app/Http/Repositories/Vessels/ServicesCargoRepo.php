<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\ServicesCargo;
use App\Http\Repositories\BaseRepo;

class ServicesCargoRepo extends BaseRepo {

    public function getModel()
    {
        return new ServicesCargo();
    }

}
