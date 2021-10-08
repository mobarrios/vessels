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


// Route::get('fe','\App\Http\Controllers\Configs\VouchersController@store');


Route::get('', function()
{
   return redirect()->intended('home');
});


Route::group(['middleware'=>'auth'],function(){

    Route::get('home',['as'=>'home','uses'=>'HomeController@index']);

        require( __DIR__ .'/Routes/configsRoute.php');

    Route::group(['prefix'=>'admin'],function() {

        require(__DIR__ . '/Routes/Vessels/vesselsRoute.php');

        require(__DIR__ . '/Routes/Admin/budgetsRoute.php');
        require(__DIR__ . '/Routes/Admin/brandsRoute.php');
        require(__DIR__ . '/Routes/Admin/clientsRoute.php');
        require(__DIR__ . '/Routes/Admin/categoriesRoute.php');
        require(__DIR__ . '/Routes/Admin/colorsRoute.php');
        require(__DIR__ . '/Routes/Admin/dispatchesRoute.php');
        require(__DIR__ . '/Routes/Admin/financialsRoute.php');
        require(__DIR__ . '/Routes/Admin/itemsRoute.php');
        require(__DIR__ . '/Routes/Admin/modelsRoute.php');
        require(__DIR__ . '/Routes/Admin/modelsListsPricesRoute.php');
        require(__DIR__ . '/Routes/Admin/payMethodsRoutes.php');
        require(__DIR__ . '/Routes/Admin/purchasesListsPricesRoute.php');
        require(__DIR__ . '/Routes/Admin/purchasesOrdersRoute.php');
        require(__DIR__ . '/Routes/Admin/providersRoute.php');
        require(__DIR__ . '/Routes/Admin/salesRoute.php');
        require(__DIR__ . '/Routes/Admin/smallBoxesRoute.php');
        require(__DIR__ . '/Routes/Admin/checkbooksRoute.php');
        require(__DIR__ . '/Routes/Admin/profilesRoute.php');
        require(__DIR__ . '/Routes/Tecnica/productosRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/caracteristicasRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/presupuestosRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/ordersRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/statesRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/equipmentsRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/servicesRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/printRoute.php');
        // require(__DIR__ . '/Routes/Tecnica/purcharsesRoute.php');
    });

    Route::group(['prefix'=>'vessels'],function() {

        require(__DIR__ . '/Routes/Vessels/vesselsRoute.php');

      });

    // require(__DIR__ . '/Routes/insertsRoute.php');
    //export to excel
    Route::get('/excel',['as' => 'utilities.exportToExcel', 'uses'=>'Utilities\UtilitiesController@exportToExcel']);

    //export to pdf
    //Route::get('/pdf',['as' => 'utilities.exportToPdf', 'uses'=>'Utilities\UtilitiesController@exportToPdf']);
});




Route::group(['prefix'=>'auth'],function(){

    Route::get('login',['as'=>'auth.login','uses'=>'Auth\AuthController@login']);
    Route::post('validate',['as'=>'auth.validate','uses'=>'Auth\AuthController@validateLogin']);
    Route::get('logout',['as' => 'logout' , 'uses' => 'Auth\AuthController@logout']);

});

// Route::get('/confirm/{id}/{estado}',     ['as'=>'admin.ordenes.confirm','uses'=> 'Tecnica\ApiController@confirm']);
// Route::get('/presupuesto', ['as' => 'admin.presupuesto.form', 'uses' =>  'Tecnica\ApiController@presupuesto' ]);
// Route::get('/swoptech', ['as' => 'admin.swoptech.formPublic', 'uses' =>  'Tecnica\ProductosController@swoptech' ]);
// Route::post('/cotizar', ['as' => 'admin.swoptech.postFormPublic', 'uses' =>  'Tecnica\ProductosController@postFormPublic' ]);
// Route::get('/obtenerPrecio', ['as' => 'admin.swoptech.obtenerPrecio', 'uses' =>  'Tecnica\ProductosController@obtenerPrecio' ]);
//
// Route::post('/postCotizar', ['as' => 'admin.swoptech.postCotizar', 'uses' =>  'Tecnica\ProductosController@postCotizar' ]);
