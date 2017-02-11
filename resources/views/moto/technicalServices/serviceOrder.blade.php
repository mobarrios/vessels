<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden de servicio</title>

    @include('template.css')
    <base href="{!! asset('') !!}">
    <link rel="stylesheet" href="vendors/LTE/plugins/iCheck/all.css">
    <style>
        .titulo{

            background: #4e4e4e;
            /*background: #aa1111;*/
            color: white;
            padding: 7px;
            margin-bottom: 5px;
        }

        .border{
            border: 1px solid #4e4e4e;
        }

        .font-21{
            font-size:21px;
        }

        .border2{
            border: 1px solid #4e4e4e;
            padding:10px;
            width:100%;
        }

        .border2>b{
            text-align: center;
        }

        .border2>hr{
           margin-top:2px;
           margin-bottom:2px;
        }

        .border2>div{
            position: relative;
        }

        .border2 input{
            position: absolute;
            right: 3px;
        }

        .border2>img{
            position: absolute;
            right: 0;
            left: 0;
            margin: auto;
            bottom:20px;
            /*height: 75px;*/
        }

        .h154{
            height:154px;
        }

        .ml5{
            margin-left: 5px !important;
        }

        .mt15{
            margin-top: 15px !important;
        }

        textarea{
            resize: none;
        }

        .relative{
            border-left: 1px solid #000;
            border-right: 1px solid #000;
            position:relative;
            padding:5px;
        }

        .doble-check{
            position: absolute;
            right: 2px;
            top: 2px;
        }

        table,tr,td,th{
            border: 1px solid #bbbbbb;
        }

        table>thead{
            background-color: #ddd;
        }

        input[type='radio']{
            width: 20px;
            height: 20px;
        }

        input[type='radio']:after {
            width: 20px;
            height: 20px;
            border-radius: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color: #d1d3d1;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
        }

        input[type='radio']:checked:after {
            width: 20px;
            height: 20px;
            border-radius: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
        }

        input[type='radio']:checked:after {
            background-color: #595b59;
        }

        input[type='radio'].radio-green:checked:after {
            background-color: #f73100;
            border: 2px solid #d72d00;
        }

        input[type='radio'].radio-red:checked:after {
            background-color: #29f100;
            border: 2px solid #1a9800;
        }



    </style>
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">
        <div class="container">

            <div class="row">
            <!-- Default box -->
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-body">

                        @if(isset($model))
                            {!! Form::model($model,['route'=> [config('models.'.$section.'.postUpdateRoute'), $models->id] , 'files' =>'true']) !!}
                        @else
                            {!! Form::open(['route'=> config('models.'.$section.'.postStoreRoute') , 'files' =>'true']) !!}
                        @endif
                            <div class="section border">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="titulo">
                                            Sucursal: {!! $branch->name !!}
                                        </div>

                                        <div class="col-xs-6">
                                            <p class="col-xs-12"><b>Dirección:</b> {!! $branch->address !!}</p>
                                            <p class="col-xs-12"><b>Cuit: </b>{!! $branch->cuit !!}</p>
                                            <p class="col-xs-12"><b>Provincia: </b>{!! $branch->province !!}</p>
                                            <p class="col-xs-12"><b>Localidad:</b> {!! $branch->location !!}</p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="col-xs-12"><b>C.P: </b>{!! $branch->cp !!}</p>
                                            <p class="col-xs-12"><b>Tel.: </b>{!! $branch->phone !!}</p>
                                            <p class="col-xs-12"><b>E-mail.: </b>{!! $branch->email !!}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="titulo">
                                            Orden de servicio
                                        </div>
                                        <p class="col-xs-12 font-21"><b>N: 0000001</b></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="titulo">
                                            <b>Datos del cliente</b>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="col-xs-12"><b>Nombre y Apellido:</b> {!! $client->fullName !!}</p>
                                            <p class="col-xs-12"><b>Dirección:</b> {!! $client->address !!}</p>
                                            <p class="col-xs-12"><b>Localidad:</b> {!! $client->localion !!}</p>

                                        </div>
                                        <div class="col-xs-6">
                                            <p class="col-xs-12"><b>E-mail:</b> {!! $client->email !!}</p>
                                            <p class="col-xs-12"><b>Teléfono:</b> {!! $client->phone1 !!}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="titulo">
                                            <b>Datos del vehículo</b>
                                        </div>
                                        <div class="col-xs-12">
                                            <p><b>Patente:</b> {!! Form::text('patente',null,['class' => 'form-control']) !!}</p>
                                            <p><b>Modelo:</b> {!! $item->models->name !!}</p>
                                            <p><b>Chasis:</b> {!! $item->n_cuadro !!}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="titulo">
                                            <b>Estado general del vehículo</b>
                                        </div>

                                        <div class="col-xs-4 col-md-2 col-lg-1 mt15"><b>Kilometraje / Horas:</b> {!! Form::text('km_hs',null,['class' => 'form-control']) !!}</div>


                                        <div class="col-xs-4 col-md-2 mt15">
                                            <div class="border2">
                                                <b class="text-center">Fluido Radiador</b>
                                                <hr>
                                                <div>
                                                    <label for="fuido_radiador_max">Max. </label>{!! Form::radio('fluido_radiador',3,false,['class' => 'icheckbox_flat-red','id' => 'fuido_radiador_max']) !!}
                                                </div>

                                                <div>
                                                <label for="fuido_radiador_med"> -</label>{!! Form::radio('fluido_radiador',2,true,['class' => 'icheckbox_flat-red','id' => 'fuido_radiador_med']) !!}
                                                </div>

                                                <div>
                                                    <label for="fuido_radiador_min">Min. </label>{!! Form::radio('fluido_radiador',1,false,['class' => 'icheckbox_flat-red','id' => 'fuido_radiador_min']) !!}
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xs-4 col-md-2 mt15">
                                            <div class="border2">
                                                <b class="text-center">Fluido Frenos</b>
                                                <hr>
                                                <div>
                                                    <label for="fluido_frenos_max">Max. </label>{!! Form::radio('fluido_frenos',1,false,['class' => 'icheckbox_flat-red','id' => 'fluido_frenos_max']) !!}
                                                </div>

                                                <div>
                                                <label for="fluido_frenos_med"> -</label>{!! Form::radio('fluido_frenos',2,true,['class' => 'icheckbox_flat-red','id' => 'fluido_frenos_med']) !!}
                                                </div>

                                                <div>
                                                    <label for="fluido_frenos_min">Min. </label>{!! Form::radio('fluido_frenos',3,false,['class' => 'icheckbox_flat-red','id' => 'fluido_frenos_min']) !!}
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xs-4 col-md-2 mt15">
                                            <div class="border2">
                                                <b class="text-center">Combustible</b>
                                                <hr>
                                                <div>
                                                    <label for="combustible_full">F </label>{!! Form::radio('combustible',1,false,['class' => 'icheckbox_flat-red','id' => 'combustible_full']) !!}
                                                </div>

                                                <div>
                                                    <label for="combustible_3_4">3/4 </label>{!! Form::radio('combustible',2,true,['class' => 'icheckbox_flat-red','id' => 'combustible_3_4']) !!}
                                                </div>

                                                <div>
                                                    <label for="combustible_1_2">1/2 </label>{!! Form::radio('combustible',3,true,['class' => 'icheckbox_flat-red','id' => 'combustible_1_2']) !!}
                                                </div>

                                                <div>
                                                    <label for="combustible_1_4">1/4 </label>{!! Form::radio('combustible',4,true,['class' => 'icheckbox_flat-red','id' => 'combustible_1_4']) !!}
                                                </div>

                                                <div>
                                                    <label for="combustible_r">R </label>{!! Form::radio('combustible',5,false,['class' => 'icheckbox_flat-red','id' => 'combustible_r']) !!}
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xs-4 col-md-2 mt15">
                                            <div class="border2 h154">
                                                <b class="text-center">Nivel Aceite</b>
                                                <hr>

                                                <br>
                                                <br>
                                                <div>
                                                    <label for="nivel_aceite_max">Max. </label>{!! Form::radio('nivel_aceite',1,false,['class' => 'icheckbox_flat-red','id' => 'nivel_aceite_max']) !!}
                                                </div>

                                                <div>
                                                    <label for="nivel_aceite_med"> -</label>{!! Form::radio('nivel_aceite',2,true,['class' => 'icheckbox_flat-red','id' => 'nivel_aceite_med']) !!}
                                                </div>

                                                <div>
                                                    <label for="nivel_aceite_min">Min. </label>{!! Form::radio('nivel_aceite',3,false,['class' => 'icheckbox_flat-red','id' => 'nivel_aceite_min']) !!}
                                                </div>
                                                <img src="images/aceite.png" alt="">
                                            </div>
                                        </div>



                                        <div class="col-xs-4 col-md-2 mt15">
                                            <div>
                                                <label for="kit_herramientas">
                                                    Kit de herramientas
                                                 {!! Form::checkbox('kit_herramientas',1,false,['id' => 'kit_herramientas','class' => 'ml5 icheckbox_flat-red']) !!}
                                                </label>
                                            </div>
                                            <div>
                                                <label for="casco">
                                                    Casco
                                                 {!! Form::checkbox('casco',1,false,['id' => 'casco','class' => 'ml5 icheckbox_flat-red']) !!}
                                                </label>
                                            </div>
                                            <div>
                                                <label for="moto_sin_averias">
                                                    Motocicleta sin averias
                                                 {!! Form::checkbox('moto_sin_averias',1,false,['id' => 'moto_sin_averias','class' => 'ml5 icheckbox_flat-red']) !!}
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-xs-12 mt15">
                                        <div class="col-xs-12 col-md-6">
                                            <img src="images/moto1.png" alt="" class="img-responsive center-block">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <img src="images/moto2.png" alt="" class="img-responsive center-block">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="titulo">
                                            <b>Observaciones</b>
                                        </div>

                                        <div class="col-xs-12">
                                            {!! Form::textarea('observaciones',null,['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="titulo">
                                            <b>INSPECCIÓN DE 24 ITEMS (CON LA PRESENCIA DEL CLIENTE)</b>
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <input type="radio" class="radio-red" checked> <b style="vertical-align: top; line-height: 25px; margin-right: 10px;">OK</b>
                                            <input type="radio" class="radio-green" checked><b style="vertical-align: top; line-height: 25px;; margin-left: 10px;">Recomendación de reemplazo</b>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="col-xs-12 col-md-6 mt15">
                                                <div class="relative">
                                                    <label for="luces_tablero">
                                                        Luces tablero (Iluminación, neutro, etc)
                                                        <div class="doble-check">
                                                            {!! Form::radio('luces_tablero',1,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('luces_tablero',0,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label for="bocina">
                                                        Bocina
                                                        <div class="doble-check">
                                                            {!! Form::radio('bocina',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('bocina',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label for="giros">
                                                        Giros
                                                        <div class="doble-check">
                                                            {!! Form::radio('giros',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('giros',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Puños
                                                        <div class="doble-check">
                                                            {!! Form::radio('punios',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('punios',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>

                                                <div class="relative">
                                                    <label>
                                                        Luz Baja / Alta
                                                        <div class="doble-check">
                                                            {!! Form::radio('luz_baja_alta',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('luz_baja_alta',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Palanca de embrague
                                                        <div class="doble-check">
                                                            {!! Form::radio('palanca_de_embrague',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('palanca_de_embrague',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Cable de embrague
                                                        <div class="doble-check">
                                                            {!! Form::radio('cable_de_embrague',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('cable_de_embrague',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Palanca de freno
                                                        <div class="doble-check">
                                                            {!! Form::radio('palanca_de_freno',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('palanca_de_freno',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>

                                                <div class="relative">
                                                    <label>
                                                        Cable de freno
                                                        <div class="doble-check">
                                                            {!! Form::radio('cable_de_freno',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('cable_de_freno',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>

                                                <div class="relative">
                                                    <label>
                                                        Luz de freno (Palanca: {!! Form::radio('luz_freno',0,false,['class' => 'ml5 icheckbox_flat-red']) !!} / Pedal: {!! Form::radio('luz_freno',1,false,['class' => 'ml5 icheckbox_flat-red']) !!})
                                                        <div class="doble-check">
                                                            {!! Form::radio('luz_freno_opcion',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('luz_freno_opcion',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Cable de acelerador
                                                        <div class="doble-check">
                                                            {!! Form::radio('cable_de_acelerador',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('cable_de_acelerador',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Espejos retrovisores
                                                        <div class="doble-check">
                                                            {!! Form::radio('espejos_retrovisores',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('espejos_retrovisores',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="col-xs-01 col-md-6 mt05">
                                                <div class="relative">
                                                    <label for="luces_tablero">
                                                        Amortiguadores delanteros
                                                        <div class="doble-check">
                                                            {!! Form::radio('amortiguadores_delanteros',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('amortiguadores_delanteros',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label for="bocina">
                                                        Cinta o pastilla freno delantero
                                                        <div class="doble-check">
                                                            {!! Form::radio('cinta_o_pastilla_freno_delantero',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('cinta_o_pastilla_freno_delantero',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label for="giros">
                                                        Disco/s freno delantero
                                                        <div class="doble-check">
                                                            {!! Form::radio('disco_freno_delantero',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('disco_freno_delantero',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Neumático delantero
                                                        <div class="doble-check">
                                                            {!! Form::radio('neumatico_delantero',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('neumatico_delantero',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Pedal freno trasero
                                                        <div class="doble-check">
                                                            {!! Form::radio('pedal_freno_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('pedal_freno_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Amortiguadores traseros
                                                        <div class="doble-check">
                                                            {!! Form::radio('amortiguadores_traseros',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('amortiguadores_traseros',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Cinta o pastilla freno trasero
                                                        <div class="doble-check">
                                                            {!! Form::radio('cinta_o_pastilla_freno_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('cinta_o_pastilla_freno_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Disco/s freno trasero
                                                        <div class="doble-check">
                                                            {!! Form::radio('disco_freno_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('disco_freno_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Neumático trasero
                                                        <div class="doble-check">
                                                            {!! Form::radio('neumatico_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('neumatico_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Sistema de transmisión
                                                        <div class="doble-check">
                                                            {!! Form::radio('sistema_de_transmision',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('sistema_de_transmision',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="relative">
                                                    <label>
                                                        Pedal de cambios
                                                        <div class="doble-check">
                                                            {!! Form::radio('pedal_de_cambios',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('pedal_de_cambios',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>

                                                <div class="relative">
                                                    <label>
                                                        Sostén lateral /Caballete/ Pedalines
                                                        <div class="doble-check">
                                                            {!! Form::radio('sosten_lateral_caballete_pedalines',0,false,['class' => 'ml5 radio-red']) !!}
                                                            {!! Form::radio('sosten_lateral_caballete_pedalines',1,false,['class' => 'ml5 radio-green']) !!}
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="titulo">
                                            <b></b>
                                        </div>

                                        <div class="col-xs-12">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-1">ITEM</th>
                                                        <th>DESCRIPCIÓN DEL PEDIDO DEL CLIENTE</th>
                                                        <th>FECHA DE COMPROMISO DE ENTREGA: {!! Form::text('fecha_entrega',null,['class' => 'datePicker']) !!}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('entrega_item1',null,['class' => 'form-control']) !!}</td>
                                                        <td colspan="2">{!! Form::text('entrega_descripcion_item1',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('entrega_item2',null,['class' => 'form-control']) !!}</td>
                                                        <td colspan="2">{!! Form::text('entrega_descripcion_item2',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('entrega_item3',null,['class' => 'form-control']) !!}</td>
                                                        <td colspan="2">{!! Form::text('entrega_descripcion_item3',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-xs-12">
                                            <p>
                                                Me declaro en conocimiento de la condicion en la que se encuentra la unidad, afirmando que los daños en la carrocería detectados en el momento de la recepción, son los indicados en la figura. Autorizo a realizar todos los trabajos descriptos a mi exclusiva cuenta y cargo, y a efectuar todas las pruebas necesarias (incluídas en ruta) de la unidad.
                                            </p>
                                            <br>

                                            <div class="col-xs-4">
                                                <p>22/02/2017</p>
                                                <p class="mt15"><b>FECHA</b></p>
                                            </div>

                                            <div class="col-xs-4">
                                                <br>
                                                <p class="mt15"><b>FIRMA Y ACLARACIÓN DEL CLIENTE </b></p>
                                            </div>

                                            <div class="col-xs-4">
                                                <br>
                                                <p class="mt15"><b>FIRMA Y ACLARACIÓN DEL RECEPCIONISTA</b></p>
                                            </div>



                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-1">ITEM</th>
                                                        <th>DIAGNÓSTICO Y REPARACIÓN REALIZADA</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('diagnostico_item1',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('diagnostico_descripcion_item1',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('diagnostico_item2',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('diagnostico_descripcion_item2',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('diagnostico_item3',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('diagnostico_descripcion_item3',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-1">CANT.</th>
                                                        <th>REPUESTOS UTILIZADOS</th>
                                                        <th> INSTRUMENTOS DE MEDICIÓN UTILIZADOS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('repuestos_cantidad1',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('repuestos_descripcion1',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('instrumento_de_medicion1',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('repuestos_cantidad2',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('repuestos_descripcion2',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('instrumento_de_medicion2',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-xs-1">{!! Form::text('repuestos_cantidad3',null,['class' => 'form-control']) !!}</td>
                                                        <td>{!! Form::text('repuestos_descripcion3',null,['class' => 'form-control']) !!}</td>
                                                        <td>TIEMPO MANO DE OBRA: {!! Form::text('tiempo_mano_de_obra',null,['class' => 'form-control']) !!}</td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                        </div>

                                        <div class="col-xs-12">
                                            <p>
                                                Dejo expresa constancia que luego de haber sido probada, retiro la unidad antes mencionada con los trabajos de reparación realizados, declarando conocer y aceptar el estado en el que se encuentra la misma. La unidad será retirada por el titular. En caso de no poder asistir, el responsable deberá acreditar la titularidad de la misma (fotocopia de DNI).
                                                <br>
                                                <b>VEHICULO RETIRADO EL:</b>

                                            </p>
                                            <br>

                                            <div class="col-xs-4">
                                                <p>22/02/2017</p>
                                                <p class="mt15"><b>FECHA</b></p>
                                            </div>

                                            <div class="col-xs-4">
                                                <br>
                                                <p class="mt15"><b>FIRMA Y ACLARACIÓN DEL CLIENTE </b></p>
                                            </div>

                                            <div class="col-xs-4">
                                                <br>
                                                <p class="mt15"><b>FIRMA Y ACLARACIÓN DEL RECEPCIONISTA</b></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>



                            </div>
                    </div>
                    <div class="box-footer clearfix">
                        <a href="{!! url(\Illuminate\Support\Facades\URL::previous()) !!}" class="btn btn-default">Volver</a>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-file-pdf-o"></i>
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        </div>
    </div>

    @include('template.js')

</body>
</html>