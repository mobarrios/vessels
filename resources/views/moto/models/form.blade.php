@extends('template.model_form')

    @section('form_title')
        Nuevo Modelo
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif
        <div class="col-xs-12 form-group">
            {!! Form::label('Nombre Modelo') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-6 form-group">
            {!! Form::label('Marca') !!}
            {!! Form::select('brands_id', $brands , null ,['class'=>'select2 form-control ']) !!}
        </div>
        <div class="col-xs-4 form-group">
            {!! Form::label('Categorias') !!}
            {!! Form::select('categories_id[]', $categories , null ,['class'=>'selectMulti form-control' ,'multiple'=>'']) !!}
        </div>
        <div class="col-xs-2 form-group">
            {!! Form::label('Estado') !!}
            {!! Form::select('stauts', [''=>'Activo'],null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-6 form-group">
            {!! Form::label('Imagen') !!}
            {!! Form::file('image') !!}
        </div>



@endsection

