<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\DmReportRepo as Repo;
use App\Http\Repositories\Vessels\ServicesRepo;

use App\Entities\Vessels\DmrCargo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Entities\Vessels\Locations;

class DmReportController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, Locations $locations, ServicesRepo $servicesRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'dmReport';
        $this->data['section']  = $this->section;
        $this->data['locations'] = $locations->lists('name','id');

        if($this->route->hasParameter('servicesId')){
            // $this->data['vesselsId'] = $this->route->getParameter('vesselsId');
             \Session::put('servicesId',$this->route->getParameter('servicesId'));
         }
         $this->data['services'] =  $servicesRepo->getModel()->where('id', \Session::get('servicesId'))->first();

    }

    public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));
        //crea a traves del repo con el request
        $model = $this->repo->create($this->request->except(['obs','rob','cons','init','ohstock','recieved','delievered','correction','types','services_cargo_id']));

        foreach($this->request->types as $t)
        {
          $dmc = new DmrCargo();
          $dmc->dm_report_id = $model->id;
          $dmc->services_cargo_id =  $this->request->services_cargo_id[$t];
          $dmc->obs =  $this->request->obs[$t] ;
          $dmc->rob =  $this->request->rob[$t] ;
          $dmc->cons =  $this->request->cons[$t] ;
          $dmc->initial_stock =  $this->request->init[$t] ;
          $dmc->ohstock =  $this->request->ohstock[$t] ;
          $dmc->recieved =  $this->request->recieved[$t] ;
          $dmc->delievered =  $this->request->delievered[$t] ;
          $dmc->correction =  $this->request->correction[$t] ;
          $dmc->save();
        }

        return redirect()->route('vessels.dmReport.index',$model->dm_report_id)->withErrors(['Record successfully added']);
    }


    public function update()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));
        $id = $this->route->getParameter('id');

        //edita a traves del repo
        $model = $this->repo->update($id,$this->request->except(['obs','rob','cons','init','ohstock','recieved','delievered','correction','types','services_cargo_id']) );


        foreach($this->request->types as $t)
        {

          $dmc =  DmrCargo::find($t);
          // $dmc->dm_report_id = $this->route->getParameter('id');
          // $dmc->services_cargo_id =  $this->request->services_cargo_id[$t];
          $dmc->obs =  $this->request->obs[$t] ;
          $dmc->rob =  $this->request->rob[$t] ;
          $dmc->cons =  $this->request->cons[$t] ;
          $dmc->initial_stock =  $this->request->init[$t] ;
          $dmc->ohstock =  $this->request->ohstock[$t] ;
          $dmc->recieved =  $this->request->recieved[$t] ;
          $dmc->delievered =  $this->request->delievered[$t] ;
          $dmc->correction =  $this->request->correction[$t] ;


          $dmc->save();

          // echo $this->request->obs[$t];
          // echo $this->request->rob[$t];
          // echo $this->request->cons[$t];
          // echo $this->request->initial_stock[$t];
          // echo $this->request->ohstock[$t];
          // echo $this->request->received[$t];
          // echo $this->request->delievered[$t];
          // echo $this->request->correction[$t];
          //

        }



              /*
                //guarda imagenes
                if(config('models.'.$this->section.'.is_imageable'))
                    $this->createImage($model, $this->request);

                //guarda log
                if(config('models.'.$this->section.'.is_logueable'))
                    $this->repo->createLog($model, 3);

                //si va a una sucursal
                if(config('models.'.$this->section.'.is_brancheable'))
                    $this->repo->createBrancheables($model, Auth::user()->branches_active_id);

              */

        return redirect()->route('vessels.dmReport.index',$model->dm_report_id)->withErrors(['Record successfully edited']);
    }

}
