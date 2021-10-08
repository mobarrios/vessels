<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\OrdersRepo as Repo;
use App\Http\Repositories\Tecnica\PurcharsesRepo;
use App\Http\Repositories\Tecnica\StatesRepo;
use App\Http\Repositories\Tecnica\ProductosRepo;
use App\Http\Repositories\Tecnica\CaracteristicasRepo;
use App\Entities\Tecnica\OrderStates;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;


class ApiController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, PurcharsesRepo $purcharsesRepo, StatesRepo $statesRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;
       
        $this->section          = 'states';
        $this->data['section']  = $this->section;

        $this->purcharses 		= $purcharsesRepo;
        $this->statesRepo       = $statesRepo;


    }


    public function confirm(){


        try{
            
            //$decrypted      = decrypt($encryptedValue);
            $id             = Crypt::decrypt($this->route->parameter('id'));
            $estado         = $this->route->parameter('estado');
            $state          = OrderStates::where('orders_id', $id)->where('states_id', $estado)->first();
            $state->confirmar_cliente = 1;
            $state->save();
            

            $message        = ['msgOk' => '¡Gracias por confirmar la recepción del equipo!'];

        } catch (DecryptException $e) {
           
             $message        = ['msgOk' => '¡Ha ocurrido un error y no se pudo confirmar la recepción del equipo!'];

        }
    	
        return view('admin.orders.confirm')->with(['message' => $message]);   


    }



    public function presupuesto(){


        return view('admin.presupuestos.formPublic');

    }

}
