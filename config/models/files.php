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

    'postStoreRoute' => 'moto.' . $model . '.edit',
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
        'sales_id' => 'required|exists:sales,id',
    ],

    'validationsUpdate' => [
        'invoices_id' => 'required|exists:vouchers,id',
        'senders_id' => 'required|exists:vouchers,id',
        'form_01' => 'boolean',
        'form_01_file' => 'required_with:form_01',
        'form_12' => 'boolean',
        'form_12_file' => 'required_with:form_12',
        'form_59' => 'boolean',
        'form_59_file' => 'required_with:form_59',
        'dni_photocopy' => 'boolean',
        'dni_photocopy_file' => 'required_with:dni_photocopy',
        'proof_of_cuil' => 'boolean',
        'proof_of_cuil_file' => 'required_with:proof_of_cuil'
    ],

];
