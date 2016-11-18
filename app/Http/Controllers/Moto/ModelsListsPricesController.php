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
        $model  = $this->modelsRepo->find($data->models_id);

        $arr[] =  Session::get('items');

        $newItem[] =
        [
           'models_id' => $data->models_id,
            'models_name' => $model->name,
            'brands_name'  => $model->Brands->name,
            'price_list' => $data->price_list,
            'price_net' => $data->price_net,
            'max_discount' => $data->max_discount,
            'obs'=> $data->obs

        ];

        array_push($arr, $newItem);


        Session::put('items',$arr);

        //Session::flush();

        return redirect()->back()->withErrors(['Item Agregado Correctamente']);
    }

    public function removeItems()
    {

    }
}
