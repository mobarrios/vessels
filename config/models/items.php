<?php

$model = 'items';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Articulos',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.index',
    'postUpdateRoute' => 'moto.'.$model.'.index',

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
        
            'Nombre'    => 'name',
            'Color'     =>  ['colors','name'] ,
            'Modelo'     => ['models','name'],
            'Sucursal'   => ['branches','name'],
    ],

    'validationsStore' => [

            'models_id'          => 'required',
           // 'address'     => 'required',

    ],

    'validationsUpdate' => [

            'models_id'          => 'required',
            //'address'     => 'required',

    ],

];
