@extends('template.model_form')

    @section('form_title')
        Nuevo Usuario
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [$routes->updateRoute,$models->id]]) !!}
        @else
            {!! Form::open(['route'=> $routes->storeRoute]) !!}
        @endif

            <div class="col-xs-6 form-group">
              {!! Form::label('Nombre') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Apellido') !!}
                {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Email') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Pasword') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

    @endsection

