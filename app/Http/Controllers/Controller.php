<?php

namespace App\Http\Controllers;

use App\Entities\Configs\Images;
use App\Http\Helpers\ImagesHelper;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;


abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected $request;
    protected $route;
    protected $config;
    protected $data;


    public function index()
    {
        //breadcrumb activo
        $this->data['activeBread'] = 'Listar';

        //si request de busqueda
        if(isset($this->request->search))
            $model = $this->repo->search($this->request);
        else
            $model  = $this->repo->listAll();


        //guarda en session lo que se busco para exportar
        Session::put('export',$model->get());


        //pagina el query
        $this->data['models'] = $model->paginate($this->paginate);

        return view($this->getConfig()->indexRoute)->with($this->data);
    }


    public function create()
    {
        //breadcrumb activo
        $this->data['activeBread'] = 'Nuevo';


        return view($this->getConfig()->storeView)->with($this->data);
    }


    public function store()
    {
        //crea a traves del repo con el request
         $model = $this->repo->create($this->request);


        //guarda imagenes
        if($this->getConfig()->is_imageable)
            $this->createImage($model, $this->request);

        return redirect()->route($this->getConfig()->indexRoute)->withErrors(['Regitro Agregado Correctamente']);
    }


    public function edit()
    {
        //breadcrumb activo
        $this->data['activeBread'] = 'Editar';

        // id desde route
        $id = $this->route->getParameter('id');


        $this->data['models'] = $this->repo->find($id);

        return view($this->getConfig()->editView)->with($this->data);
    }


    public function update()
    {
        $id = $this->route->getParameter('id');

        //edita a traves del repo
        $model = $this->repo->update($id,$this->request);

        //guarda imagenes
        if($this->getConfig()->is_imageable)
            $this->createImage($model, $this->request);

        return redirect()->route($this->getConfig()->indexRoute)->withErrors(['Regitro Editado Correctamente']);
    }


    public function destroy($id)
    {
        $this->repo->destroy($id);
    }


    //model configurations

    public function getConfig(){

        //configuracion particular de cada modelo
        $modelConfig = $this->configs();

        $data =  [

            //nombre de la seccion
            'sectionName'   => $modelConfig->section,

            //routes
            'indexRoute'    => $modelConfig->routes.'.index',
            'storeRoute'    => $modelConfig->routes.'.store',
            'createRoute'   => $modelConfig->routes.'.create',
            'showRoute'     => $modelConfig->routes.'.show',
            'editRoute'     => $modelConfig->routes.'.edit',
            'updateRoute'   => $modelConfig->routes.'.update',
            'destroyRoute'  => $modelConfig->routes.'.destroy',

            //urls
            'destroyUrl' => $modelConfig->urlDestroy,

            //views
            'storeView' =>  $modelConfig->routes.'.form',
            'editView'  =>  $modelConfig->routes.'.form',

            //path
            'imagesPath' => $modelConfig->imagesPath,

            //polymorphic
            'is_logueable'      => true,
            'is_imageable'      => true,
            'is_brancheable'    => true,
        ];

        return (object)$data;
    }


    public function createImage($model, $data )
    {
        $image = new ImagesHelper();

        if(!is_null($data->image))
        {
                $time = time();
                $name = $time.$data->image->getClientOriginalName();

                $image->upload( $name , $data->file('image'), $this->getConfig()->imagesPath);

                $img = new Images();
                $img->path = $this->getConfig()->imagesPath . $name ;
                $img->save();

                $model->images()->save($img);
        }
    }

}
