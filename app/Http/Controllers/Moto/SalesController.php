<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ClientsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\SalesItemsRepo;
use App\Http\Repositories\Moto\SalesRepo as Repo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\PurchasesOrdersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class SalesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, PurchasesOrdersRepo $purchasesOrdersRepo,
                                 ModelsRepo $modelsRepo, ColorsRepo $colorsRepo , BrandsRepo $brandsRepo, ClientsRepo $clientsRepo,
                                 BranchesRepo $branchesRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'sales';
        $this->data['section']  = $this->section;

        $this->data['purchasesOrders'] = $purchasesOrdersRepo->ListsData('id','id');

        $this->data['models_types'] = $modelsRepo->ListsData('name','id');
        $this->data['models_lists'] = $modelsRepo->ListsData('name','id');
        $this->data['colors']       = $colorsRepo->ListsData('name','id');

        $this->data['brands']       = $brandsRepo->getAllWithModels();
        $this->data['branches']     = $branchesRepo->ListsData('name','id');


        $this->data['clients']      = $clientsRepo->ListsData('name', 'id');

        $this->modelsRepo =  $modelsRepo;

    }

    public function addItems(SalesItemsRepo $salesItemsRepo, ItemsRepo $itemsRepo)
    {

        $item  =  $itemsRepo->asignItem($this->request->models_id , $this->request->branches_confirm_id);

        $this->request['items_id'] = $item ;
        $salesItemsRepo->create($this->request);

        return redirect()->route('moto.sales.edit',$this->request->sales_id);
    }

    public function editItems(SalesItemsRepo $salesItemsRepo)
    {
        $this->data['modelItems'] = $salesItemsRepo->find($this->route->getParameter('item'));

        return parent::edit();
    }

    public function updateItems(SalesItemsRepo $salesItemsRepo,$id)
    {
        $salesItemsRepo->update($id,$this->request);

        return parent::edit();
    }

    public function deleteItems(SalesItemsRepo $salesItemsRepo)
    {
        $salesItemsRepo->destroy($this->route->getParameter('item'));

        return parent::edit();
    }


}
