<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\ModelsListsPricesRepo as Repo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;


class ModelsListsPricesController extends Controller
{
    protected $modelsRepo;

    public function  __construct(Request $request, Repo $repo, Route $route, ProvidersRepo $providersRepo, ModelsRepo $modelsRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'modelsListsPrices';
        $this->data['section']  = $this->section;

        //data
        $this->data['providers'] = $providersRepo->ListsData('name','id');
        $this->data['models_lists'] = $modelsRepo->ListsData('name','id');

        $this->modelsRepo =  $modelsRepo;
    }

    public function addItems()
    {
        $data   = $this->request;
        if(empty($data))
            return ["error" => "Debes completar los campos"];
        else{

            $model  = $this->modelsRepo->find($data->models_id);

            $arr =  session()->has('items') ? session('items') : [];

            $newItem =
            [
                'models_id' => $data->models_id,
                'price_list' => $data->price_list,
                'price_net' => $data->price_net,
                'max_discount' => $data->max_discount,
                'obs'=> $data->obs
            ];

            array_push($arr, $newItem);

            session()->put('items',$arr);

            return [
                    'error' => 'Se agregó correctamente el item',
                    'success' => [
                        'models_name' => $model->name,
                        'models_id' => $model->id,
                        'price_list' => $data->price_list,
                        'price_net' => $data->price_net,
                        'max_discount' => $data->max_discount
                    ]
            ];
        }
    }

    public function editItems()
    {
        $data   = $this->request;
        if(empty($data))
            return ["error" => "Debes completar los campos"];

        else{

            $model  = $this->modelsRepo->find($data->models_id);

            $arr =  session()->has('items') ? session('items') : [];

            $newItem =
            [
                'models_id' => $data->models_id,
                'price_list' => $data->price_list,
                'price_net' => $data->price_net,
                'max_discount' => $data->max_discount,
                'obs'=> $data->obs
            ];

//            array_push($arr, $newItem);

            foreach($arr as $ind => $val){
                if($val["models_id"] == $data->id){
                    $arr[$ind] = $newItem;
                }
            }

            session()->put('items',$arr);

            return [
                    'error' => 'Se editó correctamente el item',
                    'success' => [
                        'models_name' => $model->name,
                        'models_id' => $model->id,
                        'price_list' => $data->price_list,
                        'price_net' => $data->price_net,
                        'max_discount' => $data->max_discount
                    ]
            ];
        }
    }

    public function deleteItems()
    {
        $data   = $this->request;
        $arr =  session()->has('items') ? session('items') : [];

        foreach($arr as $ind => $val){
            if($val["models_id"] == $data->id){
                unset($arr[$ind]);
            }
        }

        session()->put('items',$arr);

        return "Se eliminó correctamente el item";
    }
}
