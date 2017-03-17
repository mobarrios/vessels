<?php

$model = 'files';

return [

    'paginate' => '50',

    //nombre de la seccion
    'sectionName' => 'Legajos',

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
        // DESCOMENTAR CUANDO ESTÉ ARMADA LA TABLA FACTURAS Y REMITOS
        /*
        'invoices_copia1' => 'exists:invoices',
        'invoices_copia2' => 'exists:invoices',
        'sender' => 'exists:sender'
        */
    ],

    'validationsUpdate' => [

        // DESCOMENTAR CUANDO ESTÉ ARMADA LA TABLA FACTURAS Y REMITOS
        /*
        'invoices_copia1' => 'exists:invoices',
        'invoices_copia2' => 'exists:invoices',
        'sender' => 'exists:sender'
        */
    ],

];
