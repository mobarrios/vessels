<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>


    <style>
        * {
            font-size: 50%;
            line-height: 61%;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 400;
            overflow-x: hidden;
            overflow-y: auto;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            /*font-size: 11px;*/
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 400;
            overflow-x: hidden;
            overflow-y: auto;
        }

        html, body {
            min-height: 100%;
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff;
        }

        html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .margin-0 {
            margin: 0 !important;
        }

        .upper {
            text-transform: uppercase;
        }

        .logo {
            font-size: 30px;
            font-weight: bold;
            border: 2px solid rgb(0, 0, 0);
            display: inline-block;
            text-align: center;
            width: 30px;
            border-radius: 5px;
            padding: 5px;
            margin: auto;
            line-height: 30px;
        }

        .contenedor-dato-cliente {
            font-size: 8px !important;
            line-height: 8px !important;
            padding-bottom: 5px !important;
            padding-top: 5px !important;
        }

        .datosHeader {
            line-height: 2px !important;
            font-size: 50% !important;

        }

        .separador {
            float: none !important;
            clear: both !important;
        }

        .border {
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }

        .border-bottom {
            border-bottom: 1px solid rgb(190, 190, 190);

        }

        .datos-cliente {
            font-size: 12px !important;
            border: 1px solid rgb(190, 190, 190);
            padding: 3px;
        }

        .leyendaTabla {
            font-size: 55%;
            line-height: 59%;
            text-align: center;
        }

        .separador.border span {
            line-height: 20px !important;
        }

        .img-responsive {
            width: 100%;
        }

        .font21 {
            font-size: 18px;
        }

        .col-xs-12 {
            width: 100%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            display: block;
        }

        .col-xs-6 {
            width: 50%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-xs-10 {
            width: 66.66%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            display: block;
        }

        .col-xs-4 {
            width: 25%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            display: block;
        }

        .col-xs-3 {
            width: 33.33%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            display: block;
        }

        .col-xs-8 {
            width: 75%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            display: block;
        }

        .col-xs-offset-1 {
            margin-left: 8.33%;
        }

        .col-xs-offset-2 {
            margin-left: 17%;
        }

        .text-center {
            text-align: center;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        /*Tablas*/
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        table {
            background-color: transparent;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .table > thead:first-child > tr:first-child > th {
            border-top: 0;
        }

        .table > thead > tr > th {
            border-bottom: 2px solid #f4f4f4;
        }

        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            border-top: 1px solid #f4f4f4;
        }

        .table > thead > tr > th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd;
        }

        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
            padding: 8px;
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

        .table-striped > thead > tr:nth-child(2) {
            background-color: #f9f9f9;
        }

        .colorWhite {
            color: white;
        }

        .bg-blue {
            background-color: #3498db;
        }

        .blue {
            color: #3498db;
        }

        #logo {
            width: 150px;
        }

        .center-vertical {
            margin-top: 50px;
            height: 50px;

        }

        .center-block {
            margin: auto;
        }

        .mb-40n {
            margin-bottom: -40px;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .pull-right {
            float: right;
        }

        .text-danger {
            color: #a94442;
        }

        .border {
            border: 1px solid #ddd;
        }

        .footer {
            width: 110px;
            margin-top: -21px;
            padding: 5px;
            float: right;
        }

        .mini-text {
            font-size: 5px;
            line-height: 3px;
        }


    </style>

</head>

<body>

<div style="margin-bottom: 120px !important;margin-top: -30px;">
    <div class="col-xs-4 text-center">
        <div>
            <img src="images/branches/logo.png" alt="Logo" class="img-responsive">
        </div>
        <div class="datosHeader">
            <p>Hipólito Yrigoyen 1467</p>
            <p>José C. Paz</p>
            <p>(02320) 433072</p>
        </div>
    </div>

    <div class="col-xs-2 text-center">
        <h1 class="logo">X</h1>
    </div>

    <div class="text-center col-xs-4" style="float:right;">
        <p class="upper">Nota de entrega</p>

        <p>Fecha {{$date}}</p>
        <br>
        <div class="datosHeader">
            <p>C.U.I.T: 33-70964580-9</p>
            <p>ING. BRUTOS: 33-70964580-9</p>
            <p>INICIO ACTIVIDADES: 01-06-06</p>
        </div>
    </div>


</div>

<div class="col-xs-12 separador"></div>

<div class="datos-cliente" style="margin-top:50px">

    <div class="contenedor-dato-cliente">
        <span class="upper"><b>Destino: </b></span> <span class="upper text-muted">{{$destino->name}}</span>
    </div>

    <div class="separador"></div>

    <div class="contenedor-dato-cliente">
        <span class="upper"><b>Dirección: </b></span> <span class="upper text-muted">{{$destino->address}}</span>
    </div>

    <div class="separador"></div>

    <div class="contenedor-dato-cliente">
        <span class="upper"><b>Localidad: </b></span> <span class="upper text-muted">{{$destino->city}}</span>
    </div>

</div>

<div class="col-xs-12 separador"></div>
<br>

<table class="table table-responsive">
    <tbody>
    <tr>
        <th>Pedido</th>
        <th>Cod.</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Motor</th>
        <th>Cuadro</th>
        <th>Certificado</th>
        <th colspan="2">Origen</th>
    </tr>

    @foreach($models as $model)
        <tr>
            <td>{{$model->my_request_id}}</td>
            <td>{{$model->items_id}}</td>
            <td>{{$model->Items->Models->Brands->name}}</td>
            <td>{{$model->Items->Models->name}}</td>
            <td>{{$model->Items->Colors->name}}</td>
            <td>{{$model->Items->n_motor}}</td>
            <td>{{$model->Items->n_cuadro}}</td>
            <td>{{$model->Items->Certificates->number or ''}}</td>
            <td class="mini-text">{{$model->Items->Brancheables->first()->Branches->name}}</td>
            <td style="width:8px !important; float:right;">{!! Form::checkbox('acc_origen',null,0, ['class' => 'checkbox']) !!}</td>
        </tr>
    @endforeach
    </tbody>


</table>

<div class="col-xs-12 separador" style="height: 40px !important;"></div>

<div class="row">

    <div class="col-xs-4">
        <p class="text-left">Firma:</p>
    </div>

    <div class="col-xs-4 col-xs-offset-2">
        <p class="text-left">Aclaración:</p>
    </div>

    <div class="col-xs-3 pull-right">
        <p class="text-right"><strong>Total:</strong>5 unidades</p>
    </div>

</div>


</body>
</html>
