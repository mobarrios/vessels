<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\ProvidersPaymentsRepo;
use App\Http\Repositories\Moto\ProvidersRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ProvidersController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, ProvidersPaymentsRepo $providersPaymentsRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'providers';
        $this->data['section']  = $this->section;
        $this->data['providersPayments'] =  $providersPaymentsRepo->ListsData('name','id');
    }


    public function getCc()
    {
        $this->data['activeBread'] = 'Listar';
        $this->data['models'] = $this->repo->find(1);
        return view('moto.providers.cc')->with($this->data);
    }
}
