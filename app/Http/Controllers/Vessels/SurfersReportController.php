<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\SurfersReportRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SurfersReportController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'surfersReport';
        $this->data['section']  = $this->section;
    }


}
