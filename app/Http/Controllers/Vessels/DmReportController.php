<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\DmReportRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Entities\Vessels\Locations;

class DmReportController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, Locations $locations)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'dmReport';
        $this->data['section']  = $this->section;
        $this->data['locations'] = $locations->lists('name','id');

    }


}
