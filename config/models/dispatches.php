<?php

$model = 'dispatches';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Remitos',

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
    'is_imageable'      => true,
    'is_brancheable'    => true,
    

    //column search
    'search' => [
        
            'Numero'    => 'number',
            //'Direccion'  => 'address' ,
            //'Email'     => 'email',
    ],

    'validationsStore' => [

            'number'          => 'required',
            'date'     => 'required',

    ],

    'validationsUpdate' => [

            'number'          => 'required',
            'date'     => 'required',

    ],

];
