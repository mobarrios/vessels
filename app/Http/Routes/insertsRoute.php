<?php

Route::group(['prefix'=>'inserts'],function(){
	//return view('inserts.index');
	Route::get('/datos',['uses'=>'Utilities\InsertsController@datos']);


	Route::get('/',['uses'=>'Utilities\InsertsController@datos']);
	Route::post('procesarUsers',[ 'as'=>'procesarUsers','uses'=>'Utilities\InsertsController@procesarUsers']);
	Route::post('procesarServices',[ 'as'=>'procesarServices','uses'=>'Utilities\InsertsController@procesarServices']);
	Route::post('procesarBrands',[ 'as'=>'procesarBrands','uses'=>'Utilities\InsertsController@procesarBrands']);
	Route::post('procesarModels',[ 'as'=>'procesarModels','uses'=>'Utilities\InsertsController@procesarModels']);
	Route::post('procesarEquipos',[ 'as'=>'procesarEquipos','uses'=>'Utilities\InsertsController@procesarEquipos']);
	
	Route::post('procesarClients',[ 'as'=>'procesarClients','uses'=>'Utilities\InsertsController@procesarClients']);
	Route::post('procesarOrders',[ 'as'=>'procesarOrders','uses'=>'Utilities\InsertsController@procesarOrders']);
	Route::post('procesarOrdersClients',[ 'as'=>'procesarOrdersClients','uses'=>'Utilities\InsertsController@procesarOrdersClients']);
	Route::post('procesarOrderServices',[ 'as'=>'procesarOrderServices','uses'=>'Utilities\InsertsController@procesarOrderServices']);
	Route::post('procesarOrderEstados',[ 'as'=>'procesarOrderEstados','uses'=>'Utilities\InsertsController@procesarOrderEstados']);
	Route::post('procesarEstados',[ 'as'=>'procesarEstados','uses'=>'Utilities\InsertsController@procesarEstados']);
	

});
