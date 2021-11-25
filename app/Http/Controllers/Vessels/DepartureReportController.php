<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\DepartureReportRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DepartureReportController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'departureReport';
        $this->data['section']  = $this->section;
    }


}
