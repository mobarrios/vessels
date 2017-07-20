@extends('template.model_form')
    @section('form_title')
        Nuevo Registro
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

            <div class="col-xs-12 form-group">
              {!! Form::label('Nombre Registro') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Dirección') !!}
            {!! Form::text('address', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-12 form-group posRelative">
            {!! Form::label('Localidad') !!}
            {!! Form::select('localidades_id',$localidades,null,['class' => 'filter form-control']) !!}
        </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Teléfono') !!}
            {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        </div>



        <div class="col-xs-12 form-group">
            {!! Form::label('Alta Patente') !!}
            {!! Form::text('alta_patente_importe', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-12 form-group">
            {!! Form::label('Larga Distancia') !!}
            {!! Form::text('larga_distancia_importe', null, ['class'=>'form-control']) !!}
        </div>
@endsection


@section('js')
    <script src="js/buscadorLocalidades.js"></script>
@endsection