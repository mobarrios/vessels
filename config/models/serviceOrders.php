<?php

$model = 'serviceOrders';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Ordern de servicio',

    //routes
    'indexRoute'         => 'moto.'.$model.'.index',
    'storeRoute'         => 'moto.'.$model.'.store',
    'createRoute'        => 'moto.'.$model.'.create',
    'showRoute'          => 'moto.'.$model.'.show',
    'editRoute'          => 'moto.'.$model.'.edit',
    'updateRoute'        => 'moto.'.$model.'.update',
    'destroyRoute'       => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.index',
    'postUpdateRoute' => 'moto.'.$model.'.index',

    'exportPdfRoute' => 'moto.'.$model.'.pdf',

    //addItems
    'addItemsRoute'  => 'moto.'.$model.'.addItems',
    'editItemsRoute'  => 'moto.'.$model.'.editItems',
    'deleteItemsRoute'  => 'moto.'.$model.'.deleteItems',

    //urls
    'destroyUrl' => 'moto/'.$model.'/destroy/',

    //views
    'storeView' =>  'moto.technicalServices.serviceOrder',
    'editView'  =>  'moto.technicalServices.serviceOrder',

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
            'patente'     => 'required',
            'km_hs'     => 'required',
            'fluido_radiador'     => 'required|number',
            'fluido_frenos'     => 'required|number',
            'combustible'     => 'required|number',
            'nivel_aceite'     => 'required|number',

            'kit_herramientas'     => 'required|boolean',
            'casco'     => 'required|boolean',
            'moto_sin_averias'     => 'required|boolean',

            'observaciones' => 'string',

            'luces_tablero'     => 'required|boolean',
            'bocina'     => 'required|boolean',
            'giros'     => 'required|boolean',
            'punios'     => 'required|boolean',
            'luz_baja_alta'     => 'required|boolean',
            'palanca_de_embrague'     => 'required|boolean',
            'cable_de_embrague'     => 'required|boolean',
            'palanca_de_freno'     => 'required|boolean',
            'cable_de_freno'     => 'required|boolean',
            'luz_freno'     => 'required|boolean',
            'luz_freno_opcion'     => 'required|boolean',
            'cable_de_acelerador'     => 'required|boolean',
            'espejos_retrovisores'     => 'required|boolean',
            'amortiguadores_delanteros'     => 'required|boolean',
            'cinta_o_pastilla_freno_delantero'     => 'required|boolean',
            'disco_freno_delantero'     => 'required|boolean',
            'neumatico_delantero'     => 'required|boolean',
            'pedal_freno_trasero'     => 'required|boolean',
            'amortiguadores_traseros'     => 'required|boolean',
            'cinta_o_pastilla_freno_trasero'     => 'required|boolean',
            'disco_freno_trasero'     => 'required|boolean',
            'neumatico_trasero'     => 'required|boolean',
            'sistema_de_transmision'     => 'required|boolean',
            'pedal_de_cambios'     => 'required|boolean',
            'sosten_lateral_caballete_pedalines'     => 'required|boolean',

            'fecha_entrega'     => 'required',

            'entrega_item1' => 'string',
            'entrega_descripcion_item1' => 'string',
            'entrega_item2' => 'string',
            'entrega_descripcion_item2' => 'string',
            'entrega_item3' => 'string',
            'entrega_descripcion_item3' => 'string',

            'diagnostico_item1' => 'string',
            'diagnostico_descripcion_item1' => 'string',
            'diagnostico_item2' => 'string',
            'diagnostico_descripcion_item2' => 'string',
            'diagnostico_item3' => 'string',
            'diagnostico_descripcion_item3' => 'string',

            'repuestos_cantidad1' => 'string',
            'repuestos_descripcion1' => 'string',
            'repuestos_cantidad2' => 'string',
            'repuestos_descripcion2' => 'string',
            'repuestos_cantidad3' => 'string',
            'repuestos_descripcion3' => 'string',

            'instrumento_de_medicion1' => 'string',
            'instrumento_de_medicion2' => 'string',

            'tiempo_mano_de_obra' => 'string',
    ],

    'validationsUpdate' => [

        'patente'     => 'required',
        'km_hs'     => 'required',
        'fluido_radiador'     => 'required|number',
        'fluido_frenos'     => 'required|number',
        'combustible'     => 'required|number',
        'nivel_aceite'     => 'required|number',

        'kit_herramientas'     => 'required|boolean',
        'casco'     => 'required|boolean',
        'moto_sin_averias'     => 'required|boolean',

        'observaciones' => 'string',

        'luces_tablero'     => 'required|boolean',
        'bocina'     => 'required|boolean',
        'giros'     => 'required|boolean',
        'punios'     => 'required|boolean',
        'luz_baja_alta'     => 'required|boolean',
        'palanca_de_embrague'     => 'required|boolean',
        'cable_de_embrague'     => 'required|boolean',
        'palanca_de_freno'     => 'required|boolean',
        'cable_de_freno'     => 'required|boolean',
        'luz_freno'     => 'required|boolean',
        'luz_freno_opcion'     => 'required|boolean',
        'cable_de_acelerador'     => 'required|boolean',
        'espejos_retrovisores'     => 'required|boolean',
        'amortiguadores_delanteros'     => 'required|boolean',
        'cinta_o_pastilla_freno_delantero'     => 'required|boolean',
        'disco_freno_delantero'     => 'required|boolean',
        'neumatico_delantero'     => 'required|boolean',
        'pedal_freno_trasero'     => 'required|boolean',
        'amortiguadores_traseros'     => 'required|boolean',
        'cinta_o_pastilla_freno_trasero'     => 'required|boolean',
        'disco_freno_trasero'     => 'required|boolean',
        'neumatico_trasero'     => 'required|boolean',
        'sistema_de_transmision'     => 'required|boolean',
        'pedal_de_cambios'     => 'required|boolean',
        'sosten_lateral_caballete_pedalines'     => 'required|boolean',

        'fecha_entrega'     => 'required',

        'entrega_item1' => 'string',
        'entrega_descripcion_item1' => 'string',
        'entrega_item2' => 'string',
        'entrega_descripcion_item2' => 'string',
        'entrega_item3' => 'string',
        'entrega_descripcion_item3' => 'string',

        'diagnostico_item1' => 'string',
        'diagnostico_descripcion_item1' => 'string',
        'diagnostico_item2' => 'string',
        'diagnostico_descripcion_item2' => 'string',
        'diagnostico_item3' => 'string',
        'diagnostico_descripcion_item3' => 'string',

        'repuestos_cantidad1' => 'string',
        'repuestos_descripcion1' => 'string',
        'repuestos_cantidad2' => 'string',
        'repuestos_descripcion2' => 'string',
        'repuestos_cantidad3' => 'string',
        'repuestos_descripcion3' => 'string',

        'instrumento_de_medicion1' => 'string',
        'instrumento_de_medicion2' => 'string',

        'tiempo_mano_de_obra' => 'string',

    ],

];
