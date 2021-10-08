@extends('template.model_form')

    @section('form_title')
        Nuevo Servicio
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'),$models->id]]) !!}
        @else
            {!! Form::open(['route'=>config('models.'.$section.'.storeRoute')]) !!}
        @endif

            <div class="col-xs-12 form-group">
              {!! Form::label('Descripción') !!}
              {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-12 form-group">
              {!! Form::label('Iva') !!}
              {!! Form::text('iva', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-12 form-group">
              {!! Form::label('Importe') !!}
              {!! Form::text('amount', null, ['class'=>'form-control']) !!}
            </div>

@endsection

