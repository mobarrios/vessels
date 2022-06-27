<?php

// users
Route::group(['prefix' => 'users'], function () {

    Route::post('login',function(\Illuminate\Http\Request $request){

        $result = ['name' => $request->name];

        if(!Auth::attempt(['user_name' => $request->username, 'password' => $request->password]))
                return response()->json('false',200);
        else
                return response()->json(Auth::user() ,200);
    });
  });


// services
Route::group(['prefix' => 'services'], function () {

  Route::get('all',function(){

    $result = [];

    $models = \App\Entities\Vessels\Services::all();

    foreach ($models as $model)

     //dd($model->ServicesCargo);

        array_push($result,
            [
                'id' => $model->id,
                'start_date' => $model->start_date,
                'end_date' => $model->end_date,
                'vessels_name' => $model->Vessels->name,
                'vessels_sectors'=> $model->Vessels->Sectors()->get(['id','vessels_id','name','capacities','sectors_types_id']),
                'service_cargo' => $model->ServicesCargo()->with('CargoTypes')->get(),

                // 'brands'=> $model->BrandsName,
                // 'address' => $model->address,
                // 'horarios' => $model->horarios,
                // 'latitud' => $model->latitud,
                // 'longitud' => $model->longitud,
            ]);

    return response()->json($result,200);
  });


   Route::get('operationsTypes', function () {

       $result = [];

       $models = \App\Entities\Vessels\OperationsTypes::all();

       foreach ($models as $model)

           array_push($result,
               [
                   'id' => $model->id,
                   'name' => $model->name,
                   // 'brands'=> $model->BrandsName,
                   // 'address' => $model->address,
                   // 'horarios' => $model->horarios,
                   // 'latitud' => $model->latitud,
                   // 'longitud' => $model->longitud,
               ]);

       return response()->json($result,200);
   });

   Route::get('locations', function () {

       $result = [];

       $models = \App\Entities\Vessels\Locations::all();

       foreach ($models as $model)

           array_push($result,
               [
                   'id' => $model->id,
                   'name' => $model->name,
                   // 'brands'=> $model->BrandsName,
                   // 'address' => $model->address,
                   // 'horarios' => $model->horarios,
                   // 'latitud' => $model->latitud,
                   // 'longitud' => $model->longitud,
               ]);

       return response()->json($result,200);
   });

   Route::get('cargoTypes', function () {

       $result = [];

       $models = \App\Entities\Vessels\CargoTypes::all();

       foreach ($models as $model)

           array_push($result,
               [
                   'id' => $model->id,
                   'name' => $model->name,
                   // 'brands'=> $model->BrandsName,
                   // 'address' => $model->address,
                   // 'horarios' => $model->horarios,
                   // 'latitud' => $model->latitud,
                   // 'longitud' => $model->longitud,
               ]);

       return response()->json($result,200);
   });

   //activities
   Route::get('operations', function (\Illuminate\Http\Request $request) {

       $result = [];

       $services_id = $request->services_id;

       $models = \App\Entities\Vessels\Operations::where('services_id',$services_id)->get();

       foreach ($models as $model)

           array_push($result,
               [
                   'id' => $model->id,
                   'start_date' => $model->start_date,
                   'end_date' => $model->end_date,
                   'duration' => $model->duration,
                   'location_name' => $model->Locations->name,
                   'operations_type' => $model->OperationsTypes->name
                   // 'brands'=> $model->BrandsName,
                   // 'address' => $model->address,
                   // 'horarios' => $model->horarios,
                   // 'latitud' => $model->latitud,
                   // 'longitud' => $model->longitud,
               ]);

       return response()->json($result,200);
   });



   Route::post('addActivity',function(\Illuminate\Http\Request $request)
       {

           if(is_null($request->quantity)){
             $request->quantity = 0 ;
           }

           if(is_null($request->cargo_types_id)){
             $request->cargo_types_id = 1 ;
           }

           $operations = new \App\Entities\Vessels\Operations();
           $operations->start_date = $request->start_date;
           $operations->end_date = $request->end_date;
           $operations->quantity = $request->quantity;
           $operations->users_id = $request->users_id;
           $operations->cargo_types_id = $request->cargo_types_id;
           $operations->operations_types_id = $request->operations_types_id;
           $operations->locations_id = $request->locations_id;
           $operations->services_id = $request->services_id;
           $operations->sectors_id = $request->sectors_id;
           $operations->save();

           return response()->json($operations,200);
       });

     Route::post('departureReport',function(\Illuminate\Http\Request $request)
     {
       //dd($request->all());
         $dr = new \App\Entities\Vessels\DepartureReport();
         $dr->fill($request->all());
         $dr->save();

         return response()->json($dr,200);
     });

     Route::post('dmReport',function(\Illuminate\Http\Request $request)
     {
       //dd($request->all());
         $data = $request->except(['dmrCargo']);
         $dr = new \App\Entities\Vessels\DmReport();
         $dr->fill($data);
         $dr->save();

        $svc = new \App\Entities\Vessels\Services();
        $svc = $svc->find($request->services_id);


        foreach($request->dmrCargo as $cargo)
         {

           if($svc->dmReport->count() == 0){

             $init = \DB::table('services_cargo')
             ->where('cargo_types_id',$cargo["services_cargo_id"])
             ->where('services_id',$request->services_id)
             ->first();
             $initial = $init->quantity;

           }else{

             $init = \DB::table('dm_report')
             ->join('dmr_cargo','dmr_cargo.dm_report_id','=','dm_report.id')
             ->join('services_cargo','services_cargo.id','=','dmr_cargo.services_cargo_id')
             ->where('dm_report.services_id',$request->services_id)
             ->where('services_cargo.cargo_types_id',$cargo["services_cargo_id"])
             ->latest('dm_report.created_at')
             ->first();

              if($init == null){
                  $initial = 0;
              }else{
                  $initial = $init->cons;
              }
           }

           $act  = $svc->bySectors($cargo["services_cargo_id"],$request->services_id);

           if($act == null)
           {
             $sum = 0;
             $res = 0;
           }else{
             $sum = $act[0]->sum ;
             $res = $act[0]->res ;
           }
              $consumo = $initial + $sum - $res + $cargo["correction"] - $cargo["rob"] ;


           $drc = new \App\Entities\Vessels\DmrCargo();
           $drc->dm_report_id = $dr->id;
           $drc->services_cargo_id = $cargo["services_cargo_id"];
           $drc->recieved = $sum;
           $drc->delievered = $res;
           $drc->initial_stock = $initial;
           $drc->cons = $consumo;
           $drc->rob = $cargo["rob"];
           $drc->correction = $cargo["correction"];
           $drc->obs = $cargo["obs"];
           $drc->save();

         }

         return response()->json($dr,200);
     });

     Route::post('surfersReport',function(\Illuminate\Http\Request $request)
     {
       //dd($request->all());
         $dr = new \App\Entities\Vessels\SurfersReport();
         $dr->fill($request->all() );
         $dr->save();

         return response()->json($dr,200);
     });
});
