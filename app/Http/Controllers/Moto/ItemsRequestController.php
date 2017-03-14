<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Branches;
use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ItemsRequestRepo as Repo;
use App\Http\Repositories\Moto\MyRequestRepo;
use Barryvdh\DomPDF\PDF;
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

        //$this->data['myRequests'] = $myRequestRepo->getModel()->orderBy('created_at', 'DESC')->get();

        $this->data['pendings'] = $this->repo->getPending();

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

    public function asign(MyRequestRepo $myRequestRepo)
    {
        $this->data['activeBread'] = 'Asignar';
        $this->data['branchesTo'] = $this->route->getParameter('branchesTo');
        $this->data['myRequest'] = $myRequestRepo->find($this->route->getParameter('myRequestId'));
        $this->data['itemsRequestId'] = $this->route->getParameter('itemsRequestId');

        $items = $this->itemsRepo->getModel()->where('models_id', $this->route->getParameter('modelsId'))->where('status','!=',4)->get();


        $this->data['items'] = $items;


        return view('moto.itemsRequest.asign')->with($this->data);
    }

    public function postAsign()
    {
        $newId = $this->route->getParameter('itemId');
        $item = $this->itemsRepo->find($newId);
        $branchesTo = $this->route->getParameter('branchesTo');
        $branchesFrom = $item->Brancheables->first()->branches_id;
        $myRequestId = $this->route->getParameter('myRequestId');

        //$new = ['items_id' => $newId, 'status' => 4, 'branches_from_id' => $branchesFrom, 'branches_to_id' => $branchesTo, 'my_request_id'=> $myRequestId];

        $model = $this->repo->find($this->route->getParameter('itemsRequestId'));
        $model->items_id = $newId;
        $model->status = 4;

        $model->branches_from_id = $branchesFrom;
        $model->branches_to_id = $branchesTo;
        $model->my_request_id = $myRequestId;
        $model->save();


        // cambia estado del item a solicitado
        $this->itemsRepo->changeStatus($item->id, 4);
        

        return redirect()->back()->withErrors('Articulo Asignado correctamente.');
    }


    public function reject()
    {
        $id = $this->route->getParameter('idItemR');

        $model = $this->repo->find($id);
        $model->status = 5;
        $model->save();

        return redirect()->back()->withErrors('Articulo Rechazado .');
    }


    public function NotaPedido(PDF $pdf)
    {

        $models = $this->repo->find($this->request->id);

        foreach ($models as $model) {
            $model->status = 2;
            $model->save();
        }


        $data['destino'] = $models->first()->BranchesTo;
        $data['date'] = date('d-m-Y');
        $data['models'] = $models;

        $pdf->setPaper('a5', 'portrait')->loadView('moto.itemsRequest.repo.nota', $data);
        return $pdf->stream();
    }

    public function getIn()
    {
        $id = $this->route->getParameter('idItemR');

        $model = $this->repo->find($id);
        $model->status = 3;
        $model->save();

        // vuelve el estado del item a disponible
        $this->itemsRepo->changeStatus($model->items_id, 1);


        // cambia el branch del item
        $branch = Brancheables::where('entities_type', Items::class)->where('entities_id', $model->items_id)->first();
        $branch->branches_id = $model->branches_to_id;
        $branch->save();

        return redirect()->back()->withErrors('Articulo Ingresado Correctamente.');
    }


}
