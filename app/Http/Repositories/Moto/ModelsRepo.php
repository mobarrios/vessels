<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Models;
use App\Http\Repositories\BaseRepo;


class ModelsRepo extends BaseRepo {
    
    public function getModel()
    {
        return new Models();
    }


    public function create($data)
    {
        $model =  parent::create($data); // TODO: Change the autogenerated stub
        $model->Categories()->attach($data->categories_id);
        return $model;
    }

    public function update($id, $data)
    {
        $model =  parent::update($id, $data); // TODO: Change the autogenerated stub
        $model->Categories()->sync($data->categories_id);
        return $model;

    }

    public function destroy($id)
    {
        $model =  parent::destroy($id); // TODO: Change the autogenerated stub
        $model->Categories()->detach();
        return $model;

    }


    public function allToBudgets()
    {
        return $this->getModel()
            ->where('status',1)
            ->with('Brands')
            ->with('activeListPrice')
            ->orderBy('brands_id','ASC')->orderBy('name','ASC')
            ->get();
    }

    public function oneToBudgets($id)
    {
        return $this->getModel()
            ->where('status', 1)
            ->whereNull('deleted_at')
            ->with('Brands')
            ->with('activeListPrice')
            ->with('additionables')
            ->with('additionables.additionals')
            ->orderBy('brands_id', 'ASC')->orderBy('name', 'ASC')
            ->find($id);
//            ->get());
    }

    public function stockByColors($id)
    {
        $models = $this->find($id);
        $data = $models->StockByColors;
        return $data->toArray();
    }

    public function modelsByColors($id)
    {
        $models = $this->find($id);
        $data = $models->ModelsByColors;
        return $data;
    }


    public function actualPriceCost($id)
    {
        $models = $this->find($id);
        $data = $models->activeCostPrice;


        return $data->toArray();
    }


    public function listRepuestos()
    {
        return $this->model->where('types_id', 3)->get();

    }

}