<!doctype html>
<html lang="en">

<head>
 <title>PDF</title>

 <style>
     *{
         padding:0;
         margin: 0;
         box-sizing: border-box;
         -moz-box-sizing: border-box;
         -webkit-box-sizing: border-box;
         font-size: 11px;
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
         font-size: 14px;
         line-height: 1.42857143;
         color: #333;
         background-color: #fff;
     }

     body {
         margin: 0;
     }

     html {
         font-size: 10px;
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
         margin-bottom: 20px;
     }

     table {
         background-color: transparent;
     }

     table {
         border-spacing: 0;
         border-collapse: collapse;
         border: 1px solid #ddd;
         margin: 10px 0;
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
         padding: 10px;
         line-height: 1.42857143;
         vertical-align: top;
         border-top: 1px solid #ddd;
     }


     th {
         text-align: left;
     }

     td, th {
         padding: 5px;
     }

     .no-border>tbody>tr>td, .no-border>tbody>tr>th, .no-border>tfoot>tr>td, .no-border>tfoot>tr>th, .no-border>thead>tr>td, .no-border>thead>tr>th{
         border: none !important;
     }

     .table-striped>thead>tr:nth-child(2) {
         background-color: #f9f9f9;
     }

     .colorWhite{
         color: white;
     }

     .bg-blue{
         background-color: #3498db;
     }

     .blue{
         color: #3498db;
     }

     #logo{
         width:150px;
     }


     .center-block{
         margin: auto;
     }

     .mb-40n{
         margin-bottom: -40px;
     }

     .mb-20{
         margin-bottom: 20px;
     }


     .text-danger{
         color: #a94442;
     }


     .mt100{
         margin-top: 100px;
     }

     .logo{
         font-size: 25pt;
         line-height: 110px;

     }


     .lh100{
         margin-top: 40px;
     }

     .fs15{
         font-size: 15pt;
     }

     .fs20
     {
         font-size: 20pt;
     }

     .bold{
         font-weight: bold;
     }

     .upper{
         text-transform: uppercase;
     }

     .ml20{
         margin-left: 20px;
     }

     .separador{
         width:100%;
         height:1px;
         background: #9a9c9a;
         margin: 10px 0;
     }

     .border{
         padding-top: 5px !important;
         padding-bottom: 5px !important;
     }

     .border-bottom{
         border-bottom: 1px solid rgb(190, 190, 190);

     }

     .bloque1{
         width:100%;
     }

     .col-xs-12 {
         width: 100%;
     }
     .col-xs-11 {
         width: 91.66666667%;
     }
     .col-xs-10 {
         width: 83.33333333%;
     }
     .col-xs-9 {
         width: 75%;
     }
     .col-xs-8 {
         width: 66.66666667%;
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
         margin-top: 10px !important;
         margin-bottom: 10px !important;;
     }

     .ml20{
         margin-left: 20px !important;
     }

     .mb-20{
         margin-bottom: 20px !important;
         margin-top: 20px !important;
     }

     .mb-10{
         margin-bottom:10px;
     }

    .cierre{
        position:absolute;
        bottom: 30px;
        margin-right: 20px;
        margin-left: 20px;
        border:1px solid #ddd;
    }




 </style>

</head>

<body>

        <div class="row">
            <table class="bloque1 no-border">
                <tr>
                    <td class="col-xs-4">

                     <span class="fs20 bold ">{!! $model->Brancheables->first()->Branches->Company->nombre_fantasia !!}</span>

                    </td>
                    <td class="col-xs-4 text-center">
                        <h1 class="logo bold">{!!  $model->letra !!}</h1>
                    </td>
                    <td class="col-xs-4">
                        <p class="upper fs15 bold"><strong>{!! $model->tipo !!} {!! $model->letra !!}</strong></p>
                        <p class="fs15 bold">Nro: {!! $model->numero !!}</p>
                        <p>Fecha {!! $model->fecha !!}</p>

                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="ml20">Razón Social : <strong>{!! $model->Brancheables->first()->Branches->Company->razon_social !!}</strong></p>
                        <p class="ml20">Domicilio Comercial : <strong>{!! $model->Brancheables->first()->Branches->Company->direccion !!}</strong></p>
                        <p class="ml20">Condición IVA: <strong>{!! $model->Brancheables->first()->Branches->Company->IvaConditions->name !!}</strong></p>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="datosHeader">
                            <p>C.U.I.T: <strong>{!! $model->Brancheables->first()->Branches->Company->cuit !!}</strong></p>
                            <p>ING. BRUTOS: <strong>{!! $model->Brancheables->first()->Branches->Company->ingresos_brutos !!} </strong> </p>
                            <p>INICIO ACTIVIDADES: <strong> {!! $model->Brancheables->first()->Branches->Company->inicio_actividades !!} </strong> </p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="separador"></div>

        <div class="row">

            <table class="bloque1 mb-20 table">
                <tr>
                    <th style="background-color: #dddddd;" colspan="10" class="text-center">Descripción</th>
                </tr>

                <tr>
                    <th>N°1</th>
                    <th>Unidad</th>
                    <th>Sucursal</th>
                    <th>Vendedor</th>
                    <th>Cliente</th>
                    <th>H. Nacional</th>
                    <th>H. Imp.</th>
                    <th>Arancel</th>
                    <th>Registro</th>
                    <th>Total</th>
                </tr>

                <tr>
                    <td>{!! dd($model) !!}</td>

                </tr>
            </table>

        </div>
</body>
</html>
