@extends('template.model_form')

    @section('form_title')
        Nuevo Remito
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

        <div class="col-xs-4 form-group">
            {!! Form::label('Nro. Remito') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
            {!! Form::label('Fecha Remito') !!}
            {!! Form::text('date', null, ['class'=>'datePicker form-control']) !!}
        </div>
        <div class="col-xs-2 form-group">
            {!! Form::label('Orden de Compra') !!}
            {!! Form::select('purchases_orders_id', $purchasesOrders, null, ['class'=>'select2 form-control']) !!}
        </div>
        <div class="col-xs-2 form-group" style="padding-top: 2%">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                <span class="fa fa-plus"></span>
            </button>
        </div>

        <div class="col-xs-6 form-group">
            {!! Form::label('Imagen Remito') !!}
            {!! Form::file('image') !!}
        </div>


        @include('moto.partials.tablaItems')



    @endsection

@include('moto.partials.modalItems')

@section('js')
    @include('moto.partials.jsItems')
@endsection