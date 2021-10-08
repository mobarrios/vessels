<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\VesselsRepo as Repo;

use App\Entities\Vessels\VesselsTypes;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class VesselsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, VesselsTypes $VesselsTypes)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'vessels';
        $this->data['section']  = $this->section;
        $this->data['vessels_types']  = $VesselsTypes->lists('name','id');


    }

    public function details()
    {
      return view('vessels.vessels.detail')->with($this->data);
    }


}
