<?php

$model = 'modelsListsPrices';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Listas de Precios',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    //urls
    'destroyUrl' => 'moto/'.$model.'/destroy/',

    //views
    'storeView' =>  'moto.'.$model.'.form',
    'editView'  =>  'moto.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => true,
    'is_brancheable'    => false,
    

    //column search
    'search' => [

        'Nombre' => 'name',
        'Direccion' => 'address'


    ],

    'validationsStore' => [

        'name' => 'required',
        'providers_id' => 'required'


    ],

    'validationsUpdate' => [
        'name' => 'required',
        'address' => 'required',
        'email' => 'required',
        'phone' => 'required'

    ],

];
