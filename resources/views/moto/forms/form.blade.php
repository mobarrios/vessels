@extends('template.model_form')

@section('form_title')
    Nuevo Formulario
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

    <div class="col-xs-4 form-group">
        {!! Form::label('Tipo de Formulario') !!}
        {!! Form::select('forms_types', $types ,null, ['class'=>'form-control select2']) !!}
    </div>
    <div class="col-xs-4 form-group">
        {!! Form::label('Formulario Numero Desde') !!}
        {!! Form::number('from', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-4 form-group">
        {!! Form::label('Formulario Numero Hasta') !!}
        {!! Form::number('to', null, ['class'=>'form-control']) !!}
    </div>


@endsection

