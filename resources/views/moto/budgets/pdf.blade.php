<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>

    <style>
        *{
            font-family: Arial, Verdana, sans-serif;
            margin: 0 !important;
            padding: 0 !important;
            position: relative;
            font-size: 80%;
        }

        table {
            border-collapse: collapse;
        }

        body{
            border-top: 5px solid #eb1f37;

        }


        header{
            border-top: 30px solid #0187cd;
            /*border-bottom: 3px solid #ddd;*/
            display: inline-block;
            height: 140px;
        }

        header *{
            height: 50px !important;
        }

        header tr td:first-child{
            width: 200px !important;
            height: auto !important;
        }

        header tr td:first-child img{
            height: auto !important;
        }

        header td:nth-child(2){
            vertical-align: middle;
            margin-top: 20px;
        }


        .fecha span{
            border: 1px solid #bcbcbc;
            color: #4f4f4f;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            width: 40px;
            height: 30px;
            display:inline-block;
            vertical-align: middle;
            font-size: 15px;
            line-height: 60px;
            margin:0 3px;
        }

        header table{
            margin-top: -50px !important;
            height: 50px !important;
            padding: 25px !important;
        }

        header table tr{
            margin-top: -80px;
        }

        .inline{
            display: inline-block !important;
            margin: 0 3px;
            width: 200px;
        }

        .espacio{
            width: 100%;
            height: 1px;
        }

        .footer{
            border-bottom: 5px solid #eb1f37;
            background-color: #0187cd;
            color: rgb(255,255,255) !important;
            text-align: center;
            position: absolute;
            bottom:0;
            left:0;
            width: 100%;
            padding: 10px !important;
        }

        .container{
            color: #4f4f4f;
        }

        .container b{
            color: rgb(0,0,0);
        }

        .padding{
            display: block;
            width:100%;
            height: 1px;
            border-top: 1px dashed #4f4f4f;
        }

        .container>div{
            padding: 8px 25px !important;
        }

        .col-4{
            width: 120px;
            display: inline-block !important;
            margin: 0 3px !important;
        }

        .col-4 p{
            margin: -20px 0!important;
            display: inline-block;
        }

        .inline p{
            margin: -5px 0!important;
            display: inline-block;
        }

    </style>

</head>
<body>
    <header>
        <table width="100%">
            <tr>
                <td>
                    <img src="images/branches/logo.png" alt="Logo" width="200">
                </td>
                <td>
                    <h2 align="center">PRESUPUESTO #  {!!  $model->id !!}</h2>
                </td>
                <th class="fecha">
                    <span>{!! date('d',strtotime($model->date)) !!}</span><span>{!! date('m',strtotime($model->date)) !!}</span><span>{!! date('Y',strtotime($model->date)) !!}</span>
                </th>
            </tr>
        </table>

    </header>

    <div class="container">
        <div class="col-4">
            <p><b>Cliente: </b> {!! $model->Clients->fullName !!}</p>
        </div>

        <div class="col-4">
            <p><b>DNI: </b> {!! $model->Clients->dni !!}</p>
        </div>

        <div class="col-4">
            <p><b>Sexo: </b> {!! $model->Clients->sexo !!}</p>
        </div>

        <div class="espacio"></div>

        <div class="col-4">
            <p><b>Mail: </b> {!! $model->Clients->email !!}</p>
        </div>

        <div class="col-4">
            <p><b>Nacionalidad: </b> {!! $model->Clients->nacionality !!}</p>
        </div>

        <div class="col-4">
            <p><b>Teléfono: </b> {!! $model->Clients->phone1 !!}</p>
        </div>

        <div class="espacio"></div>

        <div class="inline">
            <p><b>Dirección: </b> {!! $model->Clients->address !!}</p>
        </div>

        <div class="inline">
            <p><b>Ciudad: </b> {!! $model->Clients->localidad !!}</p>
        </div>

        <hr>

        @foreach($model->allItems as $item)
            <div>
                <p><b>Producto: </b> {!! $item->name !!}</p>
            </div>

            <div class="inline">
                <p><b>Marca: </b> {!! $item->brands->name !!}</p>
            </div>

            <div class="espacio"></div>

            <div class="inline">
                <p><b>Precio de lista: </b> ${!! $item->activeListPrice->price_list or '0' !!}</p>
            </div>

            <div class="inline">
                <p><b>Contado: </b> ${!! $item->activeListPrice->price_net or '0' !!}</p>
            </div>

            <div class="espacio"></div>
            <div class="inline">
                <p><b>Patentamiento: </b> ${!! $item->patentamiento or '0' !!}</p></p>
            </div>

            <div class="inline">
                <p><b>Pack Service: </b> ${!! $item->pack_service or '0' !!}</p></p>
            </div>

        @endforeach

       <span class="padding"></span>


        <div class="inline">
            <p><b>Seguro: </b> ${!! $model->seguro or '0' !!}</p>
        </div>

        <div class="espacio"></div>

        <div class="inline">
            <p><b>Flete: </b> ${!! $model->flete or '0' !!}</p>
        </div>

        <div class="inline">
            <p><b>Formularios: </b> ${!! $model->formularios or '0' !!}</p>
        </div>

        <span class="padding"></span>

        <div class="inline">
            {!!  DNS1D::getBarcodeHTML($model->id, "EAN13") !!}
        </div>

        <div class="inline">
            {!!  DNS2D::getBarcodeHTML($model->id, "QRCODE") !!}
        </div>

        <div class="footer">

            <div class="inline">
                <p><b>Total Final: </b> ${!! $model->total or '0' !!}</p>
            </div>

            <div class="inline">
                <p><b>Anticipo: </b> ${!! $model->anticipo or '0' !!}</p>
            </div>
            <div class="espacio"></div>
            <div class="inline">
                <p><b>A financiar: </b> ${!! $model->a_financiar or '0' !!}</p>
            </div>

            <div class="inline">
                <p><b>Atendido por:</b> Manuel Barrios</p>
            </div>




        </div>


    </div>
</body>
</html>