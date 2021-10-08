<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\ProductosRepo;
use App\Http\Repositories\Tecnica\ProductosRepo as Repo;
use App\Http\Repositories\Admin\BrandsRepo;
use App\Http\Repositories\Admin\ModelsRepo;
use App\Http\Repositories\Admin\ClientsRepo;
use App\Http\Repositories\Tecnica\CaracteristicasRepo;
use App\Http\Repositories\Tecnica\PresupuestosRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Validator;

class ProductosController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route,  BrandsRepo $brandsRepo, ModelsRepo $modelsRepo, ClientsRepo $clientsRepo, CaracteristicasRepo $caracteristicasRepo, PresupuestosRepo $presupuestoRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'productos';
        $this->data['section']  = $this->section;
        $this->data['brands']   = $brandsRepo->getAllWithModels();
        $this->clientsRepo = $clientsRepo;
        $this->caracteristicasRepo = $caracteristicasRepo;
        $this->presupuestoRepo = $presupuestoRepo;
        $this->data['productos'] = $this->repo->getModel()->all();
        $this->data['caracteristicas'] = $this->caracteristicasRepo->getModel()->all();

    }



    public function swoptech(){

    	return view('admin.swoptech.form')->with($this->data);

    }

    public function postFormPublic(){


        $validator = Validator::make($this->request->all(), [
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'dni' => 'required|max:100',
            //'email' => 'required|email|unique:clients,email',
            'email' => 'required|email|max:100',
            'celular' => 'required|max:100',
            'modelo'=>'required'],

            [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido.required' => 'El campo Apellido es obligatorio',
            'dni.required' => 'El campo Dni es obligatorio',
            'email.required' => 'El campo Email es obligatorio',
            'celular.required' => 'El campo Celular es obligatorio',
            'modelo.required' => 'El campo Modelo es obligatorio',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $this->data['modelo'] = $this->repo->find($this->request->modelo);

        $totalCaracteristicas = $this->caracteristicasRepo->getModel()
        ->whereIn('id',$this->request->caracteristicas)
        ->get()
        ->sum('importe');
        
        /*
        $total = 0;

        foreach ($totalCaracteristicas as $carac) {
            // por porcentaje
            // $sum    = $this->data['modelo']->precio_final * $carac->porcentaje / 100;

            // por importe
            $sum    = $this->data['modelo']->precio_final - $carac->importe;
            $total  = $sum + $total ;

            echo $sum . '<br>';
            echo $total;
        }
        */
        //dd($this->data['modelo']->precio_final, $totalCaracteristicas, $this->data['modelo']->precio_final - $totalCaracteristicas);
        $this->data['cotizar'] = true;
        $this->data['total'] = $this->data['modelo']->precio_final - $totalCaracteristicas;
        $this->data['nombre'] = $this->request->nombre;
        $this->data['apellido'] = $this->request->apellido;
        $this->data['dni'] = $this->request->dni;
        $this->data['email'] = $this->request->email;
        $this->data['celular'] = $this->request->celular;
        $this->data['modelos_id'] = $this->request->modelo;
        $this->data['caracteristicas'] = $this->request->caracteristicas;
        $this->request->session()->put('caracteristicas', $this->request->caracteristicas);



    	return view('admin.swoptech.form')->with($this->data);
    }

    public function obtenerPrecio(){

        $modeloId = $this->request->modelos_id;
        $modelo = $this->repo->find($modeloId);
        $totalCaracteristicas = $this->caracteristicasRepo->getModel()->whereIn('id',$this->request->caracteristicas);
        dd($totalCaracteristicas);

        //dd($this->request->all());

        return response()->json($modelo);

        //return $this->request;


    }

    public function postCotizar(){


        $c = $this->clientsRepo->getModel()->where('dni', $this->request->dni)->first();

        if(empty($c)){
            $cliente = $this->clientsRepo->getModel()->create([
                'name' => $this->request->nombre,
                'last_name' => $this->request->apellido,
                'email' => $this->request->email,
                'phone1' => $this->request->celular,
                'dni' => $this->request->dni,
                'email' => $this->request->email,
            ]);
        }else{
            $cliente = $c;
        }



        $modelo = $this->request->modelos_id;


        $presupuesto = $this->presupuestoRepo->getModel()->create([
            'clients_id' => $cliente->id,
            'productos_id' => $modelo,
            //'importe_presupuestado' => 100,
            'precio_final' =>  $this->request->total,
        ]);


        if ($this->request->session()->has('caracteristicas')) {
           $c = $this->request->session()->get('caracteristicas');
           $presupuesto->Caracteristicas()->sync($c);
        }

        return redirect()->route('admin.swoptech.formPublic')->with(['msgOk' => 'Se ha registro correctamente el producto.']);

        //return view('admin.swoptech.form')->with($this->data);



    }


}
