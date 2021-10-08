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




}
