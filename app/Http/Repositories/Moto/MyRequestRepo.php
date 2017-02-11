<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\MyRequest;
use App\Http\Repositories\BaseRepo;
use Illuminate\Support\Facades\Auth;


class MyRequestRepo extends BaseRepo {

    public function getModel()
    {
        return new MyRequest();
    }

    public function create($data)
    {
        $itemsRequestRepo = new ItemsRequestRepo();

        $model =  parent::create($data); // TODO: Change the autogenerated stub


        $cant =  $data->quantity;

        for($i=0; $i < $cant ; $i++)
        {
            $newIR = ['my_request_id'=> $model->id , 'branches_to_id'=> Auth::user()->branches_active_id ,'status'=> 1, 'types_id' => 1 ];
            $itemsRequestRepo->create($newIR);
        }

        return $model;
    }

}