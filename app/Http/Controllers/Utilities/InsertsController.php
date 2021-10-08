<?php

namespace App\Http\Controllers\Utilities;

use App\Entities\Admin\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Entities\Admin\Brands;
use App\Entities\Admin\Models;
use App\Entities\Tecnica\Orders;
use App\Entities\Tecnica\Services;
use App\Entities\Tecnica\Equipments;
use App\Entities\Tecnica\OrderServices;
use App\Entities\Tecnica\OrderStates;
use App\Entities\Tecnica\States;
use App\Entities\Configs\User;
use Maatwebsite\Excel\Excel;
use DB;

class InsertsController extends Controller
{
	public function datos(){
		
		return view('admin.inserts.index');

		dd('datos');
	}

	public function procesarServices(Request $request, Excel $excel){

		$file 			= $request->file;
        $results 		= $excel->load($file, function ($reader) {
            $results	= $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
        	
        	$data['id']                = $result->idservicio;
            $data['description']       = $result->descripcion;	 
            $data['iva']               = $result->iva;	 
            $data['amount']            = $result->importe; 	 
            Services::insert($data);
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
		
	}

	public function procesarBrands(Request $request, Excel $excel){
		$file 			= $request->file;
        $results 		= $excel->load($file, function ($reader) {
            $results	= $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
       
        	$data['id']         = $result->idmarca;
            $data['name']       = $result->marca;	 
           
            Brands::insert($data);
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
	}

    public function procesarModels(Request $request, Excel $excel){
        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
       
            $data['id']         = $result->idmodelo;
            $data['brands_id']       = $result->idmarca;    
            $data['name']       = $result->modelo; 

            Models::insert($data);
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
    }

    public function procesarEquipos(Request $request, Excel $excel){

        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
           
            $data['id']         = intval($result->idmodelo);
            $data['name']       = $result->equipo; 

            Equipments::insert($data);
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
    }

    public function procesarClients(Request $request, Excel $excel){
      

        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
       
            $data['id']         = $result->idcliente;
            $data['name']       = $result->nombre;    
            $data['last_name']  = $result->apellido; 
            $data['email']      = $result->mail; 
            $data['dni']        = $result->dni; 
            $data['phone1']     = $result->telefono;           
            $data['address']    = $result->direccion;              
            $data['prospecto']  = 0;
            Clients::insert($data);
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);

    }

    public function procesarOrders(Request $request, Excel $excel){
        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
       
            $data['id']                         = $result->idorden;
            $data['codigo_orden']               = $result->codorden;    
            $data['fecha_inicio']               = $result->finicio; 
            $data['fecha_final']                = $result->fcierre; 
            $data['presupuesto_id']             = $result->idpresupuesto; 
            $data['importe_total']              = $result->imporetotal;           
            $data['dto']                        = $result->dto;
            $data['users_id']                   = $result->idusuario;               
            $data['equipments_id']              = $result->idequipo;   
            $data['brands_id']                  = $result->idmarca;   
            $data['models_id']                  = $result->idmodelo;   
            $data['numero_serie']               = $result->nserie;  
            $data['falla_declarada']            = $result->falladeclarada;  
            $data['observaciones']              = $result->observaciones;  
            $data['observaciones_tecnicas']     = $result->observacionestecnicas;  
            $data['presupuesto_estimado']       = $result->presupuestoestimado;  
            $data['states_id']                  = $result->idestado;  
            $data['total']                      = $result->total;  
            $data['pagado']                     = $result->pagado;  
            $data['orden_manual']               = $result->ordenmanual;  
            $data['observaciones_internas']     = $result->observacionesinternas;  

            Orders::insert($data);
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
    }

    public function procesarOrdersClients(Request $request, Excel $excel){

        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
            
            $orden              = Orders::find(intval($result->idorden));
            if(isset($orden)){
                $orden->clients_id  = intval($result->idcliente);
                $orden->save();
            }
            
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
    }

    public function procesarOrderServices(Request $request, Excel $excel){
        
        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
          
            $datos['services_id'] = $result->idordenitems;
            $datos['orders_id'] = $result->idordenitems;
            $datos['cantidad'] = $result->idordenitems;
            OrderServices::insert($datos);

            
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);

    }

    public function procesarOrderEstados(Request $request, Excel $excel){
        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {

            $datos['id']         = intval($result->idordenhistorial);
            $datos['orders_id']  = intval($result->idorden);
            $datos['states_id']  = intval($result->idestado);
            $datos['users_id']   = intval($result->idusuario);
            $datos['created_at'] = $result->fecha;
            $datos['updated_at'] = $result->fecha;    
            
            OrderStates::insert($datos);
            
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);

    }

       public function procesarUsers(Request $request, Excel $excel){
        
        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
           
            $datos['id']            = intval($result->idusuario);
            $datos['user_name']     = $result->usuario;
            $datos['email']         = $result->usuario.'@admin.com';
            
            $datos['password']      = \Illuminate\Support\Facades\Hash::make('1234');  
            
            User::insert($datos);

            
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);

    }

    public function procesarEstados(Request $request, Excel $excel)
    {
        $file           = $request->file;
        $results        = $excel->load($file, function ($reader) {
            $results    = $reader->get();
        })->get();
        

        $transacciones =[]; 
        //Servicios
        
        foreach ($results as $result) {
            
            $datos['id']            = intval($result->idordenestado);
            $datos['description']   = $result->estado;
            $datos['text_email']    = $result->textomail;
            $datos['color']         = $result->color; 
            
            States::insert($datos);

            
        }
        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
    }

}
