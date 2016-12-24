<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\ItemsRequest;
use App\Http\Repositories\BaseRepo;
use Illuminate\Support\Facades\Auth;


class ItemsRequestRepo extends BaseRepo {

    public function getModel()
    {
        return new ItemsRequest();
    }

    public function create($data)
    {


        $model = new $this->model();
        $model->fill($data);
        $model->save();

        $this->createBrancheables($model, Auth::user()->branches_active_id);

        return $model;
    }

}