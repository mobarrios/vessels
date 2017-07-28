<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//
//Route::get('fe','\App\Http\Controllers\Configs\VouchersController@store');
//
//Route::get('/constancia', function(\Illuminate\Http\Request $request,\Illuminate\Routing\Route $route , \Barryvdh\DomPDF\PDF $pdf){
//
//    $pdf->setPaper('a5', 'landscape')->loadView('moto.constancia');
//
//    return $pdf->stream();
//});
//
//
//Route::get('/ficha', function(){
//
//    //$pdf->setPaper('a5', 'landscape')->loadView('moto.constancia');
//    $data['section'] = 'Servicio técnico';
//    return view('moto.technicalServices.serviceOrder')->with($data);
//});




Route::get('', function(){
   return redirect() ->intended('home');
});

Route::group(['middleware'=>'auth'],function(){

    Route::get('home',['as'=>'home','uses'=>'HomeController@index']);

        require( __DIR__ .'/Routes/configsRoute.php');

//    Route::group(['prefix'=>'moto'],function() {
//
//        require(__DIR__ . '/Routes/Moto/ajaxRoute.php');
//
//        require(__DIR__ . '/Routes/Moto/budgetsRoute.php');
//        require(__DIR__ . '/Routes/Moto/brandsRoute.php');
//        require(__DIR__ . '/Routes/Moto/clientsRoute.php');
//        require(__DIR__ . '/Routes/Moto/categoriesRoute.php');
//        require(__DIR__ . '/Routes/Moto/colorsRoute.php');
//        require(__DIR__ . '/Routes/Moto/dispatchesRoute.php');
//        require(__DIR__ . '/Routes/Moto/financialsRoute.php');
//        require(__DIR__ . '/Routes/Moto/itemsRoute.php');
//        require(__DIR__ . '/Routes/Moto/itemsRequestRoute.php');
//        require(__DIR__ . '/Routes/Moto/modelsRoute.php');
//        require(__DIR__ . '/Routes/Moto/modelsListsPricesRoute.php');
//        require(__DIR__ . '/Routes/Moto/payMethodsRoutes.php');
//        require(__DIR__ . '/Routes/Moto/purchasesListsPricesRoute.php');
//        require(__DIR__ . '/Routes/Moto/purchasesOrdersRoute.php');
//        require(__DIR__ . '/Routes/Moto/providersRoute.php');
//        require(__DIR__ . '/Routes/Moto/salesRoute.php');
//        require(__DIR__ . '/Routes/Moto/smallBoxesRoute.php');
//        require(__DIR__ . '/Routes/Moto/checkbooksRoute.php');
//        require(__DIR__ . '/Routes/Moto/profilesRoute.php');
//
//    });



    //export to excel
    Route::get('/excel',['as' => 'utilities.exportToExcel', 'uses'=>'Utilities\UtilitiesController@exportToExcel']);

    //export to pdf
//    Route::get('/pdf',['as' => 'utilities.exportToPdf', 'uses'=>'Utilities\UtilitiesController@exportToPdf']);
});




Route::group(['prefix'=>'auth'],function(){

    Route::get('login',['as'=>'auth.login','uses'=>'Auth\AuthController@login']);
    Route::post('validate',['as'=>'auth.validate','uses'=>'Auth\AuthController@validateLogin']);
    Route::get('logout',['as' => 'logout' , 'uses' => 'Auth\AuthController@logout']);

});



