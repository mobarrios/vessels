<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\DmReport;
use App\Http\Repositories\BaseRepo;

class DmReportRepo extends BaseRepo {

    public function getModel()
    {
        return new DmReport();
    }

}
