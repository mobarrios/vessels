<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orden de servicio</title>

    <style>
        *{
            padding:0;
            margin: 0;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            font-size: 8px;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: Helvetica,Arial,sans-serif;
            font-weight: 400;
            overflow-x: hidden;
            overflow-y: auto;
            width: 100%;
            margin: auto;

        }

        html, body {
            min-height: 100%;
        }

        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 8px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff;
        }

        body {
            margin: 0;
            margin-top:10px !important;
        }

        html {
            font-size: 8px;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        }


        .img-responsive{
            width: 100%;
        }


        .row {
            margin-right: 20px;
            margin-left: 20px;
        }


        /*Tablas*/
        .table {
            width: 100%;
            margin-bottom: 0;
        }

        table {
            background-color: transparent;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border: 1px solid #ddd;
            float: left;
        }

        table.no-border {
            border-spacing: 0;
            border-collapse: collapse;
            border: none;
        }

        .table>thead:first-child>tr:first-child>th {
            border-top: 0;
        }

        .table>thead>tr>th {
            border-bottom: 2px solid #f4f4f4;
        }

        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
            border-top: 1px solid #f4f4f4;
        }

        .table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd;
        }

        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 2px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }

        th {
            text-align: left;
        }

        td, th {
            padding: 0;
        }

        .no-border>tbody>tr>td, .no-border>tbody>tr>th, .no-border>tfoot>tr>td, .no-border>tfoot>tr>th, .no-border>thead>tr>td, .no-border>thead>tr>th{
            border: none !important;
        }

        .table-striped>thead>tr:nth-child(2) {
            background-color: #f9f9f9;
        }


        .col-xs-12 {
            width: 100%;
        }
        .col-xs-11 {
            width: 91.66666667%;
        }

        .col-xs-7 {
            width: 58.33333333%;
        }
        .col-xs-6 {
            width: 50%;
        }
        .col-xs-5 {
            width: 41.66666667%;
        }
        .col-xs-4 {
            width: 33.33333333%;
        }
        .col-xs-3 {
            width: 25%;
        }
        .col-xs-2 {
            width: 16.66666667%;
        }
        .col-xs-1 {
            width: 8.33333333%;
        }

        .text-center{
            text-align: center;
        }

        hr{
            margin-top: 2px !important;
            margin-bottom: 2px !important;;
        }





        .titulo{

            background: #4e4e4e;
            /*background: #aa1111;*/
            color: white;
            padding: 5px;
            margin-bottom: 2px;
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
        }

        .doble-check{
            position: absolute;
            right: 22px;
            top: 2px;
        }

        table,tr,td,th{
            border: 1px solid #bbbbbb;
        }

        table>thead{
            background-color: #ddd;
        }

        input[type='radio']{
            display: inline-block;
            position: relative;
            margin-left: -15px;
            margin-bottom:-10px;
        }

        input[type='radio']:after {
            width: 8px;
            height: 4px;
            border-radius: 30%;
            top: 0px;
            left: 0px;
            position: absolute;
            padding-top:4px;
            background-color: #f8faf8;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 1px solid black;
        }

        input[type='radio']:checked:after {
            width: 8px;
            height: 4px;
            border-radius: 30%;
            padding-top:4px;
            top: 0px;
            left: 0px;
            position: absolute;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 1px solid black;
        }


        input[type='checkbox']{
            display: inline-block;
            position: relative;
            margin-left: -15px;
            margin-bottom:-10px;
        }

        input[type='checkbox']:after {
            width: 8px;
            height: 4px;
            border-radius: 10%;
            top: 0px;
            left: 0px;
            position: absolute;
            padding-top:4px;
            background-color: #f8faf8;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 1px solid black;
        }

        input[type='checkbox']:checked:after {
            width: 8px;
            height: 4px;
            border-radius: 10%;
            padding-top:4px;
            line-height: 2px;
            padding-left: 2px;
            top: 0px;
            left: 0px;
            position: absolute;
            content: 'X';
            display: inline-block;
            visibility: visible;
            border: 1px solid black;
        }

        input[type='radio']:checked:after {
            background-color: #595b59;
        }


        .radio-green{
            margin-left: 0px !important;
            right: 25px;
        }


        input[type='radio'].radio-green:checked:after {
            background-color: #f73100;
            border: 1px solid #d72d00;
            position:absolute;
        }

        input[type='radio'].radio-red:checked:after {
            position:absolute;
            background-color: #29f100;
            border: 1px solid #1a9800;
        }

        label{
            display: inline-block;

        }

        .clearfix{
            clear: both;
        }

        .float-left{
            float: left;
        }
    </style>
