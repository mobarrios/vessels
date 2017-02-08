<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\MyRequest;
use App\Http\Repositories\BaseRepo;


class MyRequestRepo extends BaseRepo {

    public function getModel()
    {
        return new MyRequest();
    }

}