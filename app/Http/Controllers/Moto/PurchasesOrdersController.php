<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Http\Repositories\Moto\ColorsRepo;
use App\Http\Repositories\Moto\ModelsRepo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\PurchasesOrdersRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class PurchasesOrdersController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, ModelsRepo $modelsRepo, ColorsRepo $colorsRepo, ProvidersRepo $providersRepo, BranchesRepo $branchesRepo)
    {

        $this->request  = $request;
        $this->repo = $repo;
        $this->route = $route;

        $this->section = 'purchasesOrders';
        $this->data['section'] = $this->section;

        $this->data['modelsLists'] = $modelsRepo->ListsData('name', 'id');
        $this->data['colors'] = $colorsRepo->ListsData('name', 'id');
        $this->data['providers'] = $providersRepo->ListsData('name', 'id');
        $this->data['branches'] = $branchesRepo->ListsData('name', 'id');

    }

}
