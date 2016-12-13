<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\BudgetsRepo as Repo;
use App\Http\Repositories\Moto\FinancialsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class BudgetsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, BrandsRepo $brandsRepo, FinancialsRepo $financialsRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'budgets';
        $this->data['section']  = $this->section;

        $this->data['brands']   = $brandsRepo->getAllWithModels();
        $this->data['financials'] = $financialsRepo->getAllWithDues() ;
    }

}
