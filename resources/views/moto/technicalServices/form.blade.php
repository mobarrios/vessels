@extends('template.model_form')

@section('form_title')
    Nueva Orden de Servicio
@endsection

@section('form_inputs')

    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif


    <div class="col-xs-12 form-group">
        {!! Form::label('Cliente') !!}
        <select name="clients_id" class="select2 form-control">
            @foreach($clients as $client)
                <option value="{{$client->id}}"> {{$client->dni}} : {{$client->FullName}}  </option>
            @endforeach
        </select>
    </div>



    <div class="col-xs-6 form-group">
        {!! Form::label('Modelo') !!}

        <select class="select2 form-control">
            @foreach($brands as $brand)
                <optgroup label="{{$brand->name}}">
                    @foreach($brand->Models as $model)
                         <option>{{$model->name}}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>

    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('Patente') !!}
        {!! Form::text('patente', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('N Motor') !!}
        {!! Form::text('n_motor', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-2 form-group">
        {!! Form::label('N Cuadro') !!}
        {!! Form::text('n_cuadro', null, ['class'=>'form-control']) !!}
    </div>

    {{--<div class="col-xs-1 form-group">--}}
        {{--{!! Form::label('Fluido Radiador') !!}--}}
        {{--{!! Form::select('fluido_radiador', [], null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="col-xs-1 form-group">--}}
        {{--{!! Form::label('Fluido Freno') !!}--}}
        {{--{!! Form::select('fluido_freno', [], null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="col-xs-1 form-group">--}}
        {{--{!! Form::label('Combustible') !!}--}}
        {{--{!! Form::select('combustible', [], null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="col-xs-1 form-group">--}}
        {{--{!! Form::label('Nivel Aceite') !!}--}}
        {{--{!! Form::select('nivel_aceite', [], null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="col-xs-2 form-group">--}}
        {{--{!! Form::label('Kit Herramientas') !!}--}}
        {{--{!! Form::select('kit_herramientas', [], null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="col-xs-1 form-group">--}}
        {{--{!! Form::label('Casco') !!}--}}
        {{--{!! Form::select('casco', [], null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="col-xs-2 form-group">--}}
        {{--{!! Form::label('Motocicleta Sin Averias') !!}--}}
        {{--{!! Form::select('motocicleta_sin_averias', [], null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}

    <div class="col-xs-12 form-group">
        {!! Form::label('Observaciones') !!}
        {!! Form::text('observaciones', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-6 form-group">
        {!! Form::label('Descripción del Cliente') !!}
        {!! Form::textArea('descripcion_cliente', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-6 form-group">
        {!! Form::label('Diagnostico ') !!}
        {!! Form::textArea('diagnosticos', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-12 form-group">
        {!! Form::label('Servicios ') !!}
        {!! Form::select('servicios', $services ,null,  ['class'=>'selectMulti form-control' , 'multi'=>'multi' ]) !!}
    </div>
    <div class="col-xs-12 form-group">
        {!! Form::label('Repuestos Utilizados ') !!}
        {!! Form::text('repuestos', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-12 form-group">
        {!! Form::label('Mecanico Asignado ') !!}
        {!! Form::select('mecanicos_id', $mecanicos ,null,  ['class'=>'select2 form-control' ]) !!}
    </div>

    @if(isset($models))
        <div class="col-xs-12 form-group">
            <a href="{{route('moto.technicalServices.pdf',$models->id)}}" class="btn btn-md btn-default" target="_blank"><span class="fa fa-print"></span></a>
        </div>
    @endif
@endsection
