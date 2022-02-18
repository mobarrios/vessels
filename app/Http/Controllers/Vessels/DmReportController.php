<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\DmReportRepo as Repo;
use App\Http\Repositories\Vessels\ServicesRepo;

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




}
