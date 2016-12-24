@extends('template.model_form')

    @section('form_title')
        Nuevo Artículo
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'),$models->id]]) !!}
        @else
            {!! Form::open(['route'=>config('models.'.$section.'.storeRoute')]) !!}
        @endif


        <div class="row">

            <div class="col-xs-6 form-group">
                {!! Form::label('Nro. Motor') !!}
                {!! Form::text('n_motor', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Nro. Cuadro') !!}
                {!! Form::text('n_cuadro', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Año') !!}
                {!! Form::text('year', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Color') !!}
                {!! Form::select('colors_id',$colors, null, ['class'=>'select2 form-control']) !!}
            </div>
        </div>



@endsection

