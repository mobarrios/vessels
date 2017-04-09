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

    'storeRecibosRoute'  => 'moto.'.$model.'.storeRecibos',
    'deleteRecibosRoute'  => 'moto.'.$model.'.deleteRecibos',



    'postStoreRoute'  => 'moto.'.$model.'.edit',
    'postUpdateRoute' => 'moto.'.$model.'.edit',

    'exportPdfRoute' => 'moto.'.$model.'.pdf',

    //addItems
    'addItemsRoute'  => 'moto.'.$model.'.addItems',
    'createItemsRoute'=> 'moto.'.$model.'.createItems',
    'editItemsRoute'  => 'moto.'.$model.'.editItems',
    'updateItemsRoute'  => 'moto.'.$model.'.updateItems',
    'deleteItemsRoute'  => 'moto.'.$model.'.deleteItems',

    'addPayMethodsRoute'  => 'moto.'.$model.'.addPayment',
    'editPayMethodsRoute'  => 'moto.'.$model.'.editPayment',
    'updatePayMethodsRoute'  => 'moto.'.$model.'.updatePayment',
    'deletePayMethodsRoute'  => 'moto.'.$model.'.deletePayment',


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
    'asideItems' =>[
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


    'asidePays' =>[
        'amount' => null,
        'financials_id' => null,
        'ccn' => null,
        'ccc' => null,
        'cce' => null,
    ]



];
