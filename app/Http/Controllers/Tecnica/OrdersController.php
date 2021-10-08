<?php

namespace App\Http\Controllers\Tecnica;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Tecnica\OrdersRepo;
use App\Http\Repositories\Tecnica\OrdersRepo as Repo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Repositories\Admin\BrandsRepo;
use App\Http\Repositories\Admin\ClientsRepo;
use App\Http\Repositories\Admin\ModelsRepo;
use App\Http\Repositories\Tecnica\StatesRepo;
use App\Http\Repositories\Tecnica\EquipmentsRepo;
use App\Http\Repositories\Tecnica\OrderServicesRepo;
use App\Http\Repositories\Tecnica\ToPrintRepo;
use App\Http\Repositories\Tecnica\MovementsRepo;
use App\Http\Repositories\Configs\UsersRepo;
use App\Http\Repositories\Configs\CompanyRepo;
use App\Http\Repositories\Configs\BranchesRepo;
use App\Entities\Tecnica\OrderStates;
use App\Entities\Tecnica\Tasks;
use App\Entities\Tecnica\TasksOrders;
use App\Entities\Tecnica\OrderServices;
use App\Entities\Tecnica\Movements;
use App\Http\Repositories\Tecnica\ServicesRepo;
use App\Entities\Tecnica\Services;
use PDF;
use Auth;
use Mail;
use Crypt;
use Validator;

