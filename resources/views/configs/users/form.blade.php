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

            <div class="col-xs-6 form-group">
                {!! Form::label('Roles') !!}
                    @if(isset($models))
                    {!! Form::select('roles_id',$roles, $models->roles->first()->id, ['class'=>'select2 form-control']) !!}
                    @else
                        {!! Form::select('roles_id',$roles, null, ['class'=>'select2 form-control']) !!}
                @endif
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Sucursal') !!}
                @if(isset($models) && !is_null($models->brancheables) )
                    {!! Form::select('branches_id',$branches, $models->brancheables->branches_id, ['class'=>'select2 form-control']) !!}
                @else
                    {!! Form::select('branches_id',$branches, null, ['class'=>'select2 form-control']) !!}
                @endif
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Imagen') !!}
                {!! Form::file('image') !!}
            </div>
    @endsection

