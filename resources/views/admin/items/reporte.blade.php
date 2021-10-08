<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Nota de Entrega {!! $model->id !!}</title>
      <style>

        body{
            font-size: 11px;
            font-family: Arial, sans-serif;
        }

        hr {
            border: 0.5px solid #000000;
        }



          table{
              border-collapse: collapse;
          }

          .titulo{
              width: 100%;
              margin-top: 5px;
              margin-bottom: -15px !important;
          }

          .titulo *{
              vertical-align: middle !important;
              display: inline-block;
          }


          .titulo span{
              width: 50%;
              /*border: 1px solid red;*/
          }

          .right{
              display: inline-block;
              /*vertical-align: bottom !important*/;
              width: 50%;
          }

          .left{
              width: 50%;
              display: inline-block;
              /*vertical-align: top !important;*/
          }

          .content{
              border-top: 1px solid #c1c1c1;
              padding-top: 3px;
              /*margin-top: -40px !important;*/
          }

          .content span,.content p{
              display: inline-block;
              vertical-align: top !important;
          }

          .content span{
              width:100%;
          }

          .border{
              /*border-bottom: 1px solid black;*/
              /*margin-top: -10px;*/
              padding-top: 0 !important;
              margin-bottom: -20px !important;
              padding-bottom: 0 !important;
          }

          .datos_medicos p{
              margin:0 !important;
              padding:0 !important;
          }



      </style>
  </head>
  <body>
  <p style="text-align:center;"><h1> Nota de Entrega </h1></p>
  <table style="width: 100%;">
      <tr>
          <td>
             <table style="width: 100%;">
                  <tr>
                      <td style="width: 50%;">
                        
                        @if(!empty($model->Company))
                            <img width="200px" src="{{ $model->Company->images->first()->path }}">
                        @endif 
                      </td>

                      <td style="font-size: 1.5em;" >

                          <strong>Fecha </strong> {{ date('d/m/Y',strtotime($model->created_at)) }}<br />
                          <strong>Sucursal </strong> {{ isset($model->Company->razon_social) ?  $model->Company->razon_social : '' }}

                      </td>
                  </tr>
              </table>
          </td>
         
      </tr>
      <tr>
          <td>
              <table style="width: 100%;">
                  <tr valign="top">
                   
                      <td style="font-size: 1.2em;">
                         Dir: {{ isset($model->Company) ? $model->Company->direccion : '' }} <br>
                         Tel: {{ isset($model->Company) ? $model->Company->telefono : '' }} <br>
                         Cuit: {{ isset($model->Company) ? $model->Company->cuit : '' }}
                      </td>
                 
                   
                      <td style="font-size: 1.2em;">
                        Condición Frente al IVA: {{ isset($model->Company->IvaConditions) ?  $model->Company->IvaConditions->name : '' }} <br>
                        Ingresos Brutos Nº: {{ isset($model->Company) ? $model->Company->ingresos_brutos : '' }} <br>
                        Inicio de Actividades: {{ isset($model->Company) ? $model->Company->inicio_actividades : '' }} <br>
                      </td>
              </tr>
              </table>
          </td>
      </tr>
  </table>
  <br/> 
  <br/>

  <fieldset style="font-size: 1.2em;">
    <legend>IDENTIFICACIÓN DEL VENDEDOR</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
          Cliente: {{ isset($model->Cliente->fullname) ? $model->Cliente->fullname : '' }}
          </td>
         <td>
          Direccion: {{ isset($model->Cliente->fullAddress) ? $model->Cliente->fullAddress : '' }}
          </td>
      </tr>
      <tr>
        <td>Telefono: {{ isset($model->Cliente->phone1) ? $model->Cliente->phone1 : '' }}</td>
        
      </tr>

  </table>
 </fieldset>
  <br/>
  <br/>
  <fieldset>
    <legend style="font-size: 1.2em;">Articulo</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
         <td>
         Modelo : {{ isset($model->Model->Brands) ? $model->Model->Brands->name : '' }} {{ isset($model->Model) ? $model->Model->name : '' }}
         </td>
         <td>
         Serie/IMEI :  {{ $model->numero_serie }}
         </td>
         
      </tr>
      <tr>
         <td>
         Capacidad : {{  $model->Compra->capacidad }}
         </td>
         <td>
         Color :  {{ $model->Compra->color }}
         </td>
         
      </tr>
      
      <tr>
        <td>Observaciones : {{ $model->Compra->observacion  }} </td>
      </tr>

  </table>
 </fieldset>

<br/>
<br/>
<fieldset>
<legend style="font-size: 1.2em;">DATOS DE LA OPERACIÓN</legend>
  <table style="width: 100%; font-size: 1.2em;" >
  <tr>
     <td>
     Accesorios Extras : {{ $model->Compra->accesorios }}
     </td>

      <td>
     Cantidad : {{ $model->Compra->cantidad }}
     </td>

  </tr>
  <tr>
     <td>
     Precio Venta : $ {{ $model->Compra->precio_venta }}
     </td>
     <td>
     Método de Pago : {{ isset($model->Compra->Pago->PayMethods) ? $model->Compra->Pago->PayMethods->name : '' }}
     </td>
    
  </tr>

</table>
</fieldset>
<legend style="font-size: 1.2em;"></legend> <br/><br/><br/><br/>
<p style="text-align:center;">EN CONFORMIDAD</p>

<p> 1 - Ley de defensa del consumidor capítulo IV art. 11, la garantía a partir del momento de entrega será: de 90 días. </p>
<p> 2 - La garantía no extensible a accesorios ni batería. </p>
<p> 3 - Los equipos mojados, dañados o que presenten humedad no son cubiertos por la garantía, las fallas, modificaciones o actualizaciones de software no son cubiertas. </p>
<p> 4 - Los datos o información son de exclusiva responsabilidad del propietario. La empresa no se responsabiliza por pérdida o traspaso de datos, quedando a cargo del dueño el correspondiente back up. </p>
- La garantía no es transferible a terceras personas. <br><br>
- La garantía será recepcionada y corrida por la empresa y sus subsidiarias, quedando a cargo del comprador los traslados.


</body>
</html>