class OrdersController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route, BrandsRepo $brandsRepo, ClientsRepo $clientsRepo, ModelsRepo $modelsRepo, StatesRepo $statesRepo, EquipmentsRepo $equipmentsRepo, ServicesRepo $servicesRepo, UsersRepo $usersRepo, OrderServices $orderServices, MovementsRepo $movementsRepo, CompanyRepo $companyRepo, ToPrintRepo $toPrintRepo, BranchesRepo $branchesRepo)
    {

        $this->request      = $request;
        $this->repo         = $repo;
        $this->route        = $route;
        $this->clienteRepo  = $clientsRepo;
        $this->movementsRepo= $movementsRepo;
        $this->statesRepo   = $statesRepo;
        $this->companyRepo  = $companyRepo;
        $this->toPrintRepo  = $toPrintRepo;
        $this->section              = 'orders';
        $this->data['section']      = $this->section;
        //$this->data['ultima_orden'] = !is_null($repo->ultimo()) ? $repo->ultimo()->id + 1 : '1';
        //$this->data['brands']       = $brandsRepo->ListsData('name','id');
        //$this->data['models']     = $modelsRepo->ListsData('name','id');
        //$this->data['clients']    = $clientsRepo->listForSelect();
        //$this->data['tasks']        = Task::all()->lists('descripcion','id');
        $this->data['tasks']        = Tasks::all();
        $this->data['clients']      = $clientsRepo->getModel()->all()->lists('fullname','id');
        $this->data['states']       = $statesRepo->getModel()->orderBy('description','ASC')->lists('description','id');
        $this->data['equipments']   = $equipmentsRepo->ListsData('name','id');
        $this->data['users_id']     = Auth::user()->id;
        $this->data['models_id']    = $modelsRepo->ListsData('name','id');
        $this->data['brands']       = $brandsRepo->getAllWithModels();
        $this->data['services']     = $servicesRepo->getModel()->all();
        $this->data['users']        = $usersRepo->getModel()->all()->lists('user_name','id');
        $this->data['branches']     = $branchesRepo->listsData('name', 'id');


    }



    public function create(){


        $this->data['activeBread']  = 'Nuevo';
        if($this->route->getParameter('cliente'))
            $this->data['clientSelect'] = $this->clienteRepo->find($this->route->getParameter('cliente'));

        return view(config('models.'.$this->section.'.storeView'))->with($this->data);
    }

    public function detail(UsersRepo $usersRepo, OrderServices $orderServices, ToPrintRepo $toPrintRepo){

    	$this->data['models'] = $this->repo->find($this->route->getParameter('id'));
    	//$this->data['users']  = $usersRepo->ListsData('name','id');
        $this->data['letraChica'] = $toPrintRepo->ultimo();

    	return view('admin.orders.detail')->with($this->data);

    }

    public function updateUser(Request $request){

        $model            = $this->repo->find($request->get('orden_id'));
        $model->users_id  = $request->get('users_id');
        $this->updateable($model);

        $model->save();

        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);



    }

    public function updateEstado(Request $request, StatesRepo $statesRepo, CompanyRepo $companyRepo){


        $state              = new OrderStates();
        $state->orders_id   = $request->get('orden_id');
        $state->users_id    = $this->data['users_id'];
        $state->states_id   = $request->get('estado_id');
        $state->save();

        $data['estado']     = $statesRepo->find($request->get('estado_id'));
        $model              = $this->repo->find($request->get('orden_id'));
        $data['empresa']    = $model->Brancheables()->first()->branches->name;
        $data['direccion']  = $model->Brancheables()->first()->branches->address;
        $data['company']    = $companyRepo->getModel()->first();
        $tasks              = Tasks::all();
        $vendedor           = Auth::user();
        $letraChica         = $this->toPrintRepo->ultimo();
        $company            = $this->companyRepo->getModel()->first();
        $idCrypt            = Crypt::encrypt($model->id);
        $tipo               = 'Reparacion';

        //Si el cliente tiene email o enviar es verdadero
        if(!empty($model->Cliente->email) && $data['estado']->enviar == true){

            try{
                //Envio de email
                Mail::send('admin.orders.email', ['estado' => $data['estado'],'company' => $data['company'], 'models_id' => $idCrypt, 'empresa' => $data['empresa'],'direccion' => $data['direccion'] ,'tipo' => $tipo ], function($message) use ($data,$model,$letraChica,$company, $tasks, $vendedor)
                {

                    $message->from(env('CONTACT_MAIL'), env('CONTACT_NAME'))->subject('Servicio Técnico');
                    $message->to($model->Cliente->email, $model->Cliente->fullname);

                    if($data['estado']->enviar_remito == true){
                        $pdf        = PDF::loadView('admin.orders.reportes', compact('model','letraChica','company', 'tasks', 'vendedor'));
                        $message->attachData($pdf->output(), 'remito.pdf', ['mime' => 'application/pdf']);
                    }

                });

            }catch(Exception $e){

                return redirect()->back()->withErrors(['No se ha podido enviar el email']);
            }

            return redirect()->back()->withErrors(['Regitro Agregado Correctamente. Email enviado al cliente.']);

        }else{

            return redirect()->back()->withErrors(['Regitro Agregado Correctamente. El Email no fue enviado al cliente.']);
        }
        //return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);

    }

    public function reporte(Route $route, ToPrintRepo $toPrintRepo, CompanyRepo $companyRepo){

        $model      = $this->repo->find($route->getParameter('id'));
        $company    = $companyRepo->getModel()->first();
        $letraChica = $toPrintRepo->ultimo();
        $tasks      = Tasks::all();
        $vendedor   = Auth::user();
        $pdf        = PDF::loadView('admin.orders.reportes', compact('model','letraChica','company','tasks', 'vendedor'));

        return $pdf->stream();
    }

    public function updatePagos(Request $request){

        $model                          = $this->repo->find($request->get('orden_id'));
        $model->presupuesto_estimado    = $request->get('presupuesto_estimado');
        $model->pagado                  = $request->get('pagado');

        $this->updateable($model);

        $model->save();

        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);

    }

    public function updateObservaciones(Request $request){

        $model                          = $this->repo->find($request->get('orden_id'));
        $model->observaciones           = $request->get('observaciones');
        $model->falla_declarada         = $request->get('falla_declarada');
        $model->observaciones_tecnicas  = $request->get('observaciones_tecnicas');
        $model->partes                  = $request->get('partes');
        $model->insumos                 = $request->get('insumos');
        $model->observaciones_internas  = $request->get('observaciones_internas');
        $this->updateable($model);
        $model->save();

        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);
    }


    public function busquedaServicios(){

        $services = Services::all();
        return $services;
        /*
        $datarow
          while($datarow = mysqli_fetch_assoc($result)){
             $id = $datarow['id'];
             $title = $datarow['title'];
             $content = $datarow['content'];
             $shortcontent = substr($content, 0, 160)."...";
             $link = $datarow['link'];

             $response_arr[] = array('id'=>$id,'title'=>$title,'shortcontent'=>$shortcontent,'content'=>$content,'link'=>$link);

            }

            if(count($response_arr) > 0)
            echo json_encode($response_arr);
        */

       // return json_encode($services);
    }
    public function addServices(Request $request, OrderServicesRepo $orderServicesRepo)
    {
        $data['orders_id']      = $request->get('orders_id');
        $data['services_id']    = $request->get('services_id');
        $data['cantidad']       = $request->get('cantidad');
        $orderServices          = $orderServicesRepo->create($data);

        return redirect()->back()->withErrors(['Registro agregado Correctamente']);


    }

    public function deleteServices(Request $request, OrderServicesRepo $orderServicesRepo){

        $id     = $this->route->getParameter('id');
        $model  = $orderServicesRepo->find($id);
        $model->delete();

        return redirect()->back()->withErrors(['Registro borrado correctamente']);
    }

    public function storeOrder()
    {

        //validar los campos
        //$this->validate($this->request,config('models.'.$this->section.'.validationsStore'));

        //$this->validate($this->request ,config('models.'.$this->section.'.validationsStore'), config('models.'.$this->section.'.messagesStore'));
        $validator = Validator::make($this->request->all(), config('models.'.$this->section.'.validationsStore'), [

          'clients_id.required'      => 'El campo cliente es requerido',
          'clave_equipo.required'    => 'El campo clave equipo es requerido',
          'numero_serie.required'    => 'El campo serie/imei es requerido',
          'clave_equipo.required'    => 'El campo clave equipo es requerido',
          'serie_partes.required'    => 'El campo serie partes es requerido',
          'falla_declarada.required'    => 'El campo falla declarada es requerido',
            //'observaciones_tecnicas.required'    => 'El campo informe tecnico inicial es requerido',
            //  'partes.required'          => 'El campo informe tecnico final es requerido',
          'observaciones.required'   => 'El campo observaciones es requerido',
          //'insumos.required'         => 'El campo insumos es requerido',
          'presupuesto_estimado.required'    => 'El campo presupuesto estimado es requerido',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        //dd($this->request->all());
        //crea a traves del repo con el request
        $model = $this->repo->create($this->request);

        //Tareas
        //$model->tasks()->sync($this->request->tareas);
        if($this->request->estado){

            foreach ($this->request->estado as $key => $value) {

                $tasksOrders = new TasksOrders();

                $tasksOrders->orders_id = $model->id;
                $tasksOrders->tasks_id  = $key;
                $tasksOrders->estado    = $value;
                $tasksOrders->save();

            }
        }

        //Estado iniciado
        $state              = new OrderStates();
        $state->orders_id   = $model->id;
        $state->users_id    = $this->data['users_id'];
        $state->states_id   = 1;
        $state->save();

        //Envio de mail
        $data['empresa']    = $model->Brancheables()->first()->branches->name;
        $data['direccion']  = $model->Brancheables()->first()->branches->address;
        $data['estado']     = $this->statesRepo->find(1);
        $data['company']    = $this->companyRepo->getModel()->first();
        $letraChica         = $this->toPrintRepo->ultimo();
        $company            = $this->companyRepo->getModel()->first();
        $idCrypt            = Crypt::encrypt($model->id);
        $tasks              = Tasks::all();
        $vendedor           = Auth::user();
        $letraChica         = $this->toPrintRepo->ultimo();




        for ($i=0; $i < 2 ; $i++) {

            $emails = [ 'coderst@icase.com.ar', $model->Cliente->email ];

            if( !empty($emails[$i]) ){

            //Envio de email
            Mail::send('admin.orders.email', ['estado' => $data['estado'],'company' => $data['company'], 'models_id' => $idCrypt, 'empresa' => $data['empresa'],
                'direccion' => $data['direccion'] ], function($message) use ($data,$model,$letraChica,$company,$tasks, $vendedor,$emails, $i)
            {

            $message->from(env('CONTACT_MAIL'), env('CONTACT_NAME'))->subject('Servicio Técnico');
            $message->to( $emails[$i], $model->Cliente->fullname);


            if($data['estado']->enviar_remito == true ){
                $pdf = PDF::loadView('admin.orders.reportes', compact('model','letraChica','company','tasks','vendedor'));
                $message->attachData($pdf->output(), 'remito.pdf', ['mime' => 'application/pdf']);
            }

            });

            }

        }

        return redirect()->route('admin.orders.details',$model->id)->withErrors(['Regitro Agregado Correctamente. Email enviado al cliente.']);


        /*
        //Envio de mail
        if(!empty($model->Cliente->email) && $data['estado']->enviar == true){

            try{
                //Envio de email
                Mail::send('admin.orders.email', ['estado' => $data['estado'],'company' => $data['company'], 'models_id' => $idCrypt ], function($message) use ($data,$model,$letraChica,$company,$tasks, $vendedor)
                {
                    //$pdf        = PDF::loadView('admin.orders.remito', compact('model','company'));
                    $message->from(env('CONTACT_MAIL'), env('CONTACT_NAME'))->subject('Servicio Técnico');
                    $message->to($model->Cliente->email, $model->Cliente->fullname);

                    if($data['estado']->enviar_remito == true ){
                        $pdf = PDF::loadView('admin.orders.reportes', compact('model','letraChica','company','tasks','vendedor'));
                        $message->attachData($pdf->output(), 'remito.pdf', ['mime' => 'application/pdf']);
                    }

                });

            }catch(Exception $e){

                return redirect()->route('admin.orders.details',$model->id)->withErrors(['No se ha podido enviar el email']);
            }

            return redirect()->route('admin.orders.details',$model->id)->withErrors(['Regitro Agregado Correctamente. Email enviado al cliente.']);
            //return redirect()->back()->withErrors(['Regitro Agregado Correctamente. Email enviado al cliente.']);


        }else{


            //return redirect()->back()->withErrors(['Regitro Agregado Correctamente. El Email no fue enviado al cliente.']);
            return redirect()->route('admin.orders.details',$model->id)->withErrors(['Regitro Agregado Correctamente. El email no fue enviado al cliente']);
        }
        */

    }

    public function updateTasks(){

        //$model = $this->repo->create($this->request);

        $model = $this->repo->find($this->request->orden_id);

        foreach ($model->Tasks as $t) {
            $t->pivot->delete();
        }
        //dd('ada');

        //Tareas
        //$model->tasks()->sync($this->request->tareas);
        if($this->request->estado){

            foreach ($this->request->estado as $key => $value) {
                //dd($this->request->estado);
                //$tasksOrders = TasksOrders::where('orders_id', $model->id)->where('tasks_id', $key)->first();
                $tasksOrders = new TasksOrders();
                $tasksOrders->orders_id = $model->id;
                $tasksOrders->tasks_id  = $key;
                $tasksOrders->estado    = $value;
                $this->updateable($model);
                $tasksOrders->save();

            }
        }

        return redirect()->route('admin.orders.details',$model->id)->withErrors(['Regitro Editado Correctamente']);

    }


    public function getMovimientos(){
        $this->data['models']      = $this->repo->find($this->route->getParameter('id'));
        return view('admin.orders.movimientos')->with($this->data);
    }

    public function postMovimientos(){

        $id     = $this->route->getParameter('id');
        $model  = $this->repo->find($id);

        if($model->Movements){
            //$model->Movements()->update($this->request->all());

            $m = $this->movementsRepo->find($model->Movements->id);
            $m->fill($this->request->all());
            $m->save();


        }else{
            $model->Movements()->create($this->request->all());
        }

        return redirect()->back()->withErrors(['Regitro Creado Correctamente']);

    }

    public function remito(Route $route, ToPrintRepo $toPrintRepo, CompanyRepo $companyRepo){


        $model      = $this->repo->find($route->getParameter('id'));
        $company    = $companyRepo->getModel()->first();
        //dd($company);
        $pdf        = PDF::loadView('admin.orders.remito', compact('model','company'));

        return $pdf->stream();
    }



    public function updateVendedor(){

        $model               = $this->repo->find($this->request->get('orden_id'));
        $model->vendedor_id  = $this->request->get('vendedor_id');
        $this->updateable($model);
        $model->save();

        return redirect()->back()->withErrors(['Regitro Agregado Correctamente']);

    }

    public function updateable($model){

        $diffs = array_diff_assoc($model->getAttributes(),$model->getOriginal());

        foreach ($diffs as $diff => $a)
        {
            $col = $diff;
            //dd($model->getOriginal($diff));
            if( $model->getOriginal($diff) != '' ){
                $model->Updateables()->create(['column' => $col, 'data_old' => $model->getOriginal($diff), 'users_id' => Auth::user()->id ] );
            }

                //$model->Updateables()->create(['users_id' => Auth::user()->id, 'column' => $col, 'new_data' => $model->$diff, 'old_data' => $model->getOriginal($diff)]);
        }

        /*
        $a = $model['original'];
        $c = $model['attributes'];


        $diffs = array_diff($a, $c);

        foreach ($diffs as $diff => $a)
        {
        $col = $diff;
        $data = $a;

        $model->Updateables()->create(['column' => $col, 'data_old' => $data]);
        }
        */

    }

    public function history(){

        $this->data['model']     = $this->repo->find($this->route->getParameter('id'));
        //dd($this->data['model']);
        return view('admin.orders.history')->with($this->data);
    }

}
