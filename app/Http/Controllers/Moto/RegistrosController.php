<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Configs\Localidades;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\ProvinciasRepo;
use App\Http\Repositories\Moto\RegistrosRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class RegistrosController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, ProvinciasRepo $provinciasRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'registros';
        $this->data['section']  = $this->section;

        $this->data['provincias'] = $provinciasRepo->listAll()->get();
        $this->data['localidades']  = [];



    }

    public function edit()
    {

        //breadcrumb activo
        $this->data['activeBread'] = 'Editar';

        // id desde route
        $id = $this->route->getParameter('id');

        $this->data['models'] = $this->repo->find($id);


        if($this->data['models']->localidades_id){

            $localidades = Localidades::find($this->data['models']->localidades_id);

            $this->data['localidades'] = [$localidades->id => $localidades->Municipios->Provincias->name . ' - ' . $localidades->Municipios->name . ' - ' . $localidades->name];
        }



        return view(config('models.'.$this->section.'.editView'))->with($this->data);
    }
}
