<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Files;
use App\Entities\Moto\Form12;
use App\Entities\Moto\Form59;
use App\Http\Repositories\BaseRepo;


class Form59Repo extends BaseRepo {
    
    public function getModel()
    {
        return new Form59;
    }



}