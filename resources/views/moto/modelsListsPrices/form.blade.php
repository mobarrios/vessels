@extends('template.model_form')

    @section('form_title')
        Nuevo Artículo
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

        <div class="col-xs-6 form-group">
            {!! Form::label('Nombre Lista de Precio') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
            {!! Form::label('Proveedor') !!}
            {!! Form::select('providers_id', $providers,null, ['class'=>'select2 form-control']) !!}
        </div>

        <div class="col-xs-2 form-group" style="padding-top: 2%">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                <span class="fa fa-plus"></span>
            </button>
        </div>


        @include('moto.partials.tablaItems')


        <div class="modal-footer">
            <button type="submit" class="btn btn-default">Aceptar</button>
        </div>
        {!! Form::close() !!}

        @include('moto.partials.modalItems')

    @endsection

@section('js')
    @include('moto.partials.jsItems')
@endsection
