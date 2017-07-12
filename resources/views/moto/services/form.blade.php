@extends('template.model_form')

@section('form_title')
    Nuevo Servicio
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif
    <div class="col-xs-4 form-group">
        {!! Form::label('Sevicio') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('$ Importe') !!}
        {!! Form::text('price', null, ['class'=>'form-control']) !!}
    </div>




@endsection

