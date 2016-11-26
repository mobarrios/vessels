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
            {!! Form::text('number', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
            {!! Form::label('Fecha Remito') !!}
            {!! Form::text('date', null, ['class'=>'datePicker form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
            {!! Form::label('Orden de Compra') !!}
            {!! Form::select('purchases_orders_id', $purchasesOrders, null, ['class'=>'select2 form-control']) !!}
        </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Imagen Remito') !!}
            {!! Form::file('image') !!}
        </div>

        <div class="col-xs-1 form-group">
            <button type="submit" class="btn btn-default" >
                <span class="fa fa-save"></span>
            </button>
        </div>
        {!! Form::close() !!}


        @if(isset($models->Items))

            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}

            <div class="col-xs-3 form-group">
                {!! Form::label('Modelo') !!}
                <select name='models_id' class=" select2 form-control" id="modelo">
                    @foreach($brands as $br)
                        <optgroup label="{{$br->name}}">
                            @foreach($br->Models as $m)
                                <option value="{{$m->id}}"
                                        @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>

            <div class="col-xs-3 form-group">
                {!! Form::label('Nro. Motor') !!}
                {!! Form::text('n_motor', null, ['class'=>'form-control','id'=>'n_motor']) !!}
            </div>
            <div class="col-xs-3 form-group">
                {!! Form::label('Nro. Cuadro') !!}
                {!! Form::text('n_cuadro', null, ['class'=>'form-control','id'=>'n_cuadro']) !!}
            </div>
            <div class="col-xs-1 form-group">
                {!! Form::label('Año') !!}
                {!! Form::text('year', null, ['class'=>'form-control','id'=>'anio']) !!}
            </div>

            <div class="col-xs-1 form-group">
                {!! Form::label('Color') !!}
                {!! Form::select('colors_id',$colors, null, ['class'=>'select2 form-control','id'=>'color']) !!}
            </div>
            <div class="col-xs-1 form-group" style="padding-top: 2%">
                <button type="submit" class="btn btn-default" >
                    <span class="fa fa-plus"></span>
                </button>
            </div>

            {!! Form::close() !!}

            <div class=" col-xs-12 table-responsive">
                <table class="table">
                    <thead>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>N Motor</th>
                    <th>N Cuadro</th>
                    <th>Año</th>
                    <th>Color</th>
                    </thead>
                    <tbody class="tr">
                    @foreach($models->Items as $item)
                        <tr>
                            <td>{{$item}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    @endsection


