<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\PurcharsesRepo;
use App\Http\Repositories\Tecnica\PurcharsesRepo as Repo;
use App\Http\Repositories\Tecnica\OrdersRepo;
use App\Http\Repositories\Admin\ClientsRepo;
use App\Http\Repositories\Admin\ModelsRepo;
use App\Http\Repositories\Admin\ItemsRepo;
use App\Http\Repositories\Admin\BrandsRepo;
use App\Http\Repositories\Configs\CompanyRepo;
use App\Http\Repositories\Configs\UsersRepo;
use App\Http\Repositories\Admin\PayMethodsRepo;
use App\Http\Repositories\Admin\PaymentsRepo;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Entities\Admin\Payments;
use App\Http\Helpers\ImagesHelper;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Auth;
use PDF;
use Validator;


class PurcharsesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, ClientsRepo $clientsRepo, ModelsRepo $modelsRepo, BrandsRepo $brandsRepo, CompanyRepo $companyRepo, OrdersRepo $ordersRepo, UsersRepo $usersRepo, ItemsRepo $itemsRepo, PayMethodsRepo $payMethodsRepo, PaymentsRepo $paymentsRepo, BranchesRepo $branchesRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;
       
        $this->section          = 'purcharses';
        $this->data['section']  = $this->section;
        $this->data['tiposDocumento']  = [ '1' => 'DNI','2' => 'Doc. Extranjero','3' => 'Doc. Precaria','4' => 'Doc. Transitorio','5' => 'Doc. en Trámite','6' => 'Otros' ];


        $this->data['clients']      = $clientsRepo->getModel()->all()->lists('fullname','id');
        $this->data['users_id']     = Auth::user()->id;
        $this->data['models_id']    = $modelsRepo->ListsData('name','id');
        $this->data['companies']    = $companyRepo->getModel()->all()->lists('razon_social','id');
        $this->data['brands']       = $brandsRepo->getAllWithModels();
        $this->data['users']        = $usersRepo->ListsData('user_name','id');
        $this->companyRepo          = $companyRepo;
        $this->ordersRepo           = $ordersRepo;
        $this->itemsRepo            = $itemsRepo;
        $this->itemsRepo            = $itemsRepo;
        $this->paymentsRepo         = $paymentsRepo;
        $this->data['paymethods']   = $payMethodsRepo->getModel()->all()->lists('name','id');
        $this->data['branches']     = $branchesRepo->listsData('name', 'id');

    }


    public function show(){
         
    	$this->data['models'] 		= $this->repo->find($this->route->getParameter('id'));
        
    	
    	return view('admin.purcharses.details')->with($this->data);

    }

    
    public function reporte(){

        //$this->data['models']       = $this->repo->find($this->route->getParameter('id'));
        $model      = $this->repo->find($this->route->getParameter('id'));
        $company    = $this->companyRepo->getModel()->first();

        //$letraChica = $toPrintRepo->ultimo();
        $pdf        = PDF::loadView('admin.purcharses.reporte', compact('model','company'));

        return $pdf->stream();
        
    
    }

    public function ordenCompra(){

        $this->data['ordenCompra']      = $this->ordersRepo->find($this->route->getParameter('id'));
      
        return view('admin.purcharses.form')->with($this->data);
    }

    public function store()
    {
        //validar los campos
        //$this->validate($this->request,config('models.'.$this->section.'.validationsStore'), config('models.'.$this->section.'.validationMessage'));

        $validator = Validator::make($this->request->all(), config('models.'.$this->section.'.validationsStore'), [
            'alias.required' => 'El campo alias es obligatorio',
            'companies_id.required' => 'El campo sucursal es obligatorio',
            'number.required' => 'El campo cbu es obligatorio',
            'number.numeric' => 'El campo cbu debe ser numerico',
            'number.digits' => 'El campo cbu debe contener 22 dígitos',
            'amount.required' => 'El campo monto es obligatorio',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        //crea a traves del repo con el request
        
        
        $model = $this->repo->create($this->request->all());

        $payments = New Payments();
        $payments->pay_methods_id = $this->request->pay_methods_id;
        $payments->date = $this->request->date;
        $payments->hora = $this->request->hora;
        $payments->sales_id = $model->id;
        $payments->term = $this->request->term;
        $payments->number = $this->request->number;
        $payments->nombre = $this->request->nombre;
        $payments->apellido = $this->request->apellido;
        $payments->amount = $this->request->amount;
        $payments->alias = $this->request->alias;
        $payments->save();
        
        //$p = $this->paymentsRepo->find(5);

        $imagen = $this->request->image;

        if(!empty($imagen))
            foreach ($imagen as $valor){

                $image = new ImagesHelper();
                $time = time();
                $name = $time.$valor->getClientOriginalName();
                $image->upload( $name , $valor, config('models.payments.imagesPath'));
                $payments->images()->create(['path' => config('models.payments.imagesPath').$name]);
         
            }
       
        return redirect()->route(config('models.'.$this->section.'.postStoreRoute'),$model->id)->withErrors(['Regitro Agregado Correctamente']);

        //return view('admin.purcharses.index')->with($this->data);


    }

    public function update()
    {   

        //validar los campos
        //$this->validate($this->request,config('models.'.$this->section.'.validationsUpdate'), config('models.'.$this->section.'.validationMessage'));

        $validator = Validator::make($this->request->all(), config('models.'.$this->section.'.validationsUpdate'), [
            'alias.required' => 'El campo alias es obligatorio',
            'companies_id.required' => 'El campo sucursal es obligatorio',
            'number.required' => 'El campo cbu es obligatorio',
            'number.numeric' => 'El campo cbu debe ser numerico',
            'number.digits' => 'El campo cbu debe contener 22 dígitos',
            'amount.required' => 'El campo monto es obligatorio',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $id = $this->route->getParameter('id');

        //edita a traves del repo
        $model = $this->repo->update($id,$this->request->all());
        
        if(isset($model->pago)){
            $payments =$this->paymentsRepo->update($model->Pago->id, $this->request->all());
        }
        else{
            $payments = New Payments();
            $payments->pay_methods_id = $this->request->pay_methods_id;
            $payments->date = $this->request->date;
            $payments->hora = $this->request->hora;
            $payments->sales_id = $model->id;
            $payments->term = $this->request->term;
            $payments->number = $this->request->number;
            $payments->nombre = $this->request->nombre;
            $payments->apellido = $this->request->apellido;
            $payments->amount = $this->request->amount;
            $payments->alias = $this->request->alias;
            $payments->save();
        }


        if(isset($model->Pago)){
            foreach ($model->Pago->images as $imagen){

                if(empty($this->request->imageOld)){
                    $image = new ImagesHelper();
                    $image->deleteFile($imagen->path);
                    $imagen->delete();
                }

                if( count($this->request->imageOld) > 0 ){
                    if( !in_array($imagen->path, $this->request->imageOld) ){
                        $image = new ImagesHelper();
                        $image->deleteFile($imagen->path);
                        $imagen->delete();
                    }
                }    

            }
        }



       
        $imagen = $this->request->image;
        if(!empty($imagen))
            foreach ($imagen as $valor){

                $image = new ImagesHelper();
                $time = time();
                $name = $time.$valor->getClientOriginalName();
                $image->upload( $name , $valor, config('models.payments.imagesPath'));
                $payments->images()->create(['path' => config('models.payments.imagesPath').$name]);
         
            }

        //$pago  = $this->paymentsRepo->update($model->Pago, $this->request);

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

        return redirect()->route(config('models.'.$this->section.'.postUpdateRoute'),$model->id)->withErrors(['Regitro Editado Correctamente']);
    }




}
