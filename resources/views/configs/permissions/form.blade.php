@extends('template.model_form')

    @section('form_title')
        Nuevo Usuario
    @endsection

    @section('form_inputs')
            @if(isset($models))
                {!! Form::model($models,['route'=> [$config->updateRoute,$models->id] , 'files' =>'true']) !!}
            @else
                {!! Form::open(['route'=> $config->storeRoute , 'files' =>'true']) !!}
            @endif

            <div class="col-xs-6 form-group">
              {!! Form::label('Nombre') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Slug') !!}
                {!! Form::text('slug', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Descripción') !!}
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
    @endsection

