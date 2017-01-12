<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Clients;
use App\Http\Repositories\BaseRepo;


class ClientsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Clients();
    }

    public function create($data)
    {
        $model = new $this->model();

        if(!$data->get('prospectos'))
            $data['prospectos'] = 0;

        $model->fill($data->all());

        $model->save();

        return $model;
    }


    public function update($id,$data)
    {
        $model = $this->model->find($id);

        if(!$data->get('prospectos'))
            $data['prospectos'] = 0;

        $model->fill($data->all());

        $model->save();

        return $model;
    }
}