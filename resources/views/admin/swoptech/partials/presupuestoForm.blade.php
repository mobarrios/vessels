@if(count($errors) > 0)

	@foreach($errors->all() as $error)
	<div class="alert alert-danger text-left">
		{{$error}}  *
	</div>
	@endforeach
@endif

@if(isset($msgOK) || session()->has('msgOk'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="small"><i class="mdi mdi-check"></i> {!! session('msgOk') !!}</p>
    </div>
@endif

{{--
<form id="contact-form" action="/winnie-pooh" method="post" class="form js-winnie-pooh-form mb-4" data-store="contact-form">

--}}
<h1 style="font-family: Raleway; font-size: 34px; font-weight: 700; color: #000000";>¿Querés Vender tu iPhone?</h1>


<h5 style="font-family: 'Open Sans sans-serif'; font-size: 14px;color: #000000;">
Completá los datos, cotización online en simples pasos.</h5> <br><br>
{!! Form::open(['route'=> 'admin.swoptech.postFormPublic', 'method' => 'post' ]) !!}

<div class="row">
				

<div class="form-group col-md-6 pr-md-1">
	<label class="form-label" for="email">Nombre</label>
	{!! Form::text('nombre',null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-md-6">
	<label  class="form-label " for="phone">Apellido</label>
	{!! Form::text('apellido',null, ['class' => 'form-control']) !!}</div>

</div>

<div class="row">
				

	<div class="form-group col-md-6 pr-md-1">
		<label class="form-label" for="email">Dni</label>
	{!! Form::number('dni',null, ['class' => 'form-control']) !!}	
</div>


	<div class="form-group col-md-6">
		<label class="form-label" for="phone">E-mail</label>
		{!! Form::text('email',null, ['class' => 'form-control']) !!}
	</div>

</div>

<div class="row">
				

	<div class="form-group col-md-6 pr-md-1">
		<label class="form-label " for="email">Celular</label>
		{!! Form::number('celular',null, ['class' => 'form-control']) !!}
	</div>


</div>

<div class="row">
	
	<div class="form-group col-md-12 pr-md-1">

		<select id="modelo" class="form-control" name="modelo">
		<option value="">¿CUÁL ES TU MODELO DE IPHONE?</option>
		@foreach($productos as $p)
		    <option value="{{$p->id}}"> {{ $p->Model->name }} {{ $p->capacidad }} GB</option>
		@endforeach

		</select>
	</div>


</div>


<div class="row">
			

	<div class="form-group col-md-12 pr-md-1">
		<label class="form-label " for="email">¿PRESENTA ALGUNA FALLA?</label>
		<div class="row">



		@foreach($caracteristicas->chunk(2) as $key => $c)
			{{--
			@if(isset($c[0]))
			<div class="col-md-6">
				<input type="checkbox" name="caracteristicas[]" value="{{  $c[0]->id }}">{{ $c[0]->nombre }} <br>
			</div>
			@endif
			
			@if(isset($c[1]))
			<div class="col-md-6">
				<input type="checkbox" name="caracteristicas[]" value="{{ $c[1]->id }}">{{ $c[1]->nombre }} <br>
			</div>
			@endif
			--}}

			@if(isset($c[0]))
			<div class="col-md-6">
				<label class="containerCheckbox">{{ $c[0]->nombre }} 
				  <input type="checkbox" name="caracteristicas[]" value="{{  $c[0]->id }}">
				  <span class="checkmark"></span>
				</label>
			</div>
			@endif

			@if(isset($c[1]))
			<div class="col-md-6">
				<label class="containerCheckbox">{{ $c[1]->nombre }} 
				  <input type="checkbox" name="caracteristicas[]" value="{{  $c[1]->id }}">
				  <span class="checkmark"></span>
				</label>
			</div>
			@endif

		@endforeach
	</div>
	</div>


</div>


<div class="row">
	<div class="form-group col-md-12 pr-md-1">
		<label class="lblPrecio"></label>
	</div>
</div>



<input class="btn btn-primary d-block m-auto" type="submit" value="COTIZAR" name="cotizar" />
{!! Form::close() !!}