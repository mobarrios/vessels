<?php

$model = 'purchasesOrders';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Pedidos de Mercadería',

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
        
            'Numero'    => 'id',
            //'Direccion'  => 'address' ,
            //'Email'     => 'email',
    ],

    'validationsStore' => [

        'date' => 'required',
        'providers_id' => 'required',
        //'quantity' => 'required',
        //'models_id' => 'required',
        //'price' => 'required',
    ],

    'validationsUpdate' => [

        'date' => 'required',
        'providers_id' => 'required',
        //'quantity' => 'required',
        //'models_id' => 'required',
        //'price' => 'required',

    ],

];
