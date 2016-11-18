<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Certificates;
use App\Http\Repositories\BaseRepo;


class CertificatesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Certificates();
    }
    

}