<?php

$model = 'smallBoxes';

return [

    'paginate' => '50',

    //nombre de la seccion
    'sectionName' => 'Caja chica',

    //routes
    'indexRoute' => 'moto.' . $model . '.index',
    'storeRoute' => 'moto.' . $model . '.store',
    'createRoute' => 'moto.' . $model . '.create',
    'showRoute' => 'moto.' . $model . '.show',
    'editRoute' => 'moto.' . $model . '.edit',
    'updateRoute' => 'moto.' . $model . '.update',
    'destroyRoute' => 'moto.' . $model . '.destroy',

    'postStoreRoute' => 'moto.' . $model . '.index',
    'postUpdateRoute' => 'moto.' . $model . '.index',

    //urls
    'destroyUrl' => 'moto/' . $model . '/destroy/',

    //views
    'storeView' => 'moto.' . $model . '.form',
    'editView' => 'moto.' . $model . '.form',

    //path
    'imagesPath' => 'uploads/' . $model . '/images/',

    //polymorphic
    'is_logueable' => true,
    'is_imageable' => true,
    'is_brancheable' => true,


    //column search
    'search' => [

        'Nombre' => 'name',
        //'Direccion'  => 'address' ,
        //'Email'     => 'email'
    ],

    'validationsStore' => [

        'entry' => 'required',
        'date' => 'required',
        'amount' => 'required',
        'detail' => 'required',
        'types_small_boxes_id' => 'required',
        //'providers_id' => 'required',


    ],

    'validationsUpdate' => [


        'entry' => 'required',
        'date' => 'required',
        'amount' => 'required',
        'detail' => 'required',
        'types_small_boxes_id' => 'required',
        //'providers_id' => 'required',
    ],

    'entry' => [
        0 => 'Salida',
        1 => 'Entrada'
    ]

];
