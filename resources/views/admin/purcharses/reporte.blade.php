<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Orden Compra {!! $model->id !!}</title>
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

  <table style="width: 100%;">
      <tr>
          <td>
             <table style="width: 100%;">
                  <tr>
                      <td style="width: 50%;">
                        
                        @if($company->images->count() > 0)
                            <img width="200px" src="{{ $company->images->first()->path }}">
                        @endif 
                      </td>

                      <td style="font-size: 1.5em;" >

                          <strong>Fecha de Ingreso</strong> {{ date('d/m/Y',strtotime($model->created_at)) }}<br />
                          <strong>Orden de Compra</strong> {{$model->id}}<br />
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
                         Dir: {{$company->direccion}} <br>
                         Tel: {{$company->telefono}} <br>
                         Cuit: {{$company->cuit}}
                      </td>
                 
                   
                      <td style="font-size: 1.2em;">
                        Condición Frente al IVA: {{ isset($company->IvaConditions) ?  $company->IvaConditions->name : '' }} <br>
                        Ingresos Brutos Nº: {{$company->ingresos_brutos}} <br>
                        Inicio de Actividades: {{$company->inicio_actividades}} <br>
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
         Capacidad : {{  $model->capacidad }}
         </td>
         <td>
         Color :  {{ $model->color }}
         </td>
         
      </tr>
      
      <tr>
        <td>Observaciones : {{ $model->observacion  }} </td>
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
     Accesorios Extras : {{ $model->accesorios }}
     </td>

     <td>
     Estado : $ {{ $model->estado }}
     </td>

  </tr>
  <tr>
     <td>
     Cantidad : {{ $model->cantidad }}
     </td>

     <td>
     Precio Venta : $ {{ $model->precio_venta }}
     </td>

     <td>
     Precio Compra : $ {{ $model->precio_unitario }}
     </td>
  </tr>

</table>
</fieldset>
<legend style="font-size: 1.2em;"></legend> <br/><br/><br/><br/>
<p style="text-align:center;">En conformidad</p>
</body>

{{--
@if(!is_null($letraChica))
  {!! $letraChica->descripcion !!}
@endif


- CONTRASEÑA .................
- LOS PRECIOS NO INCLUYEN IVA.
- Cargo fijo por diagnostico $400.
<p> 1) Este comprobante es el unico elemento válido para retirar el equipo.</p>
<p> 2) El servicio de Hardware tiene 30 dias de garantía, los servicios de Software no poseen garantia alguna.</p>
<p> 3) Transcurridos 90 dias de realizado el presupuesto el equipo, se considera como abandonado y sin derecho de reclamo alguno.</p>
<p> 4) El cliente es el unico exclusivo responsable del origen y estado en todos sus aspectos.</p>
<p> 5) Los Equipos que presentan daños por humedad y/o reciban sin encender no podran ser cubiertos por nuestra garantia no aceptandose reclamo alguno por parte del cliente.</p>
<p> 6) Ante la cancelacion de un presupuesto la devolucion del equipo se realiza dentro de las 72 hs.</p>
<p> 7) La empresa no se hara responsable por los daños que pudieran surgir con la manipulacion del equipo.</p>
<p> 8) El horario de antecion del servicio tecnico es de lunes a viernes de 9 a 20 hs. y sabados de 10 a 16 hs.</p>
<p> 9) ISTYLE no se hace responsable de las perdidas de datos , el cliente tiene la obligacion de realizar previamente backups o copias. de seguridad de la informacion.</p>
<p> 10) ISTYLE no se hace responsable por los defectos ocultos no detectables al momento de la recepcion del equipo.
Declaro bajo juramento que los objetos detallados precedentemente son de mi unica y exclusiva propiedad y que no pesan sobre
ellos gravamenes o derechos de terceros de ninguna indole. ISTYLE no se responsabiliza por el soft incluido en los equipos ni por el
estado en que se encuentran.</p>

<p> Recibo conforme: .....................</p>
--}}

</body>
</html>