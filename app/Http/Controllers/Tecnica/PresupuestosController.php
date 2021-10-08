<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\PresupuestosRepo as Repo;
use App\Http\Repositories\Tecnica\StatesRepo;
use App\Entities\Tecnica\PresupuestosStates;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Auth;

class PresupuestosController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, StatesRepo $statesRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'presupuestos';
        $this->data['section']  = $this->section;
        $this->data['states']   = $statesRepo->getModel()->orderBy('description','ASC')->lists('description','id');
    }


  
    public function show(){
        $this->data['models']       = $this->repo->find($this->route->getParameter('id'));
        return view('admin.presupuestos.show')->with($this->data);

    }

    public function updateEstado(){

    	$state              = new PresupuestosStates();
        $state->presupuestos_id   = $this->request->presupuesto_id;
        $state->users_id    = Auth::user()->id;
        $state->states_id   = $this->request->estado_id;
        $state->observaciones = $this->request->observaciones;
        $state->save();
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente.']);
   

    }
  
}
