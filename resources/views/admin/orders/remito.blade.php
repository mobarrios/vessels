<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Orden {!! $model->id !!}</title>
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
                  	{{--
                      <td style="width: 50%;">
                        @if($company->images->count() > 0)
                            <img width="200px" src="{{ $company->images->first()->path }}">
                        @endif 
                      </td>
                  		--}}
                  	  <td style="width: 50%;">
                        N° D-{{ $model->id }}
                      </td>
                      <td style="font-size: 1.5em;" >
                          <strong>Fecha</strong> {{ date('d/m/Y',strtotime($model->fecha_inicio)) }}<br />
                          <strong>Sucursal</strong> {{ $model->Brancheables() ?  $model->Brancheables()->first()->branches->name : 'sin sucursal' }}
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
                        Servicio Técnico para Smarthphones <br>
						L a V de 10 a 18 Hrs
                      </td>
                  </tr>
              </table>
          </td>
      </tr>
  </table>
  <br/>
  <br/>
  <fieldset style="font-size: 1.2em;">
    <legend>Datos del Cliente</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
          Nombre: {{ isset($model->Cliente->name) ? $model->Cliente->name : '' }}
          </td>
         <td>
          Teléfono: {{ isset($model->Cliente->phone1) ? $model->Cliente->phone1 : '' }}
          </td>
      </tr>
      <tr>
        <td>Apellido: {{ isset($model->Cliente->last_name) ? $model->Cliente->last_name : '' }}</td>
      </tr>

  </table>
 </fieldset>
  <br/>
  <br/>
  <fieldset>
    <legend style="font-size: 1.2em;">Datos del Equipo</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
          Marca :  {{ isset($model->Model->Brands) ? $model->Model->Brands->name : '' }}
          </td>
          <td>
          IMEI :  {{ $model->numero_serie  }}
          </td>
      </tr>
      <tr>
        <td>Modelo : {{ isset($model->Model) ? $model->Model->name : '' }} </td>
        <td>Clave : {{ $model->clave_equipo  }} </td>
      </tr>

  </table>
 </fieldset>
 <br/>
 <br/>
 <fieldset>
    <legend style="font-size: 1.2em;">Datos del Equipo</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
          Marca :  {{ isset($model->Model->Brands) ? $model->Model->Brands->name : '' }}
          </td>
          <td>
          IMEI :  {{ $model->numero_serie  }}
          </td>
      </tr>
      <tr>
        <td>Modelo : {{ isset($model->Model) ? $model->Model->name : '' }} </td>
        <td>Clave : {{ $model->clave_equipo  }} </td>
      </tr>

  </table>
 </fieldset>
 <br/>
 <br/>
 <fieldset>
    <legend style="font-size: 1.2em;">Descripción de la Falla por el Cliente</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
    		{{ $model->falla_declarada }}
          </td>
      </tr>
  </table>
 </fieldset>
 <br/>
 <br/>
 <fieldset>
    <legend style="font-size: 1.2em;">Técnico</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
    		{{ $model->observaciones }}
          </td>
      </tr>
  </table>
 </fieldset>
 <br/>
 <br/>
 <fieldset>
    <legend style="font-size: 1.2em;">Informe Técnico Inicial</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
    		{{ $model->observaciones_tecnicas }}
          </td>
      </tr>
  </table>
 </fieldset>
 <br/>
 <br/>
 <fieldset>
    <legend style="font-size: 1.2em;">Reparación</legend>
      <table style="width: 100%; font-size: 1.2em;" >
      <tr>
          <td>
    
          </td>
      </tr>
  </table>
 </fieldset>


</body>
</html>