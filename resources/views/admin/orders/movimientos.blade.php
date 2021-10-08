@extends('template.model_form')

    @section('form_title')
        <strong>Orden #  {{$models->id}}</strong>
         
    @endsection
    
    @section('form_inputs')
        
        @if(isset($models))
            {!! Form::model($models->Movements,['route'=> ['admin.ordenes.postMovimientos',$models->id]]) !!}
        @else
            {!! Form::open(['route'=>['admin.ordenes.postMovimientos',$models->id]]) !!}
        @endif

          <div class="row">

            <div class="col-xs-5">

              <h1 class="text-center text-muted">Entrada  </h1>
              <hr>
              <div class="col-xs-6 form-group">
                {!! Form::label('Fecha entrada') !!}
                {!! Form::text('fecha_entrada', null, ['class'=>'datePicker form-control']) !!}

              </div>
            
              <div class="col-xs-6 form-group">
                {!! Form::label('Codigo entrada') !!}
                {!! Form::text('cod_entrada', null, ['class'=>'form-control']) !!}
              </div>
            
            <div class="col-xs-12 form-group">
                {!! Form::label('Nombre de persona') !!}
                {!! Form::text('nombre_traslado_entrada', null, ['class'=>'form-control']) !!}
              </div>
            
            <div class="col-xs-6 form-group">
                {!! Form::label('Hora solicitud') !!}
                {!! Form::time('hora_solicitud_entrada', null, ['class'=>'form-control']) !!}
              </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Hora entrada') !!}
                {!! Form::time('hora_entrada', null, ['class'=>'form-control']) !!}
            </div>
        
            
            </div>
            <div class="col-xs-1">
                  <h1 class="text-muted"><span class="fa fa-sign-out"></span></h1>
            </div>

            <div class="col-xs-5">
              <h1 class="text-center text-muted">Salida  </h1>
              <hr>

              <div class="col-xs-6 form-group">
                {!! Form::label('Fecha salida') !!}
                {!! Form::text('fecha_salida', null, ['class'=>'datePicker form-control']) !!}
              </div>
            
              <div class="col-xs-6 form-group">
                {!! Form::label('Codigo salida') !!}
                {!! Form::text('cod_salida', null, ['class'=>'form-control']) !!}
              </div>
            
            <div class="col-xs-12 form-group">
                {!! Form::label('Nombre de persona') !!}
                {!! Form::text('nombre_traslado_salida', null, ['class'=>'form-control']) !!}
              </div>
            
            <div class="col-xs-6 form-group">
                {!! Form::label('Hora solicitud') !!}
                {!! Form::time('hora_solicitud_salida', null, ['class'=>'form-control']) !!}
              </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Hora entrada') !!}
                {!! Form::time('hora_salida', null, ['class'=>'form-control']) !!}
              </div>
  
            
            </div>


          
          </div>
          
         
          
@endsection