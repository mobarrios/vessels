<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\ServicesCargoRepo as Repo;
use App\Http\Repositories\Vessels\ServicesRepo;
use App\Entities\Vessels\ServicesCargo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Entities\Vessels\Locations;
use Illuminate\Support\Facades\Session;



class ServicesCargoController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, Locations $locations, ServicesRepo $servicesRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->ServiceRepo     = $servicesRepo;

        $this->section          = 'servicesCargo';
        $this->data['section']  = $this->section;
        $this->data['locations'] = $locations->lists('name','id');

        if($this->route->hasParameter('servicesId')){
            // $this->data['vesselsId'] = $this->route->getParameter('vesselsId');
             Session::put('servicesId',$this->route->getParameter('servicesId'));
         }
         $this->data['services'] =  $servicesRepo->getModel()->where('id', Session::get('servicesId'))->first();

    }

    public function edit()
    {
        //breadcrumb activo
        $this->data['activeBread'] = 'Editar';

        // id desde route
        $id = $this->route->getParameter('servicesId');

        $this->data['models'] = $this->ServiceRepo->find($id);

        return view(config('models.'.$this->section.'.editView'))->with($this->data);
    }


    public function store()
    {
        //validar los campos
        //$this->validate($this->request,config('models.'.$this->section.'.validationsStore'));
        //crea a traves del repo con el request

        //$model = $this->repo->create($this->request);

        foreach ($this->request->actualCapType as $act => $k) {

          foreach($this->request->actualCap as $cap => $ck){

              if($cap == $act )
              {
                $drc = ServicesCargo::create([
                  'services_id' => Session::get('servicesId'),
                  'quantity' => $ck,
                  'sectors_id' => $act,
                  'cargo_types_id' => $k

                ]);
              }
          }
        }


        return redirect()->route('vessels.services.index', Session::get('servicesId') )->withErrors(['Record successfully added']);
    }


    public function update()
    {
        //validar los campos
        //$this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));
        $id = $this->route->getParameter('id');
        //edita a traves del repo
        // $model = $this->repo->update($id,$this->request);
        //
        foreach ($this->request->actualCapType as $act => $k) {

          foreach($this->request->actualCap as $cap => $ck){

              if($cap == $act )
              {
                 $drc = ServicesCargo::find($cap);
                 $drc->quantity = $ck;
                 $drc->cargo_types_id = $k;
                 $drc->save();
                // $drc = DepartureReportCargo::create([
                //   'departure_report_id' => $model->id,
                //   'quantity' => $ck,
                //   'sectors_id' => $act,
                //   'cargo_types_id' => $k
                // ]);
              }
          }
       }
        return redirect()->back()->withErrors(['Record successfully edited']);
    }


}
