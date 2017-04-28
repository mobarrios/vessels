<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Files;
use App\Entities\Moto\Form12;
use App\Http\Repositories\BaseRepo;


class Form12Repo extends BaseRepo {
    
    public function getModel()
    {
        return new Form12;
    }



}