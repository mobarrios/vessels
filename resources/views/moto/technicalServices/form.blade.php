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
                @if(isset($models))
                    <option value="{{$client->id}}" {!! ($models->clients_id == $client->id ) ? 'selected' : '' !!} > {{$client->dni}} : {{$client->FullName}}</option>
                @else
                    <option value="{{$client->id}}" > {{$client->dni}} : {{$client->FullName}}</option>
                @endif
            @endforeach
        </select>
    </div>



    <div class="col-xs-6 form-group">
        {!! Form::label('Modelo') !!}

        <select name="models_id" class="select2 form-control">
            @foreach($brands as $brand)
                <optgroup label="{{$brand->name}}">
                    @foreach($brand->Models as $model)
                        @if(isset($models))
                         <option value="{{$model->id}}" {!! ($models->models_id == $model->id ) ? 'selected' : '' !!}>{{$model->name}}</option>
                        @else
                            <option value="{{$model->id}}">{{$model->name}}</option>
                        @endif
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
        {!! Form::label('Mecanico Asignado ') !!}
        {!! Form::select('mecanicos_id', $mecanicos ,null,  ['class'=>'select2 form-control' ]) !!}
    </div>

    <div class="col-xs-12 form-group">
        {!! Form::label('Diagnostico ') !!}
        {!! Form::textArea('diagnosticos', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-6 form-group">
        {!! Form::label('Servicios ') !!}
        {!! Form::select('servicios[]',  $services ,null,  ['class'=>'select2 form-control' ]) !!}

        <hr>

        @if(isset($models))
            <table class="table table-bordered">
                @foreach($models->services as $servicio)
                    <tr>
                        <td>{{$servicio->name}}</td>
                        <td>{{$servicio->price}}</td>
                    </tr>
                @endforeach
                <tfoot>
                    <td><b>Total Servicios</b></td>
                    <td><b>$ {{$models->Services->SUM('price')}}</b></td>
                </tfoot>
            </table>

        @endif

    </div>


    <div class="col-xs-6 form-group">
        {!! Form::label('Repuestos') !!}

        <select name="repuestos[]" class="select2 form-control"  >
            @foreach($repuestos as $repuesto)
                <optgroup label="{{$repuesto->name}}">
                    @foreach($repuesto->Items as $item)
                            <option value="{{$item->id}}">{{$item->serial_number}}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>

        <hr>

            @if(isset($models))
                <table class="table table-bordered">
                    @foreach($models->Items as $item)
                    <tr>
                        <td>{{$item->serial_number}}</td>
                        <td>{{$item->Models->Brands->name}} : {{$item->Models->name}}</td>
                        <td><b>$ {{$item->Models->activeListPrice->price_list or ''}}</b></td>
                    </tr>
                    @endforeach
                        <tfoot>
                        <td><b>Total Repuestos</b></td>
                        <td></td>

                        <td><b>$ {{$models->items->SUM('models.activeListPrice.price_list') }}</b></td>
                        </tfoot>
                </table>

            @endif

    </div>




    @if(isset($models))
        <div class="col-xs-12 form-group">
            <a href="{{route('moto.technicalServices.pdf',$models->id)}}" class="btn btn-md btn-default" target="_blank"><span class="fa fa-print"></span></a>
        </div>
    @endif
@endsection
