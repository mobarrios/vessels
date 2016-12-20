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

        }

        table {
            border-collapse: collapse;
        }

        body{
            border-top: 5px solid #eb1f37;
        }

        header{
            border-top: 30px solid #0187cd;
            border-bottom: 3px solid #ddd;
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
            margin-top: -30px;
        }

        .inline{
            display: inline-block !important;
            width: 351px;
            margin: 0 3px;
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
        }

        .container{
            color: #4f4f4f;
        }

        .container b{
            color: rgb(0,0,0);
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
                    <h2 align="center">PRESUPUESTO</h2>
                </td>
                <th class="fecha">
                    <span>19</span><span>12</span><span>2016</span>
                </th>
            </tr>
        </table>

    </header>

    <div class="container">
        <div>
            <p><b>Producto: </b> T110 Crypton Base sin Disco</p>
        </div>

        <div class="inline">
            <p><b>Marca: </b> Yamaha</p>
        </div>

        <div class="inline">
            <p><b>Modelo: </b> T110 Crypton Base</p>
        </div>

        <div class="espacio"></div>

        <div class="inline">
            <p><b>Precio de lista: </b> $16000</p>
        </div>

        <div class="inline">
            <p><b>Contado: </b> $14500</p>
        </div>

        <hr>

        <div>
            <p><b>Producto: </b> T110 Crypton Base sin Disco</p>
        </div>

        <div class="inline">
            <p><b>Marca: </b> Yamaha</p>
        </div>

        <div class="inline">
            <p><b>Modelo: </b> T110 Crypton Base</p>
        </div>

        <div class="espacio"></div>

        <div class="inline">
            <p><b>Precio de lista: </b> $16000</p>
        </div>

        <div class="inline">
            <p><b>Contado: </b> $14500</p>
        </div>

        <hr>

        <div class="inline">
            <p><b>Alarma: </b> $14500</p>
        </div>


        <div class="inline">
            <p><b>Alta de seguro: </b> $16000</p>
        </div>

        <div class="espacio"></div>

        <div class="inline">
            <p><b>Seguro RC: </b> $16000</p>
        </div>

        <div class="inline">
            <p><b>Seguro RC + Robo: </b> $14500</p>
        </div>

        <hr>


        <div class="inline">
            <p><b>Patentamiento: </b> $14500</p>
        </div>

        <div class="inline">
            <p><b>Formulario: </b> $16000</p>
        </div>


        <div class="footer">

            <div class="inline">
                <p><b>Total Final: </b> $161000</p>
            </div>

            <div class="inline">
                <p><b>Atendido por:</b> Manuel Barrios</p>
            </div>

        </div>


    </div>
</body>
</html>