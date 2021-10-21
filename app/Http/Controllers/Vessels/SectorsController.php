<?php

namespace App\Http\Controllers\Vessels;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Vessels\SectorsRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Entities\Vessels\CargoTypes;
use App\Entities\Vessels\SectorsTypes;

use Illuminate\Support\Facades\Session;

class SectorsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, CargoTypes $cargoTypes, SectorsTypes $sectorsTypes)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'sectors';
        $this->data['section']  = $this->section;
        $this->data['cargoTypes'] = $cargoTypes->lists('name','id');
        $this->data['sectorsTypes'] = $sectorsTypes->lists('name','id');


        if($this->route->hasParameter('vesselsId')){
            // $this->data['vesselsId'] = $this->route->getParameter('vesselsId');
             Session::put('vesselsId',$this->route->getParameter('vesselsId'));
         }
    }

    public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));
        //crea a traves del repo con el request
        $model = $this->repo->create($this->request);

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'), Session::get('vesselsId') )->withErrors(['Regitro Agregado Correctamente']);
    }


    public function update()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));
        $id = $this->route->getParameter('id');

        //edita a traves del repo
        $model = $this->repo->update($id,$this->request);

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

        return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),Session::get('vesselsId') )->withErrors(['Regitro Editado Correctamente']);
    }


}
