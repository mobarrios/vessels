<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Banks;
use App\Entities\Moto\Financials;
use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\BudgetsRepo;
use App\Http\Repositories\Moto\ClientsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\FinancialsRepo;
use App\Http\Repositories\Moto\PayMethodsRepo;
use App\Http\Repositories\Moto\SalesItemsRepo;
use App\Http\Repositories\Moto\SalesPaymentsRepo;

use App\Http\Repositories\Moto\SalesRepo as Repo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\PurchasesOrdersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class SalesController extends Controller
{
    protected $clientsRepo;

    public function __construct(Request $request, Repo $repo, Route $route, PurchasesOrdersRepo $purchasesOrdersRepo,
                                ModelsRepo $modelsRepo, ColorsRepo $colorsRepo, BrandsRepo $brandsRepo, ClientsRepo $clientsRepo,
                                BranchesRepo $branchesRepo, BudgetsRepo $budgetsRepo)
    {

        $this->request = $request;
        $this->repo = $repo;
        $this->route = $route;

        $this->section = 'sales';
        $this->data['section'] = $this->section;

        $this->data['purchasesOrders'] = $purchasesOrdersRepo->ListsData('id', 'id');

        $this->data['models_types'] = $modelsRepo->ListsData('name', 'id');
        $this->data['models_lists'] = $modelsRepo->ListsData('name', 'id');
        $this->data['colors'] = $colorsRepo->ListsData('name', 'id');
//        $this->data['colors'] = $colorsRepo->ListsData('name', 'id');
        //$this->data['financials'] = $payMethodsRepo->ListsData('name','id');


        $this->data['brands'] = $brandsRepo->getAllWithModels();
        $this->data['branches'] = $branchesRepo->ListsData('name', 'id');
        $this->data['budgets'] = $budgetsRepo->ListsData('id', 'id');


        $this->data['clients'] = $clientsRepo->ListAll()->orderBy('last_name', 'ASC')->get();

        $this->modelsRepo = $modelsRepo;
        $this->clientsRepo = $clientsRepo;

    }


    public function store()
    {

        // cambia el estado del prospecto a cliente
        $this->clientsRepo->prospectoToClient($this->request->clients_id);

        return parent::store(); // TODO: Change the autogenerated stub
    }



    //addItems
    public function addItems(ModelsRepo $modelsRepo)
    {
        $this->data['sales'] =  $this->repo->find($this->route->getParameter('sales_id'));


        // $this->data['id'] = $id;
        $this->data['activeBread'] = 'Agregar Item';

        return view('moto.sales.modalItemsForm')->with($this->data);
    }

    // items
    public function createItems(SalesItemsRepo $salesItemsRepo, ItemsRepo $itemsRepo)
    {

        $sale = $this->repo->find($this->request->sales_id);

        // asigna items a la venta
        $item = $itemsRepo->asignItem($this->request->models_id, $sale->branches_confirm_id, $sale->id, $this->request->colors_id);

        if ($item != false) {

            $this->request['items_id'] = $item;

            $salesItemsRepo->create($this->request->all());

        }

        return redirect()->route('moto.sales.edit', $this->request->sales_id)->withErrors('Se agregó correctamente el item');


    }

    public function editItems(SalesItemsRepo $salesItemsRepo)
    {
        $this->data['activeBread'] = 'Agregar Item';

        $this->data['salesItems'] = $salesItemsRepo->find($this->route->getParameter('item'));
        $this->data['sales'] = $this->repo->find($this->route->getParameter('salesId'));


        //$this->data['route'] = ['moto.sales.updateItems', $this->route->getParameter('item'), $this->route->getParameter('id')];

        return view('moto.sales.modalItemsForm')->with($this->data);

    }

    public function updateItems(SalesItemsRepo $salesItemsRepo)
    {
        $salesItemsRepo->update($this->request->sales_items_id , $this->request);

        return redirect()->route('moto.sales.edit',$this->request->sales_id);
    }

    public function deleteItems(SalesItemsRepo $salesItemsRepo)
    {
        $salesItemsRepo->destroy($this->route->getParameter('item'));

        return parent::edit();
    }


    //payemnts
    public function createPayment(SalesPaymentsRepo $salesPaymentsRepo, PayMethodsRepo $payMethodsRepo)
    {
        $this->data['salesId'] = $this->route->getParameter('item');

        $this->data['salesPayment'] = $salesPaymentsRepo->getModel()->where('sales_id',$this->route->getParameter('item'))->get();

        $this->data['banks']= Banks::Lists('name','id');
        $this->data['financials']= Financials::Lists('name','id');


        $this->data['checkTypes']= [1=>'Portador', 2=>'Cruzado'];


        $this->data['payments']= $payMethodsRepo->ListsData('name','id');
        $this->data['activeBread']= 'Agregar Pago';


        return view('moto.sales.modalPayMethodsForm')->with($this->data);
    }
    public function addPayment(SalesPaymentsRepo $salesPaymentsRepo)
    {

        $salesPaymentsRepo->create($this->request);

        return redirect()->route('moto.sales.edit', $this->request->sales_id)->withErrors('Se agregó el método de pago');
    }

    public function editPayment(SalesPaymentsRepo $salesPaymentsRepo, PayMethodsRepo $payMethodsRepo)
    {

        $this->data['banks']= Banks::Lists('name','id');
        $this->data['financials']= Financials::Lists('name','id');

        $this->data['checkTypes']= [1=>'Portador', 2=>'Cruzado'];

        $this->data['payments']= $payMethodsRepo->ListsData('name','id');
        $this->data['activeBread']= 'Agregar Pago';

        $this->data['modelPays'] = $salesPaymentsRepo->find($this->route->getParameter('item'));
       // $this->data['routePays'] = ['moto.sales.addPayment', $this->route->getParameter('item')];

        return view('moto.sales.modalPayMethodsForm')->with($this->data);
    }

    public function updatePayment(SalesPaymentsRepo $salesPaymentsRepo)
    {

        $salesPaymentsRepo->update($this->request->sales_payments_id , $this->request);

        return redirect()->back()->withErrors('Se Editó el método de pago');


        //return parent::edit();
    }

    public function deletePayment(SalesPaymentsRepo $salesPaymentsRepo)
    {
        $salesPaymentsRepo->destroy($this->route->getParameter('item'));

        return parent::edit();
    }

    public function showAside(Request $request, SalesItemsRepo $salesItemsRepo, SalesPaymentsRepo $salesPaymentsRepo)
    {
        $this->data['route'] = $request->get('route');

        if ($request->get('edit') != 'false') {
            if ($request->get('type') == 'items') {
                $this->data['model'] = $salesItemsRepo->find($request->get('edit'));
            }

            if ($request->get('type') == 'pays') {
                $this->data['model'] = $salesPaymentsRepo->find($request->get('edit'));
            }


        }

        $this->data['hidden'] = $request->hidden;
        $this->data['type'] = $request->type;

        return view('moto.sales.aside' . ucfirst($this->data['type']))->with($this->data);

    }




}
