<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Configs\Brancheables;
use App\Entities\Moto\Items;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BudgetsRepo;
use App\Http\Repositories\Moto\ClientsRepo;
use App\Http\Repositories\Moto\FinancialsRepo;
use App\Http\Repositories\Moto\ModelsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class AjaxController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, ClientsRepo $clientsRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->clientsRepo = $clientsRepo;
        $this->section          = 'brands';
        $this->data['section']  = $this->section;
    }


    public function modelAvailables()
    {
        $id =  $this->route->getParameter('id');
        $data = $this->repo->modelsByColors($id);
//        $data = $this->repo->stockByColors($id);

        return response()->json($data);
    }

    public function modelsLists()
    {
        $data = $this->repo->allToBudgets() ;

        return response()->json($data);
    }

    public function modelLists($id)
    {
        $data = $this->repo->oneToBudgets($id);

        return response()->json($data);
    }


    public function modelActualCost()
    {
        return $this->repo->actualPriceCost($this->route->getParameter('id'));
    }

    public function salesWithItems($id){
        return $this->clientsRepo->salesWithItems($id);
    }

    public function budgetsItems(BudgetsRepo $budgetsRepo,FinancialsRepo $financialsRepo,$id)
    {

//        $data = $budgetsRepo->find($id)->allItems()->with('brands')->get();
        $data = collect();
        $data->push(['price' => $budgetsRepo->find($id)->allItems()->with('brands')->get()->sum('pivot.price_budget'),'patentamiento' => $budgetsRepo->find($id)->allItems()->with('brands')->get()->sum('patentamiento'),'pack_service' => $budgetsRepo->find($id)->allItems()->with('brands')->get()->sum('pack_service')]);

        $data->push($budgetsRepo->find($id)->allItems()->with('brands')->get());

        return response()->json($data);
    }


    public function branchesWithStockByModels(){
//        dd($this->request->all());

        $branches = [];

        foreach ($this->request->all() as $articulos){

            $items = Items::where('models_id', $articulos["modelo"])->where('colors_id',$articulos['color'])->get()->lists('id');

            $branches[] = Brancheables::where('entities_type', 'App\Entities\Moto\Items')->with('Branches')->whereIn('entities_id', $items)->get()->groupBy('branches_id');


        }

        $list = [];

        foreach ($branches as $branch){
            foreach ($branch as $b){
                if(count($list) > 0){
                    foreach($list as $id => $sucursal){
                        if($b->first()->Branches->id != $id){
                            $list[$b->first()->Branches->id] = $b->first()->Branches->name;
                        }

                    }
                }else{
                    $list[$b->first()->Branches->id] = $b->first()->Branches->name;
                }
            }
        }

        return $list;

    }



}
