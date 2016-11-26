@extends('template.model_form')

    @section('form_title')
        Nueva Lista de Precio
    @endsection

    @section('form_inputs')

        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

        <div class="col-xs-6 form-group">
            {!! Form::label('Nombre Lista de Precio') !!}
            {!! Form::text('number', null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-3 form-group">
            {!! Form::label('Proveedor') !!}
            {!! Form::select('providers_id', $providers,null, ['class'=>'select2 form-control']) !!}
        </div>
        {{--
            <div class="col-xs-2 form-group">
                {!! Form::label('Estado') !!}
                {!! Form::select('status', ['1'=> 'Activa', '0'=> 'Inactiva' ] ,null, ['class'=>'select2 form-control']) !!}
            </div>
             <div class="col-xs-1 form-group" style="padding-top: 2%">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                <span class="fa fa-save"></span>
            </button>
        </div>
               @include('moto.partials.tablaItems')--}}

            <div class="col-xs-1 form-group" style="padding-top: 2%">
                <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
            </div>

            {!! Form::close() !!}

        @if(isset($models))
                {!! Form::open(['route'=> ['moto.modelsListsPrices.addItems' ], 'files' =>'true']) !!}

                {!! Form::hidden('models_lists_prices_id',$models->id) !!}
                    <div class="col-xs-3 form-group">
                        {!! Form::label('Modelo') !!}
                        {!! Form::select('models_id', $models_lists, null, ['class'=>'form-control select2']) !!}
                    </div>
                    <div class="col-xs-2 form-group">
                        {!! Form::label('Precio de Lista') !!}
                        {!! Form::text('price_list', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-xs-2 form-group">
                        {!! Form::label('Precio de Contado') !!}
                        {!! Form::text('price_net', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-xs-2 form-group">
                        {!! Form::label('Dto. Máximo') !!}
                        {!! Form::text('max_discount', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-xs-2 form-group">
                        {!! Form::label('Observaciones') !!}
                        {!! Form::text('obs', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-xs-1 form-group" style="padding-top: 2%">
                        <button type="submit" class="btn btn-default"><span class="fa fa-plus"></span></button>
                    </div>
                 {!! Form::close() !!}
                <div class="col-xs-12">
                    <table class="table">
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>$ Lista</th>
                        <th>$ Contado</th>
                        <th>Dto. Max</th>
                        <th>Obs.</th>
                        <tbody>
                        @foreach($models->ModelsListsPricesItems as $item)
                            <tr>
                                <td>{{$item->Models->Brands->name}}</td>
                                <td>{{$item->Models->name}}</td>
                                <td>{{$item->price_list}}</td>
                                <td>{{$item->price_net}}</td>
                                <td>{{$item->max_discount}}</td>
                                <td>{{$item->obs}}</td>
                                <td><a href="{{route('moto.modelsListsPrices.deleteItems',[$item->id, $models->id])}}"><span class="text-danger fa fa-trash"></span></a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        @endif

    @endsection

