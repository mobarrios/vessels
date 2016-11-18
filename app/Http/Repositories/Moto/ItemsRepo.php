<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Certificates;
use App\Entities\Moto\Items;
use App\Http\Repositories\BaseRepo;


class ItemsRepo extends BaseRepo {

    public function getModel()
    {
        return new Items();
    }

    public function create($data)
    {
        $model = parent::create($data); // TODO: Change the autogenerated stub
        
        $certificates               = new Certificates();
        $certificates->items_id     = $model->id;
        $certificates->number       = $data->number;
        $certificates->date         = $data->date;
        $certificates->tecnic_model =  $data->tecnic_model;
        $certificates->type         = $data->type;
        $certificates->save();

        return $model;
    }
}