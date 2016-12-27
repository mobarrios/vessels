<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\DispatchesItemsRepo;
use App\Http\Repositories\Moto\DispatchesRepo as Repo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\PurchasesOrdersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


class DispatchesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, PurchasesOrdersRepo $purchasesOrdersRepo,
                                 ModelsRepo $modelsRepo, ColorsRepo $colorsRepo , BrandsRepo $brandsRepo, ProvidersRepo $providersRepo,
                                 BranchesRepo $branchesRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'dispatches';
        $this->data['section']  = $this->section;

        $this->data['purchasesOrders'] = $purchasesOrdersRepo->ListsData('id','id');

        $this->data['models_types'] = $modelsRepo->ListsData('name','id');
        $this->data['models_lists'] = $modelsRepo->ListsData('name','id');
        $this->data['colors']       = $colorsRepo->ListsData('name','id');

        $this->data['brands']       = $brandsRepo->getAllWithModels();
        $this->data['branches']     = $branchesRepo->ListsData('name','id');

        $this->data['providers']    = $providersRepo->getModel()->all();

        $this->modelsRepo =  $modelsRepo;

    }
    

    public function addItems(DispatchesItemsRepo $dispatchesItemsRepo, ItemsRepo $itemsRepo)
    {
        $item_data = ['models_id'=> $this->request->models_id, 'n_motor' => $this->request->n_motor , 'n_cuadro'=> $this->request->n_cuadro , 'colors_id' => $this->request->colors_id , 'status'=> '1'] ;

        $item = new Items();
        $item->fill($item_data);
        $item->save();

        // AGREGA BRANCHEABLES
        $item->brancheables()->create(['branches_id' => Auth::user()->branches_active_id]);

        $this->request['items_id'] =  $item->id;

        $dispatchesItemsRepo->create($this->request);

        return redirect()->route('moto.dispatches.edit', $this->request->dispatches_id);
    }

    public function editItems(DispatchesItemsRepo $dispatchesItemsRepo)
    {
        $this->data['modelItems'] = $dispatchesItemsRepo->find($this->route->getParameter('item'));

        return parent::edit();
    }

    public function updateItems(DispatchesItemsRepo $dispatchesItemsRepo, $id)
    {
        $dispatchesItemsRepo->update($id, $this->request);

        return parent::edit();
    }

    public function deleteItems(DispatchesItemsRepo $dispatchesItemsRepo)
    {
        $dispatchesItemsRepo->destroy($this->route->getParameter('item'));

        return parent::edit();
    }

    /*
    public function addItems()
    {
        $data   = $this->request;
        if(empty($data))
            return ["error" => "Debes completar los campos"];

        else{

            $model  = $this->modelsRepo->find($data->models_id);

            $arr =  session()->has($this->section.'Items') ? session($this->section.'Items') : [];

            $newItem =
                [
                    'models_id' => $data->models_id,
                    'price_list' => $data->price_list,
                    'price_net' => $data->price_net,
                    'max_discount' => $data->max_discount,
                    'obs'=> $data->obs
                ];

            array_push($arr, $newItem);

            session()->put($this->section.'Items',$arr);

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

            $arr =  session()->has($this->section.'Items') ? session($this->section.'Items') : [];

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

            session()->put($this->section.'Items',$arr);

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
        $arr =  session()->has($this->section.'Items') ? session($this->section.'Items') : [];

        foreach($arr as $ind => $val){
            if($val["models_id"] == $data->id){
                unset($arr[$ind]);
            }
        }

        session()->put($this->section.'Items',$arr);

        return "Se eliminó correctamente el item";
    }
    */

}
