<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ItemsRequestRepo as Repo;
use App\Http\Repositories\Moto\ModelsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ItemsRequestController extends Controller
{

    public function  __construct(Request $request, Repo $repo, Route $route, ItemsRepo $itemsRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'itemsRequest';
        $this->data['section']  = $this->section;

        //data
        //$this->data['models_types'] = $modelsRepo->ListsData('name','id');
        //$this->data['colors']       = $colorsRepo->ListsData('name','id');

        //$this->data['brands']   = $brandsRepo->getAllWithModels();


          if(!is_null($route->getParameter('id')))
          {
              $itemRequest = $this->repo->find($route->getParameter('id'));

              $items = $itemsRepo->getModel()->where('id','!=',$itemRequest->items_id )->where('models_id',$itemRequest->items->models_id)->get();

            $this->data['items'] = $items;
          }

    }

    public  function reasign()
    {
        $newId = $this->route->getParameter('newId');
        $id = $this->route->getParameter('id');

        $model = $this->repo->find($id);
        $model->items_id =  $newId;
        $model->save();

        return redirect()->back()->withErrors('Articulo Reasignado correctamente.');
    }

}
