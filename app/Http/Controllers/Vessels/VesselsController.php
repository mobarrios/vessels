<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\VesselsRepo as Repo;

use App\Entities\Vessels\VesselsTypes;
use App\Entities\Configs\Company;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class VesselsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, VesselsTypes $VesselsTypes, Company $company)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'vessels';
        $this->data['section']  = $this->section;
        $this->data['vessels_types']  = $VesselsTypes->lists('name','id');
        $this->data['companies']  = $company->lists('razon_social','id');


    }

    public function details()
    {
      $id = $this->route->id;
      $this->data['model'] = $this->repo->find($id);
      $this->data['types'] = $this->repo->find($id);

      return view('vessels.vessels.detail')->with($this->data);
    }


}
