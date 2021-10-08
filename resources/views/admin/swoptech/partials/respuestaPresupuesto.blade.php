<div class="alert alert-danger text-left divErrorTerminos" style="display: none;">
	Debe Aceptar los términos para continuar *
</div>

{!! Form::open(['route'=> 'admin.swoptech.postCotizar', 'method' => 'post' ]) !!}
<div class="row">
	

<div class="form-group col-md-12 pr-md-1">
	

	Tu Dispositivo {{ $modelo->Model->name }}, está cotizado en un
	valor aproximado de AR ${{$total}}. <br><br>

	El presupuesto es válido por 7 días de corrido a partir de
	hoy. Tené en cuenta que el valor final del equipo será
	confirmado sin excepción luego de su revisión física por
	uno de nuestros técnicos especializados.<br><br>

	Realizamos la transaccion por transferencia Bancaria de
	Lu a Vie de 9 a 18 hs.<br><br>

	Para gestionar una revisión en nuestros locales contactáte
	con uno de nuestros representantes.

</div>

<div class="form-group col-md-12 pr-md-1">
	<input type="radio" name="terminos" id="radioTerminos"> ACEPTO TÉRMINOS Y CONDICIONES
</div>

<input type="hidden" name="nombre" value="{{$nombre}}">
<input type="hidden" name="apellido" value="{{$apellido}}">
<input type="hidden" name="dni" value="{{$dni}}">
<input type="hidden" name="celular" value="{{$celular}}">
<input type="hidden" name="modelos_id" value="{{$modelos_id}}">
<input type="hidden" name="email" value="{{$email}}">
<input type="hidden" name="total" value="{{$total}}">



<input class="btn btn-primary d-block m-auto btnCoordinarCita" type="submit"  name="cotizar" />

</div>
{!! Form::close() !!}

<div class="row">
	<div class="form-group col-md-12 pr-md-1 text-center" style="margin-top: 50px;">
		<a href="javascript:void(0)" style="text-decoration: underline;" class="btnTerminos" >VER TÉRMINOS Y CONDICIONES</a>



	</div>

	<div class="form-group col-md-12 pr-md-1 text-center divTerminos" style="margin-top: 50px; display: none;">
		<h2> Términos y Condiciones </h2>

		<p style="text-align: left; ">La duración de la revisión tiene un tiempo aproximado de
		40 minutos a una hora. Dependiendo de la disponibilidad
		del técnico del punto de venta. </p>

		<p style="text-align: left; ">La revisión del equipo será sin compromiso de compra, la
		empresa se reserva el derecho de realizar la compra del
		equipo de acuerdo al diagnóstico avalado por el personal
		técnico.</p>

		<p style="text-align: left; ">Una vez realizadas las pruebas de revisión y en última
		instancia, equipo deberá ser abierto previa aceptación de
		ambas partes. Esto será requisito para comprobar que
		dicho dispositivo no presente signos de húmedad.</p>
		
	</div>

</div>
