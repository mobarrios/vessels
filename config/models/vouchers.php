<?php

$model = 'vouchers';

return [

    'paginate' => '50',

    //nombre de la seccion
    'sectionName' => 'Comprobantes',

    //routes
    'indexRoute' => 'configs.' . $model . '.index',
    'storeRoute' => 'configs.' . $model . '.store',
    'createRoute' => 'configs.' . $model . '.create',
    'showRoute' => 'configs.' . $model . '.show',
    'editRoute' => 'configs.' . $model . '.edit',
    'updateRoute' => 'configs.' . $model . '.update',
    'destroyRoute' => 'configs.' . $model . '.destroy',

    'postStoreRoute' => 'configs.' . $model . '.index',
    'postUpdateRoute' => 'configs.' . $model . '.index',

    //urls
    'destroyUrl' => 'configs/' . $model . '/destroy/',

    //views
    'storeView' => 'configs.' . $model . '.form',
    'editView' => 'configs.' . $model . '.form',

    //path
    'imagesPath' => 'uploads/' . $model . '/images/',

    //polymorphic
    'is_logueable' => true,
    'is_imageable' => false,
    'is_brancheable' => true,


    //column search
    'search' => [

        'Número' => 'numero',
        //'Direccion'  => 'address' ,
        //'Email'     => 'email'
    ],

    'validationsStore' => [

        //'numero' => 'required',
        // 'address'     => 'required',

    ],

    'validationsUpdate' => [

        //'numero' => 'required',
        //'address'     => 'required',

    ],


        'tipos' =>
        [
            'F' => 'Factura',
            'C' => 'Nota de Crédito',
            'D' => 'Nota de Débito',
            'R'=> 'Recibo'
        ]
    ,

        'letras' =>
            [
                'A' => 'A',
                'B' => 'B',
                'C' => 'C',
            ]
    ,

];
