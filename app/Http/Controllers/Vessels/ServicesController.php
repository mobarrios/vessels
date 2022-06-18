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

      $this->data['dmr'] = \DB::table('dmr_cargo')
      ->join('dm_report','dm_report.id','=','dmr_cargo.dm_report_id')
      ->join('services_cargo','services_cargo.id','=','dmr_cargo.services_cargo_id')
      ->join('cargo_types','cargo_types.id','=','services_cargo.cargo_types_id')
      ->select('cargo_types.name',\DB::raw('SUM(dmr_cargo.cons) as cons'))
      ->groupBy('services_cargo.cargo_types_id')
      ->get();


      $this->data['cc'] = \DB::table('operations')
      ->join('locations','locations.id','=','operations.locations_id')
      ->where('services_id',$id)
      ->select('locations.type', \DB::raw('SUM(timestampdiff(MINUTE,start_date,end_date)) as sum'))
      ->groupBy('locations.type')
      ->get();

      // dd($this->data['cc']);

      $this->data['tt'] = \DB::table('operations')
      ->where('services_id',$id)
      ->select(\DB::raw('SUM(timestampdiff(MINUTE,start_date,end_date)) as total'))
      ->get();

      // $this->data['services'] = \DB::table('services')
      // ->join('dm_report','dm_report.services_id','=','services.id')
      // ->join('dmr_cargo','dmr_cargo.dm_report_id','=','dm_report.id')
      // ->join('services_cargo','services_cargo.id','=','dmr_cargo.services_cargo_id')
      // ->join('cargo_types','cargo_types.id','=','services_cargo.cargo_types_id')
      // ->where('services.id',$id)
      // ->select('dm_report.created_at', 'cargo_types.name','dmr_cargo.rob','dmr_cargo.cons','dmr_cargo.initial_stock','dmr_cargo.recieved','dmr_cargo.delievered','dmr_cargo.correction')
      // //->groupBy('dm_report.created_at')
      // ->get();


      return view('vessels.services.resume')->with($this->data);

    }


}
