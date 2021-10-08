<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\ToPrintRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ToPrintController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'print';
        $this->data['section']  = $this->section;
    }

    public function index()
    {   
        
        //breadcrumb activo
        $this->data['activeBread'] = 'Listar';

        $this->data['models'] = $this->repo->getModel()->all()->first();
        
        //return view($this->getConfig()->indexRoute)->with($this->data);
        return view(config('models.'.$this->section.'.storeView'))->with($this->data);
    }

  	public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));
       
       	$data = $this->request->all();
        //crea a traves del repo con el request
        $model = $this->repo->create($data);

        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),$model->id)->withErrors(['Regitro Agregado Correctamente']);
    }
  	
  	public function update()

    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));
        
        $id = $this->route->getParameter('id');
       
        $data = $this->request->all();
        //edita a traves del repo
        $model = $this->repo->update($id,$data);

        return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),$model->id)->withErrors(['Regitro Editado Correctamente']);
    }
}
