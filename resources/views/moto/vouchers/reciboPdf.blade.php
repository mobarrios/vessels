<!doctype html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>PDF</title>

 <link rel="stylesheet" href="vendors/LTE/bootstrap/css/bootstrap.css">

 <style>
   *{
      font-size: 60%;
       line-height: 61%;
   }

  .margin-0{
     margin: 0 !important;
  }


  body{
     margin: 0 !important;
     padding: 5px !important;
     border-radius: 5px;
     border: 1px solid rgb(0,0,0);
   clear: both;
  }

  .upper{
      text-transform: uppercase;
  }

  .logo{
     font-size: 30px;
     font-weight: bold;
     border: 2px solid rgb(0,0,0);
     display: inline-block;
     text-align: center;
     width:30px;
     border-radius: 5px;
     padding: 5px;
     margin:auto;
      line-height:30px;
  }

   .contenedor-dato-cliente{
       font-size: 10px !important;
       line-height: 13px !important;
       padding-botom: 5px !important;
   }

  .datosHeader{
     line-height: 2px !important;
     font-size: 50% !important;

  }

  .separador{
     float:none !important;
     clear: both  !important;
  }

  .border{
     padding-top: 5px !important;
     padding-bottom: 5px !important;
  }

  .border-bottom{
     border-bottom: 1px solid rgb(190, 190, 190);

  }


  .datos-cliente .border{
     font-size: 12px !important;
  }

  .leyendaTabla{
     font-size: 55% !important;
     line-height: 61% !important;
     text-align: center;
  }

     .separador.border span{
         line-height: 20px !important;
     }

     #barcode{
         position: absolute;
         top: 80px;
         left: 35%;
         display: block;
     }

 </style>

</head>

<body class="padding-0 margin-0">
    <div id="barcode">
        <p class="text-center">{!!  DNS1D::getBarcodeHTML(1, "EAN13") !!}</p>
    </div>

    <div>
         <div class="col-xs-2 text-center">
             <div>
                 <img src="images/branches/logo.png" alt="Logo" class="img-responsive">
             </div>
             <div class="datosHeader">
                 <p>Hipólito Yrigoyen 1467</p>
                 <p>José C. Paz</p>
                 <p>(02320) 433072</p>
             </div>
         </div>

         <div class="col-xs-2 col-xs-offset-2">
             <h1 class="logo text-right">X</h1>


         </div>

         <div class="col-xs-4 text-center pull-right">
             <p class="upper">Recibo provisorio</p>
             <p class="datosHeader">No válido como factura</p>
             <p>N: {!! $model->numero !!}</p>
             <p>Fecha {!! $model->fecha !!}</p>
             <br>
             <div class="datosHeader">
                <p>C.U.I.T: 33-70964580-9</p>
                <p>ING. BRUTOS: 33-70964580-9</p>
                <p>INICIO ACTIVIDADES: 01-06-06</p>
             </div>
         </div>


    </div>

    <div class="separador border-bottom"></div>

    <div class="datos-cliente">


      <div class="col-xs-4 border">
          <div class="contenedor-dato-cliente">
             <span class="upper"><b>Nombre: </b></span> <span class="upper text-muted">{!! $client->fullname !!}</span>
          </div>
      </div>

      <div class="separador"></div>


          <div class="col-xs-4">
              <div class="contenedor-dato-cliente">
                 <span class="upper"><b>Domicilio: </b></span> <span class="upper text-muted">{!! $client->address !!}</span>
              </div>
          </div>

         <div class="col-xs-4">
              <div class="contenedor-dato-cliente">
                 <span class="upper"><b>Localidad: </b></span> <span class="upper text-muted">{!! $client->city !!}</span>
              </div>
          </div>

          <div class="col-xs-4">
              <div class="contenedor-dato-cliente">
                 <span class="upper"><b>Teléfono: </b></span> <span class="upper text-muted">{!! $client->phone !!}</span>
              </div>
          </div>


      <div class="col-xs-12 separador border"></div>

     <div class="separador border">

         <div class="col-xs-4">
            <div class="contenedor-dato-cliente">
               <span class="upper"><b>CUIT: </b></span> <span class="upper text-muted">{!! $client->dni !!}</span>
            </div>
         </div>

         <div class="col-xs-4">
            <div class="contenedor-dato-cliente">
               <span class="upper"><b>iva: </b></span> <span class="upper text-muted">Cons. Final</span>
            </div>
         </div>

         <div class="col-xs-4">
            <div class="contenedor-dato-cliente">
               <span class="upper"><b>N° venta: </b></span> <span class="upper text-muted">{!! $model->Sales->first()->id !!}</span>
            </div>
         </div>
    </div>

    <div class="col-xs-12 separador border"></div>
     <br>
    <div class="col-xs-12">
         <table class="table table-responsive">
             <tbody>
                 <tr>
                    <th>Fecha</th>
                    <th>Medio</th>
                    <th>Monto</th>
                    <th>Descripción</th>
                 </tr>
                 @foreach($model->Payments as $payments)
                     <tr>
                         <td>{!! $payments->date !!}</td>
                         <td>{!! $payments->PayMethods->name !!}</td>
                         <td>{!! $payments->amount !!}</td>
                         <td class="descripcion">
                             {!! $payments->banks ? '<p>Banco: '.$payments->banks->name.'</p>' : '' !!}
                             {!! $payments->check_date ? 'Fecha cheque: '.$payments->check_date.'</p>' : '' !!}
                             {!! $payments->check_pay_date ? 'Fecha de cobro: '.$payments->check_pay_date.'</p>' : '' !!}
                             {!! $payments->transf_date ? 'Fecha de transferencia: '.$payments->transf_date.'</p>' : '' !!}
                             {!! $payments->term ? 'Plazo: '.$payments->term.'</p>' : '' !!}
                             {!! $payments->Financials ? 'Financiera: '.$payments->Financials->name.'</p>' : '' !!}

                         </td>
                     </tr>
                 @endforeach
             </tbody>

             <tfoot>
                 <tr>
                     <td colspan="4"><p class="text-center upper">Recibí conforme la suma total de <strong>${!! $model->importe_total !!}</strong></p></td>
                 </tr>

                 <tr>
                     <td colspan="4">
                         <p class="leyendaTabla">La mercadería viaja por cuenta y orden del destinatario haciendose responsable civil y criminalmente a partir de la fecha por cualquier accidente, daño o perjuicio que pudiera ocasionar el rodado referido.</p>
                     </td>
                 </tr>

             </tfoot>
         </table>
    </div>


    </div>

</body>
</html>
