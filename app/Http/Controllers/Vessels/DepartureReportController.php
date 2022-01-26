<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\DepartureReportRepo as Repo;
use App\Http\Repositories\Vessels\ServicesRepo;
use App\Entities\Vessels\DepartureReportCargo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Entities\Vessels\Locations;
use Illuminate\Support\Facades\Session;



class DepartureReportController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, Locations $locations, ServicesRepo $servicesRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'departureReport';
        $this->data['section']  = $this->section;
        $this->data['locations'] = $locations->lists('name','id');


        if($this->route->hasParameter('servicesId')){
            // $this->data['vesselsId'] = $this->route->getParameter('vesselsId');
             Session::put('servicesId',$this->route->getParameter('servicesId'));
         }
         $this->data['services'] =  $servicesRepo->getModel()->where('id', $this->route->getParameter('servicesId'))->first();

    }

    public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));
        //crea a traves del repo con el request

        $model = $this->repo->create($this->request);

        foreach ($this->request->actualCapType as $act => $k) {

          foreach($this->request->actualCap as $cap => $ck){

              if($cap == $act )
              {
                $drc = DepartureReportCargo::create([
                  'departure_report_id' => $model->id,
                  'quantity' => $ck,
                  'sectors_id' => $act,
                  'cargo_types_id' => $k

                ]);
              }
          }
        }


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
