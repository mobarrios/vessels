<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ItemsRequestRepo as Repo;
use App\Http\Repositories\Moto\MyRequestRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ItemsRequestController extends Controller
{
    protected $itemsRepo;

    public function __construct(Request $request, Repo $repo, Route $route, ItemsRepo $itemsRepo, MyRequestRepo $myRequestRepo)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->route = $route;
        $this->itemsRepo = $itemsRepo;


        $this->section = 'itemsRequest';
        $this->data['section'] = $this->section;

        //data
        //$this->data['models_types'] = $modelsRepo->ListsData('name','id');
        //$this->data['colors']       = $colorsRepo->ListsData('name','id');

        $this->data['myRequests'] = $myRequestRepo->getModel()->orderBy('created_at', 'DESC')->get();


        if (!is_null($route->getParameter('id'))) {
            $itemRequest = $this->repo->find($route->getParameter('id'));

            $items = $itemsRepo->getModel()->where('id', '!=', $itemRequest->items_id)->where('models_id', $itemRequest->items->models_id)->get();

            $this->data['items'] = $items;
        }

    }

    public function reasign()
    {

        $newId = $this->route->getParameter('newId');
        $id = $this->route->getParameter('id');

        $model = $this->repo->find($id);
        $model->items_id = $newId;
        $model->save();

        return redirect()->back()->withErrors('Articulo Reasignado correctamente.');
    }

    public function asign()
    {
        $this->data['activeBread'] = 'Asignar';
        $this->data['branchesTo'] = $this->route->getParameter('branchesTo');

        $items = $this->itemsRepo->getModel()->where('models_id', $this->route->getParameter('modelsId'))->get();

        $this->data['items'] = $items;


        return view('moto.itemsRequest.asign')->with($this->data);
    }

    public function postAsign()
    {
        $newId = $this->route->getParameter('itemId');
        $item = $this->itemsRepo->find($newId);
        $branchesTo = $this->route->getParameter('branchesTo');
        $branchesFrom = $item->Brancheables->first()->branches_id;



        $new = ['items_id' => $newId, 'status' => 1, 'branches_from_id' => $branchesFrom, 'branches_to_id' => $branchesTo];

        $model = $this->repo->create($new);


        return redirect()->back()->withErrors('Articulo Asignado correctamente.');
    }
}
