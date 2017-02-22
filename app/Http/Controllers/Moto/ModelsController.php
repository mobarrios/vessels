<?php

namespace App\Http\Controllers\Moto;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\CategoriesRepo;
use App\Http\Repositories\Moto\ModelsRepo as Repo;
use App\Http\Repositories\Moto\ProvidersRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class ModelsController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, BrandsRepo $brandsRepo, CategoriesRepo $categoriesRepo,ProvidersRepo $providersRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'models';
        $this->data['section']  = $this->section;

        // data
        $this->data['brands'] = $brandsRepo->ListsData('name','id');
        $this->data['providers'] = $providersRepo->ListsData('name','id');
        $this->data['categories'] = $categoriesRepo->ListsData('name','id');
        $this->data['status'] = config('status.models');



    }

    public function store()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsStore'));


        //crea a traves del repo con el request
        $model = $this->repo->create($this->request);

        //asigna los proveedores
        $model->providers()->attach($this->request->providers_id);



                //guarda imagenes
                if(config('models.'.$this->section.'.is_imageable'))
                    $this->createImage($model, $this->request);

                //guarda log
                if(config('models.'.$this->section.'.is_logueable'))
                    $this->repo->createLog($model, 1);

                //si va a una sucursal
                if(config('models.'.$this->section.'.is_brancheable'))
                    $this->repo->createBrancheables($model, Auth::user()->branches_active_id);


        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),$model->id)->withErrors(['Regitro Agregado Correctamente']);
    }


    public function update()
    {
        //validar los campos
        $this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'));

        $id = $this->route->getParameter('id');
        //edita a traves del repo
        $model = $this->repo->update($id,$this->request);

        //asigna los proveedores
        $model->providers()->attach($this->request->providers_id);



        //guarda imagenes
        if(config('models.'.$this->section.'.is_imageable'))
            $this->createImage($model, $this->request);

        //guarda log
        if(config('models.'.$this->section.'.is_logueable'))
            $this->repo->createLog($model, 3);

        //si va a una sucursal
        if(config('models.'.$this->section.'.is_brancheable'))
            $this->repo->createBrancheables($model, Auth::user()->branches_active_id);


        return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),$model->id)->withErrors(['Regitro Editado Correctamente']);
    }

}
