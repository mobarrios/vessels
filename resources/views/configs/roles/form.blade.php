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
                {!! Form::label('Slug') !!}
                {!! Form::text('slug', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Descripción') !!}
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Nivel') !!}
                {!! Form::text('level', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Permisos') !!}

                @foreach($permissions as $permission)
                        <input type="checkbox"  name="permissions_checkbox[]"  value="{{$permission->id}}">
                        {{$permission->name}}
                    <br>
                @endforeach

            </div>

    @endsection

