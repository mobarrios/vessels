<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\DepartureReport;
use App\Http\Repositories\BaseRepo;

class DepartureReportRepo extends BaseRepo {

    public function getModel()
    {
        return new DepartureReport();
    }

}