</head>
<body>
        <div class="row">
            <!-- Default box -->

            <table class="col-xs-7 no-border table">
                <tr class="titulo">
                    <td colspan="4">Sucursal: {!! $model->brancheables->first()->branches->company->nombre_fantasia !!}</td>
                </tr>

                <tr>
                    <td><b>Dirección:</b></td>
                    <td> {!! $model->brancheables->first()->branches->company->direccion !!} </td>

                    <td><b>C.P: </b></td>
                    <td> - </td>
                </tr>

                <tr>
                    <td><b>Cuit: </b></td>
                    <td> {!! $model->brancheables->first()->branches->company->cuit !!} </td>

                    <td><b>Tel.: </b></td>
                    <td> {!! $model->brancheables->first()->branches->company->telefono !!} </td>
                </tr>

                <tr>
                    <td><b>Provincia: </b></td>
                    <td> Buenos Aires </td>

                    <td><b>E-mail.: </b></td>
                    <td> - </td>
                </tr>

                <tr>
                    <td><b>Localidad:</b> </td>
                    <td> - </td>
                </tr>

                <tr>
                    <td colspan="2"></td>
                </tr>

            </table>

            <table class="col-xs-5 table no-border" style="margin-left:10px;">
                <tr class="titulo">
                    <td colspan="2">Orden de servicio</td>
                </tr>

                <tr>
                    <td colspan="2"><b>N: {!! $model->id !!}</b></td>
                </tr>
            </table>

        </div>

        <div class="clearfix"></div>


        <div class="row">
            <table class="col-xs-7 no-border table">
                <tr class="titulo">
                    <td colspan="4">Datos del cliente</td>
                </tr>

                <tr>
                    <td><b>Nombre y Apellido:</b></td>
                    <td> {!! $model->clients->fullName !!} </td>

                    <td><b>Dirección: </b></td>
                    <td> {!! $model->clients->address !!} </td>
                </tr>

                <tr>
                    <td><b>Localidad: </b></td>
                    <td> {!! $model->clients->city !!} / {!! $model->clients->location !!}</td>

                    <td><b>E-mail: </b></td>
                    <td> {!! $model->clients->email !!} </td>
                </tr>

                <tr>
                    <td><b>Teléfono: </b></td>
                    <td> {!! $model->clients->phone1 !!} / {!! $model->clients->phone2 !!} </td>

                    <td colspan="2"></td>
                </tr>

            </table>

            <table class="col-xs-5 table no-border" style="margin-left:10px;">
                <tr class="titulo">
                    <td colspan="4">Datos del vehículo</td>
                </tr>

                <tr>
                    <td><b>Patente: </b></td>
                    <td></td>

                    <td><b>Modelo:</b></td>
                    <td></td>

                </tr>
                <tr>
                    <td><b>Chasis:</b></td>
                    <td></td>
                </tr>
            </table>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-xs-12 mt15">
                <div class="col-xs-3 float-left">
                    <img src="images/moto1.png" alt="" style="max-width:100%;position:absolute;top:320px;left:20px;">
                </div>
                <div class="col-xs-3 float-left">
                    <img src="images/moto2.png" alt="" style="max-width:100%;position:absolute;top:320px;left:220px;">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-xs-12">
                <div class="titulo">
                    <b>Estado general del vehículo</b>
                </div>

                <div class="col-xs-1  float-left" style="margin: 5px;">
                    <b>Kilometraje / Horas:</b>
                    <div style="margin-top:10px;width:50px;height:30px;background: white;border:1px solid #c4c4c4;"></div>
                </div>


                <div class="col-xs-2  float-left" style="margin: 5px;">
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


                <div class="col-xs-2  float-left" style="margin: 5px;">
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


                <div class="col-xs-2 float-left" style="margin: 5px;">
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


                <div class="col-xs-2 float-left" style="margin: 5px;">
                    <div class="border2 h154" style="position: relative">
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
                        <img src="images/aceite.png" alt="" style="position: absolute;left: 55px;margin: auto;top:35px; height:50px;">
                    </div>
                </div>



                <div class="col-xs-2 float-left " style="margin: 5px;">
                    <div>
                        <label for="kit_herramientas">
                            Kit de herramientas
                            {!! Form::checkbox('kit_herramientas',1,false,['id' => 'kit_herramientas','style' => 'margin-left: 10px;']) !!}
                        </label>
                    </div>
                    <div>
                        <label for="casco">
                            Casco
                            {!! Form::checkbox('casco',1,true,['id' => 'casco','style' => 'margin-left: 10px;']) !!}
                        </label>
                    </div>
                    <div>
                        <label for="moto_sin_averias">
                            Motocicleta sin averias
                            {!! Form::checkbox('moto_sin_averias',1,false,['id' => 'moto_sin_averias','style' => 'margin-left: 10px;']) !!}
                        </label>
                    </div>
                </div>

            </div>
        </div>


        <div class="clearfix"></div>

        <br><br>


        <div class="row">
            <table class="col-xs-12 table no-border">
                <tr>
                    <td class="titulo">
                        <b>Observaciones</b>
                    </td>
                </tr>

                <tr>
                    <td>
                        {!! Form::textarea('observaciones',null,['class' => 'form-control','style' => 'min-height: 20px']) !!}
                    </td>
                </tr>
            </table>
        </div>


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-xs-12">
                <div class="titulo">
                    <b>INSPECCIÓN DE 24 ITEMS (CON LA PRESENCIA DEL CLIENTE)</b>
                </div>

                <div class="col-xs-1 float-left" style="margin-left:300px;">
                    <input type="radio" class="radio-red" checked> <b style="vertical-align: top; line-height: 25px; margin-left: 10px ;position:relative;">OK</b>
                </div>
                <div class="col-xs-4 float-left">
                    <input type="radio" class="radio-green" checked><b style="vertical-align: top; line-height: 25px;; margin-left: 20px;position:relative;">Recomendación de reemplazo</b>
                </div>

                <div class="clearfix"></div>

                <div class="col-xs-6 float-left">
                    <div class="relative">
                        <label for="luces_tablero" class="col-xs-11">
                            Luces tablero (Iluminación, neutro, etc)
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('luces_tablero',1,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('luces_tablero',0,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>


                    <div class="relative">
                        <label for="bocina" class="col-xs-11">
                            Bocina
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('bocina',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('bocina',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label for="giros" class="col-xs-11">
                            Giros
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('giros',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('giros',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Puños
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('punios',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('punios',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Luz Baja / Alta
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('luz_baja_alta',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('luz_baja_alta',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Palanca de embrague
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('palanca_de_embrague',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('palanca_de_embrague',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Cable de embrague
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('cable_de_embrague',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('cable_de_embrague',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Palanca de freno
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('palanca_de_freno',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('palanca_de_freno',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Cable de freno
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('cable_de_freno',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('cable_de_freno',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <div class="col-xs-5">
                            Luz de freno (Palanca:
                        </div>

                        <div class="col-xs-1" style="position:absolute;left:100px;top:2px;">
                            {!! Form::radio('luz_freno',0,false,['class' => 'ml5']) !!}
                        </div>

                        <div class="col-xs-4" style="position:absolute;left:100px;top:0;">
                            / Pedal:
                        </div>

                        <div class="col-xs-1"style="position:absolute;left:145px;top:2px;">
                            {!! Form::radio('luz_freno',1,false,['class' => 'ml5']) !!}
                        </div>
                        <div class="col-xs-1"style="position:absolute;left:144px;top:0;">
                            )
                        </div>

                        <div class="doble-check col-xs-1">
                            {!! Form::radio('luz_freno_opcion',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('luz_freno_opcion',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Cable de acelerador
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('cable_de_acelerador',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('cable_de_acelerador',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Espejos retrovisores
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('espejos_retrovisores',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('espejos_retrovisores',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>
                </div>


                <div class="col-xs-6 float-left mt05">
                    <div class="relative">
                        <label for="luces_tablero" class="col-xs-11">
                            Amortiguadores delanteros
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('amortiguadores_delanteros',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('amortiguadores_delanteros',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label for="bocina" class="col-xs-11">
                            Cinta o pastilla freno delantero
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('cinta_o_pastilla_freno_delantero',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('cinta_o_pastilla_freno_delantero',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label for="giros" class="col-xs-11">
                            Disco/s freno delantero
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('disco_freno_delantero',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('disco_freno_delantero',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Neumático delantero
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('neumatico_delantero',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('neumatico_delantero',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Pedal freno trasero
                        </label>
                        <div class="doble-check  col-xs-1">
                            {!! Form::radio('pedal_freno_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('pedal_freno_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Amortiguadores traseros
                        </label>
                        <div class="doble-check  col-xs-1">
                            {!! Form::radio('amortiguadores_traseros',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('amortiguadores_traseros',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Cinta o pastilla freno trasero
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('cinta_o_pastilla_freno_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('cinta_o_pastilla_freno_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Disco/s freno trasero
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('disco_freno_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('disco_freno_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Neumático trasero
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('neumatico_trasero',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('neumatico_trasero',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Sistema de transmisión
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('sistema_de_transmision',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('sistema_de_transmision',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Pedal de cambios
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('pedal_de_cambios',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('pedal_de_cambios',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>

                    <div class="relative">
                        <label class="col-xs-11">
                            Sostén lateral /Caballete/ Pedalines
                        </label>
                        <div class="doble-check col-xs-1">
                            {!! Form::radio('sosten_lateral_caballete_pedalines',0,false,['class' => 'ml5 radio-red']) !!}
                            {!! Form::radio('sosten_lateral_caballete_pedalines',1,false,['class' => 'ml5 radio-green']) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="clearfix"></div>

        <div class="row">
            <table class="col-xs-12 table mt15">
                <tr class="titulo">
                    <td colspan="6"></td>
                </tr>

                <tr style="background: #ddd;">
                    <th>ITEM</th>
                    <th colspan="2">DESCRIPCIÓN DEL PEDIDO DEL CLIENTE</th>
                    <th colspan="3">FECHA DE COMPROMISO DE ENTREGA: <span style="display:block;float:right;margin-top:-5px;width:70px;height:16px;background: white;border:1px solid #c4c4c4;"></span></th>
                </tr>

                <tr>
                    <td><b>Localidad: </b></td>
                    <td colspan="5">

                    </td>
                </tr>

            </table>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-xs-12">
                <p style="font-size: 7px; margin-top:5px;">
                    Me declaro en conocimiento de la condicion en la que se encuentra la unidad, afirmando que los daños en la carrocería detectados en el momento de la recepción, son los indicados en la figura. Autorizo a realizar todos los trabajos descriptos a mi exclusiva cuenta y cargo, y a efectuar todas las pruebas necesarias (incluídas en ruta) de la unidad.
                </p>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <table class="col-xs-12 table no-border">
                <tr>
                    <td colspan="2">22/02/2017</td>

                    <td colspan="2">

                    </td>

                    <td colspan="2">

                    </td>
                </tr>

                <tr>
                    <th class="mt05" colspan="2"><b>FECHA</b></th>
                    <th class="mt05" colspan="2"><b>FIRMA Y ACLARACIÓN DEL CLIENTE </b></th>
                    <th class="mt05" colspan="2"><b>FIRMA Y ACLARACIÓN DEL RECEPCIONISTA</b></th>
                </tr>

            </table>

        </div>

        <div class="clearfix"></div>


        <div class="row">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th class="col-xs-1">ITEM</th>
                        <th>DIAGNÓSTICO Y REPARACIÓN REALIZADA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-xs-3" style="height:7px;">

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td class="col-xs-3" style="height:7px;">

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td class="col-xs-3" style="height:7px;">

                        </td>
                        <td>

                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

        <div class="clearfix"></div>


        <div class="row">

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
                        <td class="col-xs-1" style="height:7px;"></td>
                        <td style="height:7px;"></td>
                        <td style="height:7px;"></td>
                    </tr>

                    <tr>
                        <td class="col-xs-1" style="height:7px;"></td>
                        <td style="height:7px;"></td>
                        <td style="height:7px;"></td>
                    </tr>

                    <tr>
                        <td class="col-xs-1" style="height:7px;"></td>
                        <td style="height:7px;"></td>
                        <td style="height:7px;"></td>
                    </tr>


                    <tr>
                        <td colspan="3" >TIEMPO MANO DE OBRA:</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-xs-12">
                <p style="font-size: 7px; margin-top:5px;">
                    Dejo expresa constancia que luego de haber sido probada, retiro la unidad antes mencionada con los trabajos de reparación realizados, declarando conocer y aceptar el estado en el que se encuentra la misma. La unidad será retirada por el titular. En caso de no poder asistir, el responsable deberá acreditar la titularidad de la misma (fotocopia de DNI).
                    <br>
                    <b>VEHICULO RETIRADO EL: </b>22/02/2017
                </p>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <table class="col-xs-12 table no-border mt15">
                <tr>

                    <td colspan="2">

                    </td>

                    <td colspan="2">

                    </td>

                    <td colspan="2">

                    </td>
                </tr>

                <tr>
                    <th colspan="2"></th>
                    <th colspan="2"><b>FIRMA Y ACLARACIÓN DEL CLIENTE </b></th>
                    <th colspan="2"><b>FIRMA Y ACLARACIÓN DEL RECEPCIONISTA</b></th>
                </tr>

            </table>

        </div>
</body>
</html>