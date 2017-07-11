<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Configs\Branches;
use App\Entities\Moto\Clients;
use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Configs\UsersRepo;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\ClientsRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\FinancialsRepo;
use App\Http\Repositories\Moto\SalesItemsRepo;
use App\Http\Repositories\Moto\SalesPaymentsRepo;

use App\Http\Repositories\Moto\ServicesRepo;
use App\Http\Repositories\Moto\TechnicalServicesRepo as Repo;
use App\Http\Repositories\Moto\ItemsRepo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\PurchasesOrdersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Repositories\Configs\IvaConditionsRepo;

class TechnicalServicesController extends Controller
{
    protected $technicalServicesRepo;

    public function __construct(Request $request, Repo $repo, Route $route,ModelsRepo $modelsRepo, Clients $clients,BrandsRepo $brandsRepo,Items $items, IvaConditionsRepo $ivaConditionsRepo
    ,ServicesRepo $servicesRepo, ClientsRepo $clientsRepo, UsersRepo $usersRepo)
    {

        $this->request = $request;
        $this->repo = $repo;
        $this->route = $route;

        $this->section = 'technicalServices';
        $this->data['section'] = $this->section;

        $this->data['models_types'] = $modelsRepo->ListsData('name', 'id');
        $this->data['models_lists'] = $modelsRepo->ListsData('name', 'id');

        $this->data['brands']       = $brandsRepo->getAllWithModels();
        $this->data['ivaConditions'] = $ivaConditionsRepo->ListsData('name','id');
        $this->data['services'] = $servicesRepo->ListsData('name','id');

        $this->data['clients'] = $clientsRepo->ListAll()->orderBy('last_name', 'ASC')->get();

        $this->data['mecanicos'] = $usersRepo->listMecanicos();
        

        $this->modelsRepo = $modelsRepo;
        $this->clients = $clients;
        $this->items = $items;

    }


//    public function create($id = null)
//    {
//        if($id)
//        {
//            $this->data['technicalService'] = $this->repo->find($id);
//            $this->data['client'] = $this->data['technicalService']->Clients;
//        }
//
//        $this->data['clientes'] = $this->clients->where('prospecto',0)->get();
//
//        return parent::create();
//    }
//
//    public function serviceOrder($client,$item)
//    {
//        $this->data['activeBread'] = 'Orden de servicio';
//
//        $this->data['client'] = $this->clients->find($client);
//        $this->data['item'] = $this->items->with('sales')->find($item);
//        $this->data['branch'] = Branches::find(Auth::user()->branches_active_id);
//
//        return view(config('models.'.$this->section.'.serviceOrderRoute'))->with($this->data);
//    }
}
