<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\ServicesRepo as Repo;
use App\Http\Repositories\Vessels\VesselsRepo;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ServicesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, VesselsRepo $VesselsRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'services';
        $this->data['section']  = $this->section;
        $this->data['vessels']  = $VesselsRepo->ListsData('name','id');

    }


    public function resume()
    {
      $id = $this->route->getParameter('id');

      $this->data['models'] = $this->repo->find($id);

      // $this->data['services'] = \DB::table('services')
      // ->join('dm_report','dm_report.services_id','=','services.id')
      // ->join('dmr_cargo','dmr_cargo.dm_report_id','=','dm_report.id')
      // ->join('services_cargo','services_cargo.id','=','dmr_cargo.services_cargo_id')
      // ->join('cargo_types','cargo_types.id','=','services_cargo.cargo_types_id')
      // ->where('services.id',$id)
      // ->select('dm_report.created_at', 'cargo_types.name','dmr_cargo.rob','dmr_cargo.cons','dmr_cargo.initial_stock','dmr_cargo.recieved','dmr_cargo.delievered','dmr_cargo.correction')
      // //->groupBy('dm_report.created_at')
      // ->get();


 // dd($this->data['models']);

      return view('vessels.services.resume')->with($this->data);

    }


}
