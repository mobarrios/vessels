<?php

// sucursales
Route::group(['prefix' => 'services'], function () {

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

});
