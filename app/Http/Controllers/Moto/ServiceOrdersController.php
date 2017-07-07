<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Configs\Branches;
use App\Entities\Moto\Clients;
use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ClientsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\FinancialsRepo;
use App\Http\Repositories\Moto\SalesItemsRepo;
use App\Http\Repositories\Moto\SalesPaymentsRepo;
use App\Http\Repositories\Moto\TechnicalServicesRepo as Repo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\PurchasesOrdersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


class ServiceOrdersController extends Controller
{
    protected $technicalServicesRepo;

    public function __construct(Request $request, Repo $repo, Route $route,ModelsRepo $modelsRepo, Clients $clients,BrandsRepo $brandsRepo,Items $items)
    {

        $this->request = $request;
        $this->repo = $repo;
        $this->route = $route;

        $this->section = 'serviceOrders';
        $this->data['section'] = $this->section;

        $this->data['models_types'] = $modelsRepo->ListsData('name', 'id');
        $this->data['models_lists'] = $modelsRepo->ListsData('name', 'id');

        $this->data['brands']       = $brandsRepo->getAllWithModels();
//        $this->data['clients'] = $clientsRepo->ListAll()->orderBy('last_name', 'ASC')->get();


        $this->modelsRepo = $modelsRepo;
        $this->clients = $clients;
        $this->items = $items;

    }


    public function create($id = null,$client = null,$item = null)
    {
        $this->data['activeBread'] = 'Orden de servicio';

        $this->data['client'] = $this->clients->find($client);
        $this->data['item'] = $this->items->with('sales')->find($item);
        $this->data['branch'] = Branches::find(Auth::user()->branches_active_id);

        return view(config('models.technicalServices.serviceOrderRoute'))->with($this->data);
    }

//    public function create($id = null)
//    {
//        if($id){
//            $this->data['technicalService'] = $this->repo->find($id);
//            $this->data['client'] = $this->data['technicalService']->Clients;
//        }
//
//        $this->data['clientes'] = $this->clients->where('prospecto',0)->get();
//
//        return parent::create();
//    }


}
