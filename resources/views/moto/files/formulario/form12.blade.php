<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario 12</title>

    <style>

        *{
            padding: 0;
            margin: 0;
            text-transform: uppercase;
        }

        #contenedor{
            height: 29cm;
            position: relative;
            top:0;
            left:0;
        }

        p{
            position: absolute;
        }


        #chapa{
            top: 4.6cm;
            left: 8cm;
        }

        #marca{
            top: 7.1cm;
            left: 6.2cm;
        }

        #tipo{
            top: 7.8cm;
            left: 5.8cm;
        }


        #modelo{
            top: 8.5cm;
            left: 6.5cm;
        }

        #marca_motor{
            top: 9.1cm;
            left: 7.8cm;
        }

        #n_motor{
            top: 9.8cm;
            left: 7.5cm;
        }

        #marca_cuadro{
            top: 10.5cm;
            left: 8.5cm;
        }

        #n_cuadro{
            top: 11.2cm;
            left: 7.5cm;
        }


        #observaciones{
            top: 20.2cm;
            left: 4cm;
            width: 16cm;
            font-size: 7pt !important;
        }







        #apellido_nombre{
            top: 24.4cm;
            left: 9.3cm;
        }

        #dni{
            top: 25cm;
            left: 10.3cm;
        }

        #calle{
            top: 25.7cm;
            left: 7.5cm;
        }

        #numero{
            top: 25.7cm;
            left: 13cm;
        }

        #localidad{
            top: 25.7cm;
            left: 16cm;
        }



    </style>

</head>
<body>
    <div id="contenedor">
        @foreach($sales->SalesItems as $salesItem)
            <p id="chapa">{!! $salesItem->Items->n_chapa !!}</p>

            <p id="marca">
                {!! $salesItem->Items->models->brands->name !!}
            </p>

            <p id="tipo">
                Moto
            </p>

            <p id="modelo">
                {!! $salesItem->Items->models->name !!}
            </p>

            <p id="marca_motor">
                {!! $salesItem->Items->models->name !!}
            </p>

            <p id="n_motor">
                {!! $salesItem->Items->n_motor !!}
            </p>

            <p id="marca_cuadro">
                {!! $salesItem->Items->models->name !!}
            </p>

            <p id="n_cuadro">
                {!! $salesItem->Items->n_chapa !!}
            </p>
        @endforeach

        <p id="observaciones">
            {!! $models->observaciones !!}
        </p>


        <p id="apellido_nombre">
            {!! $sales->clients->fullName !!}
        </p>

        <p id="dni">
            {!! $sales->clients->dni !!}
        </p>

        <p id="calle">
            {!! $sales->clients->address !!}
        </p>

        <p id="localidad">
            {!! $sales->clients->location !!}
        </p>

    </div>


</body>
</html>