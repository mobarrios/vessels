<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\OperationsRepo as Repo;
use App\Http\Repositories\Vessels\SectorsRepo;

use App\Entities\Vessels\OperationsTypes;
use App\Entities\Vessels\CargoTypes;

use App\Entities\Vessels\Locations;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;


class OperationsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, SectorsRepo $SectorsRepo, OperationsTypes $operationsTypes, Locations $locations, CargoTypes $cargoTypes)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'operations';
        $this->data['section']  = $this->section;
        $this->data['sectors']  = $SectorsRepo->getModel()->where('vessels_id',5)->lists('name','id');

        $this->data['cargoTypes'] = $cargoTypes->lists('name','id');

        $this->data['operationsTypes'] = $operationsTypes->lists('name','id');
        $this->data['locations'] = $locations->lists('name','id');

        if($this->route->hasParameter('servicesId')){
            // $this->data['vesselsId'] = $this->route->getParameter('vesselsId');
             Session::put('servicesId',$this->route->getParameter('servicesId'));
         }
    }

    public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));
        //crea a traves del repo con el request
        $model = $this->repo->create($this->request);

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'), Session::get('servicesId') )->withErrors(['Record successfully added']);
    }


    public function update()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));
        $id = $this->route->getParameter('id');

        //edita a traves del repo
        $model = $this->repo->update($id,$this->request);

        return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),Session::get('servicesId') )->withErrors(['Record successfully edited']);
    }




}
