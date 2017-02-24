@extends('template.model_form')

@section('form_title')
    Nueva Chequera
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif
    <div class="col-xs-4 form-group">
        {!! Form::label('N° cheque') !!}
        {!! Form::number('n_cheque', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-4 form-group">
        {!! Form::label('Desde') !!}
        {!! Form::text('from', null ,['class'=>'datepicker form-control ']) !!}
    </div>

    <div class="col-xs-4 form-group">
        {!! Form::label('Hasta') !!}
        {!! Form::text('to', null ,['class'=>'datepicker form-control ']) !!}
    </div>


    <div class="col-xs-4 form-group">
        {!! Form::label('Monto') !!}
        {!! Form::number('amount', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-4 form-group">
        {!! Form::label('Fecha de cobro') !!}
        {!! Form::text('payment_date', null ,['class'=>'datepicker form-control ']) !!}
    </div>

    <div class="col-xs-4 form-group">
        {!! Form::label('Fecha de vencimiento') !!}
        {!! Form::text('due_date', null ,['class'=>'datepicker form-control ']) !!}
    </div>

    <div class="col-xs-4 form-group">
        {!! Form::label('Tipo') !!}
        {!! Form::select('type', $types , null ,['class'=>'select2 form-control']) !!}
    </div>


    <div class="col-xs-4 form-group">
        {!! Form::label('Banco') !!}
        {!! Form::select('banks_id', $banks , null ,['class'=>'select2 form-control']) !!}
    </div>



@endsection



