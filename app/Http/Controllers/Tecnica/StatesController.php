<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\StatesRepo;
use App\Http\Repositories\Tecnica\StatesRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class StatesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;
       
        $this->section          = 'states';
        $this->data['section']  = $this->section;
    }

       public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));
       	
       	$data = $this->request->all();
        $data['enviar']             = $this->request->has('enviar') ? '1' : '0';
        $data['confirmar_cliente']  = $this->request->has('confirmar_cliente') ? '1' : '0';
        $data['enviar_remito']      = $this->request->has('enviar_remito') ? '1' : '0';

        //crea a traves del repo con el request
        $model = $this->repo->create($data);

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),$model->id)->withErrors(['Regitro Agregado Correctamente']);
    }
  	
  	  public function update()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));

        $id = $this->route->getParameter('id');
       
        $data   = $this->request->all();
        $data['enviar']             = $this->request->has('enviar') ? '1' : '0';
        $data['confirmar_cliente']  = $this->request->has('confirmar_cliente') ? '1' : '0';
        $data['enviar_remito']      = $this->request->has('enviar_remito') ? '1' : '0';
        //edita a traves del repo
        $model = $this->repo->update($id,$data);

        return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),$model->id)->withErrors(['Regitro Editado Correctamente']);
    }

}
