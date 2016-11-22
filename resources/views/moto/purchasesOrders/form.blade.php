@extends('template.model_form')

    @section('form_title')
        Nueva Orden de Compra
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif



        <div class="col-xs-3 form-group">
            {!! Form::label('Fecha') !!}
            {!! Form::text('date', null, ['class'=>'datePicker form-control']) !!}
        </div>

        <div class="col-xs-5 form-group">
            {!! Form::label('Proveedor') !!}
            {!! Form::select('providers_id', $providers, null, ['class'=>'select2 form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
            {!! Form::label('Sucursal') !!}
            {!! Form::select('branches_id', $branches, null, ['class'=>'select2 form-control']) !!}
        </div>

        <div class="col-xs-1 form-group">
            {!! Form::label('Cantidad') !!}
            {!! Form::text('quantity', null, ['class'=>' form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
            {!! Form::label('Modelo') !!}
            {!! Form::select('models_id', $modelsLists, null, ['class'=>'select2 form-control']) !!}
        </div>
        <div class="col-xs-2 form-group">
            {!! Form::label('Color') !!}
            {!! Form::select('colors_id', $colors,null , ['class'=>'select2 form-control']) !!}
        </div>


        <div class="col-xs-3 form-group">
            {!! Form::label('Precio x Unidad') !!}
            {!! Form::text('price', null, ['class'=>' form-control']) !!}
        </div>

        <div class="col-xs-3 form-group">
            {!! Form::label('Descuento %') !!}
            {!! Form::text('discount', null, ['class'=>' form-control']) !!}
        </div>

@endsection

