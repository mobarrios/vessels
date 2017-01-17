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
      font-size: 70%;
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
     border-bottom: 1px solid rgb(0,0,0);
     padding-top: 5px !important;
     padding-bottom: 5px !important;
  }



  .datos-cliente .border{
     font-size: 12px !important;
  }

  .leyendaTabla{
     font-size: 55%;
     line-height: 57%;
     text-align: center;
  }

 </style>

</head>

<body class="padding-0 margin-0">

    <div>
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
             <h1 class="logo">R</h1>
         </div>

         <div class="col-xs-4 text-center">
             <p class="upper">remito</p>
             <p>N: 00001</p>
             <p>Fecha 16/01/2017</p>
             <br>
             <div class="datosHeader">
                <p>C.U.I.T: 33-70964580-9</p>
                <p>ING. BRUTOS: 33-70964580-9</p>
                <p>INICIO ACTIVIDADES: 01-06-06</p>
             </div>
         </div>


    </div>

    <div class="separador border"></div>

    <div class="datos-cliente">


      <div class="col-xs-12 border">
          <div class="contenedor-dato-cliente">
             <span class="upper"><b>Nombre: </b></span> <span class="upper text-muted">Barrios Osvaldo Manuel</span>
          </div>
      </div>

      <div class="separador"></div>

      <div class="col-xs-12 border">
          <div class="contenedor-dato-cliente">
             <span class="upper"><b>Domicilio: </b></span> <span class="upper text-muted">Chacabuco 215</span>
          </div>
      </div>

      <div class="separador border">

         <div class="col-xs-6">
              <div class="contenedor-dato-cliente">
                 <span class="upper"><b>Localidad: </b></span> <span class="upper text-muted">Hurlingham</span>
              </div>
          </div>

          <div class="col-xs-6">
              <div class="contenedor-dato-cliente">
                 <span class="upper"><b>Teléfono: </b></span> <span class="upper text-muted">1102154455</span>
              </div>
          </div>
      </div>

      <div class="col-xs-12 separador border"></div>

     <div class="separador border">

         <div class="col-xs-6">
            <div class="contenedor-dato-cliente">
               <span class="upper"><b>CUIT: </b></span> <span class="upper text-muted">20136541253</span>
            </div>
         </div>

         <div class="col-xs-6">
            <div class="contenedor-dato-cliente">
               <span class="upper"><b>iva: </b></span> <span class="upper text-muted">Cons. Final</span>
            </div>
         </div>
    </div>

    <div class="col-xs-12 separador border"></div>
     <br>
    <div class="col-xs-12">
         <table class="table table-responsive">
             <tbody>
                 <tr>
                    <th>Cantidad</th>
                    <th>Código</th>
                    <th>Descripción</th>
                 </tr>
                 <tr>
                    <td>1</td>
                    <td>HFHGFH5453</td>
                    <td>
                        <p>Motocicleta</p>
                        <p>Modelo Honda XR 150</p>
                        <p>Motor N²: ASD3423</p>
                        <p>Cuadro N²: HFHGFH5453</p>
                        <p>Año: 2017</p>
                        <p>Color: Negro</p>
                    </td>
                 </tr>
             </tbody>

             <tfoot>
                 <tr>
                     <td colspan="3"><p class="text-center upper">Recibí conforme la suma total de <strong>$21000</strong></p></td>
                 </tr>

                 <tr>
                     <td colspan="3">
                         <p class="leyendaTabla">La mercadería viaja por cuenta y orden del destinatario haciendose responsable civil y criminalmente a partir de la fecha por cualquier accidente, daño o perjuicio que pudiera ocasionar el rodado referido.</p>
                     </td>
                 </tr>

                 <tr>
                     <td colspan="3">
                          {!!  DNS1D::getBarcodeHTML(1, "EAN13",4.4,20) !!}
                     </td>
                 </tr>
             </tfoot>
         </table>
    </div>


    </div>

</body>
</html>
