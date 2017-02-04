<?php

$model = 'sales';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Ventas',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.edit',
    'postUpdateRoute' => 'moto.'.$model.'.edit',

    'exportPdfRoute' => 'moto.'.$model.'.pdf',

    //addItems
    'addItemsRoute'  => 'moto.'.$model.'.addItems',
    'editItemsRoute'  => 'moto.'.$model.'.editItems',
    'deleteItemsRoute'  => 'moto.'.$model.'.deleteItems',

    //urls
    'destroyUrl' => 'moto/'.$model.'/destroy/',

    //views
    'storeView' =>  'moto.'.$model.'.form',
    'editView'  =>  'moto.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => false,
    'is_brancheable'    => true,
    

    //column search
    'search' => [
        
            'Numero'    => 'number',
            //'Direccion'  => 'address' ,
            //'Email'     => 'email',
    ],

    'validationsStore' => [

            //'number'          => 'required',
            'date_confirm'     => 'required',

    ],

    'validationsUpdate' => [

            //'number'          => 'required',
            'date_confirm'     => 'required',

    ],

    //asides
    'items' => true,
    'pay' => false,


    'asideInputs' =>
        ['items' =>[
                        'models_id' => null,
                        'colors_id' => null,
                        'price_actual' => null,
                        'patentamiento' => null,
                        'pack_service' => null,
                        'cedula' => null,
                        'alta_patente' => null,
                        'ad_suc' => null,
                        'lojack' => null,
                        'alta_seguro' => null,
                        'repuestos' => null,
                        'larga_distancia' => null,
                        'formularios' => null,
                        'seguro_tipo' => null,
                     ],
        ],
        ['pay' =>[
                        'amount' => null,
                        'financials_id' => null,
                        'ccn' => null,
                        'ccc' => null,
                        'cce' => null,
                     ],
        ],


];
