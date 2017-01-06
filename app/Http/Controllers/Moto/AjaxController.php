<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BudgetsRepo;
use App\Http\Repositories\Moto\FinancialsRepo;
use App\Http\Repositories\Moto\ModelsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class AjaxController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'brands';
        $this->data['section']  = $this->section;
    }


    public function modelAvailables()
    {
        $id =  $this->route->getParameter('id');
        $data = $this->repo->stockByColors($id);

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


    public function budgetsItems(BudgetsRepo $budgetsRepo,FinancialsRepo $financialsRepo,$id)
    {

//        $data = $budgetsRepo->find($id)->allItems()->with('brands')->get();
        $data = collect();
        $data->push(['price' => $budgetsRepo->find($id)->allItems()->with('brands')->get()->sum('pivot.price_budget'),'patentamiento' => $budgetsRepo->find($id)->allItems()->with('brands')->get()->sum('patentamiento'),'pack_service' => $budgetsRepo->find($id)->allItems()->with('brands')->get()->sum('pack_service')]);
        $data->push($budgetsRepo->find($id)->allItems()->with('brands')->get());

        return response()->json($data);
    }



}
