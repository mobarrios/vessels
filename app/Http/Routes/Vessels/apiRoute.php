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

        array_push($result,
            [
                'id' => $model->id,
                'start_date' => $model->start_date,
                'end_date' => $model->end_date,
                'vessels_name' => $model->Vessels->name,

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

           $operations = new \App\Entities\Vessels\Operations();
           $operations->start_date = $request->start_date;
           $operations->end_date = $request->end_date;
           $operations->quantity = $request->quantity;
           $operations->users_id = $request->users_id;
           $operations->cargo_types_id = $request->cargo_types_id;
           $operations->operations_types_id = $request->operations_types_id;
           $operations->locations_id = $request->locations_id;
           $operations->services_id = $request->services_id;
           $operations->sectors_id = 1;
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

     Route::post('surfersReport',function(\Illuminate\Http\Request $request)
     {
       //dd($request->all());
         $dr = new \App\Entities\Vessels\SurfersReport();
         $dr->fill($request->all());
         $dr->save();

         return response()->json($dr,200);
     });
});
