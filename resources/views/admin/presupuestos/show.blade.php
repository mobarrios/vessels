@extends('template')

    @section('form_title')
       Orden # {{$models->id}}
    @endsection

 	@section('sectionContent')
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid">
          <div class="box-header">
            <div class="col-xs-8"><h3 class="box-title">  Presupuesto # {{$models->id}}</h3></div>
            		{{--
              <a href="{{route('admin.items.reporte',$models->id)}}" target="_blank" class="btn btn-default pull-right" style="margin-left: 10px;" >Reporte</a>  
            			--}}
          </div>
        </div>
      </div>
    </div>


    <div class="row">

      <div class="col-xs-6">
          <div class="row">
	        <div class="col-xs-12">
	          <div class="box box-solid">
	            <div class="box-header with-border">
	              <h3 class="box-title">Cliente </h3>
	            </div>

	            <div class="box-body">
	              <span class="text-muted">Codigo Cliente : </span> <strong>{{ isset($models->Cliente->id) ? $models->Cliente->id : '' }}</strong>
	              <br><br>
	              <span class="text-muted">Apellido y Nombre :</span><strong> {{ isset($models->Cliente->last_name) ? $models->Cliente->last_name : '' }}

	               {{ isset($models->Cliente) ? $models->Cliente->name : '' }} 

	              </strong>
	              <br><br>
	             <span class="text-muted"> Razon Social: </span><strong>{{ isset($models->Cliente->razon_social) ? $models->Cliente->razon_social : '' }}</strong>
	              <br><br>
	              <span class="text-muted">DNI:</span> <strong> {{ isset($models->Cliente->dni)  ? $models->Cliente->dni : ''}}</strong>
	              <br><br>
	              <span class="text-muted">CUIT:</span> <strong> {{ isset($models->Cliente->cuit)  ? $models->Cliente->cuit : ''}}</strong>
	              <br><br>
	              <span class="text-muted">Email:</span> <strong>{{ isset($models->Cliente->email) ? $models->Cliente->email : ''}}</strong>
	              <br><br>
	              <span class="text-muted">Direccion:</span> <strong> {{ isset($models->Cliente->address) ? $models->Cliente->address  : '' }} {{ isset($models->Cliente->Localidades) ? $models->Cliente->Localidades->name  : '' }}</strong>
	              <br><br>
	              <span class="text-muted">Tel / Cel:</span> <strong> {{ isset($models->Cliente->phone1) ? $models->Cliente->phone1 : '' }}</strong>

	            </div>
	          </div>
	        
	        </div>


        <div class="col-xs-12">
          <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">  Estados </h3>
          </div>
          <div class="box-body">
            <div class="col-lg-12">

              
            {!! Form::open(['route'=>('admin.presupuestos.updateEstado')]) !!}
	            <div class="form-group">
					<select class="form-control select2" name="estado_id">
					  <option value="">Seleccionar Estado</option>
					  
					  @foreach($states as $key => $estado)
					      <option value="{{ $key }}"> {{ $estado }} </option>
					  @endforeach
					</select>
				</div>
				<div class="form-group"> 
					{!! Form::hidden('presupuesto_id', $models->id) !!}
					<textarea class="form-control" rows="3" name="observaciones" placeholder="observaciones"> </textarea>
				</div>

				<div class="form-group"> 
					<button class="btn btn-default pull-right" type="submit">Guardar </button>
	            </div>

            {!! Form::close() !!}

            </div>
            <hr>
            <div class="col-lg-12">
                <table class="table">
                  <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($models->Estados as $estado)
    
                    <tr>
                      <td>{{ $estado->created_at }}</td>
                      <td>{{ isset($estado->User)  ? $estado->User->user_name : '' }}</td>
                      <td>{{ isset($estado->States)  ? $estado->States->description : '' }}</td>
                      <td>{{ $estado->observaciones }}</td>
                     
                    </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>
           
            </div>
          </div>
        </div>



      </div>
      </div>

      <div class="col-xs-6">
        <div class="row">
        <div class="col-xs-12">
	        <div class="box box-solid">
	          <div class="box-header with-border">
	            <h3 class="box-title">  Producto </h3>
	          </div>
	          <div class="box-body">
	            <span class="text-muted">Modelo : </span> <strong>{{ isset($models->Producto->Model->name) ? $models->Producto->Model->name : '' }} </strong>
	            <br><br> 
	            <span class="text-muted">Marca : </span> <strong>{{ isset($models->Producto->Model->Brands->name) ? $models->Producto->Model->Brands->name : ''  }} </strong>
	            <br><br> 
	            <span class="text-muted">Precio : </span> <strong>$ {{ $models->Producto->precio_final  }} </strong>
	            <br><br> 
	            <hr>
	            <span class="text-muted">Caracteristicas : </span><br>
	            @foreach($models->Caracteristicas as $caracteristica)
	            	<strong>{{ $caracteristica->nombre }} </strong><br>
	            @endforeach
	            <br>

	            <span class="text-muted">Importe Presupuestado : </span> <strong>$ {{ $models->precio_final  }} </strong>
	            <br><br> 
	           
	            
	          </div>
	        </div>
	     </div>

	 

      </div>
    </div>

    </div>




@endsection