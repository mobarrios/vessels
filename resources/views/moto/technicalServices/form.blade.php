@extends('template.model_form')

@section('form_title')
    Nueva Orden de Servicio
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

    <div class="col-xs-2 form-group">
        {!! Form::label('Marca') !!}
        {!! Form::text('brands_id', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Modelo') !!}
        {!! Form::text('models_id', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Patente') !!}
        {!! Form::text('patente', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('N Motor') !!}
        {!! Form::text('n_motor', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('N Cuadro') !!}
        {!! Form::text('n_cuadro', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Fluido Radiador') !!}
        {!! Form::select('fluido_radiador', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Fluido Freno') !!}
        {!! Form::select('fluido_freno', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Combustible') !!}
        {!! Form::select('combustible', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Nivel Aceite') !!}
        {!! Form::select('nivel_aceite', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Kit Herramientas') !!}
        {!! Form::select('kit_herramientas', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Casco') !!}
        {!! Form::select('casco', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Motocicleta Sin Averias') !!}
        {!! Form::select('motocicleta_sin_averias', [], null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-12 form-group">
        {!! Form::label('Observaciones') !!}
        {!! Form::text('observaciones', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-12 form-group">
        {!! Form::label('Descripción del Cliente') !!}
        {!! Form::textArea('descripcion_cliente', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-12 form-group">
        {!! Form::label('Diagnostico ') !!}
        {!! Form::textArea('diagnosticos', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-12 form-group">
        {!! Form::label('Servicios ') !!}
        {!! Form::text('servicios', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-12 form-group">
        {!! Form::label('Repuestos Utilizados ') !!}
        {!! Form::text('repuestos', null, ['class'=>'form-control']) !!}
    </div>

@endsection
