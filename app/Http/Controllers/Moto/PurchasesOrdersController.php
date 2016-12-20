<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\PurchasesOrdersItemsRepo;
use App\Http\Repositories\Moto\PurchasesOrdersRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class PurchasesOrdersController extends Controller
{
    protected $modelsRepo;
    protected $modelsListsPricesRepo;

    public function __construct(Request $request, Repo $repo, Route $route, ProvidersRepo $providersRepo, ModelsRepo $modelsRepo, PurchasesOrdersItemsRepo $purchasesOrdersItemsRepo, ColorsRepo $colorsRepo, BranchesRepo $branchesRepo)
    {

        $this->request = $request;
        $this->repo = $repo;
        $this->route = $route;

        $this->section = 'purchasesOrders';
        $this->data['section'] = $this->section;

        //data
        $this->data['providers'] = $providersRepo->ListsData('name', 'id');
        $this->data['models_lists'] = $modelsRepo->ListsData('name', 'id');
        $this->data['colors'] = $colorsRepo->ListsData('name', 'id');
        $this->data['branches'] = $branchesRepo->ListsData('name', 'id');

        $this->modelsRepo = $modelsRepo;
        $this->purchasesOrdersItemsRepo = $purchasesOrdersItemsRepo;

    }


    //find with items
    public function find(PurchasesOrdersItemsRepo $purchasesOrdersItemsRepo)
    {
        $data = $this->repo->getModel()->with('PurchasesOrdersItems')->with('PurchasesOrdersItems.Models')->with('PurchasesOrdersItems.Models.Brands')-> with('PurchasesOrdersItems.Colors')->find($this->route->getParameter('id'));

        return response()->json($data);
    }

    //confirma la lista de pedidos
    public function confirm()
    {
        $id = $this->route->getParameter('id');

        $repo = $this->repo->find($id);
        $repo->status = 3;
        $repo->save();

        //envia mail al proveedor

        return redirect()->route('moto.purchasesOrders.index')->withErrors(['Pedido de Mercadería Confirmado.']);
    }


    //envia mail de la lista de pedidos
    public function sendToProviders()
    {
        $id = $this->route->getParameter('id');

        $repo = $this->repo->find($id);
        $repo->status = 2;
        $repo->save();
        
        //envia mail al proveedor

        return redirect()->route('moto.purchasesOrders.index')->withErrors(['Pedido de Mercadería Enviado al Proveedor.']);
    }

    //items
    
    public function addItems(PurchasesOrdersItemsRepo $purchasesOrdersItemsRepo)
    {
        $purchasesOrdersItemsRepo->create($this->request);

        return redirect()->route('moto.purchasesOrders.edit', $this->request->purchases_orders_id);
    }

    public function editItems(PurchasesOrdersItemsRepo $purchasesOrdersItemsRepo)
    {
        $this->data['modelItems'] = $purchasesOrdersItemsRepo->find($this->route->getParameter('item'));

        return parent::edit();
    }

    public function updateItems(PurchasesOrdersItemsRepo $purchasesOrdersItemsRepo, $id)
    {
        $purchasesOrdersItemsRepo->update($id, $this->request);

        return parent::edit();
    }

    public function deleteItems(PurchasesOrdersItemsRepo $purchasesOrdersItemsRepo)
    {
        $purchasesOrdersItemsRepo->destroy($this->route->getParameter('item'));

        return parent::edit();
    }


}
