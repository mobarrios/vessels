<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\SurfersReport;
use App\Http\Repositories\BaseRepo;

class SurfersReportRepo extends BaseRepo {

    public function getModel()
    {
        return new SurfersReport();
    }

}
