<?php

$model = 'financials';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Financiamientos',

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
    'is_brancheable'    => false,
    

    //column search
    'search' => [
        
            'Nombre'    => 'name',
            //'Direccion'  => 'address' ,
            //'Email'     => 'email',
    ],

    'validationsStore' => [

            'name'          => 'required',
            //'address'     => 'required',

    ],

    'validationsUpdate' => [

            'name'          => 'required',
            //'address'     => 'required',

    ],

];
