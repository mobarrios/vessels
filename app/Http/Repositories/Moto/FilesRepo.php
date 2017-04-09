<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Files;
use App\Http\Repositories\BaseRepo;


class FilesRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Files;
    }



}