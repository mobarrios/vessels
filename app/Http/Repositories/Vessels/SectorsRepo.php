<?php
namespace App\Http\Repositories\Vessels;

use App\Entities\Vessels\Sectors;
use App\Http\Repositories\BaseRepo;

class SectorsRepo extends BaseRepo {

    public function getModel()
    {
        return new Sectors();
    }

    public function create($data)
    {
        $model =  parent::create($data);

        $model->CargoTypes()->attach($data->request->all()['sector_cargo_types_id']);

        return $model;
    }


   public function update($id, $data)
   {

       $model = parent::update($id, $data);


       $model->CargoTypes()->sync($data->request->all()['sector_cargo_types_id']);

       return $model;
   }

}
