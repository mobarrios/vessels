<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Orden </title>
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
                      <td style="font-size: 1.5em;" align="left">
                            <h1>{{$company->nombre_fantasia}}</h1>
	                       Dirección: {{ $company->direccion }} <br>
						   Tel:{{ $company->telefono }} <br>
	                  </td>

	                  {{-- <td style="width: 50%;" align="right">
	                    <img width="200px" src="{{ $company->images->first()->path }}">
	                  </td> --}}
	                  
	              </tr>
	          </table>
	      </td>
	     
	  </tr>


	</table>
  	<hr>
	<p>{!! $estado->text_email !!}</p>


  </body>
</html>
