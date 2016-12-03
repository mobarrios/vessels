@extends('template.model_form')

    @section('form_title')
        Nuevo Pedidos de Mercaderias
    @endsection

    @section('form_inputs')

        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

        {!! Form::hidden('users_id',\Illuminate\Support\Facades\Auth::user()->id) !!}

        <div class="col-xs-3 form-group">
            {!! Form::label('Fecha') !!}
            {!! Form::text('date', null, ['class'=>'datePicker form-control']) !!}
        </div>

        <div class="col-xs-3 form-group">
            {!! Form::label('Proveedor') !!}
            {!! Form::select('providers_id', $providers, null, ['class'=>'select2 form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
            {!! Form::label('Sucursal') !!}
            {!! Form::select('branches_id[]',\Illuminate\Support\Facades\Auth::user()->getBranchName() , null, ['class'=>' select2  form-control']) !!}
        </div>
        <div class="col-xs-3 form-group" style="padding-top: 2%">
            <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
        </div>

        {!! Form::close() !!}


        @if(isset($models))
            {!! Form::open(['route'=> ['moto.purchasesOrders.addItems' ], 'files' =>'true']) !!}

            {!! Form::hidden('purchases_orders_id',$models->id) !!}

            <div class="col-xs-1 form-group">
                {!! Form::label('Cantidad') !!}
                {!! Form::text('quantity', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-3 form-group">
                {!! Form::label('Modelo') !!}
                {!! Form::select('models_id', $modelsLists, null, ['class'=>'select2 form-control']) !!}
            </div>
            <div class="col-xs-3a  form-group">
                {!! Form::label('Modelo') !!}
                <select name='models_id' class=" select2 form-control">
                    @foreach($brands as $br)
                        <optgroup label="{{$br->name}}">
                            @foreach($br->Models as $m)
                                <option value="{{$m->id}}" @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>

            <div class="col-xs-2 form-group">
                {!! Form::label('Color') !!}
                {!! Form::select('colors_id', $colors,null , ['class'=>'select2 form-control']) !!}
            </div>


            <div class="col-xs-3 form-group">
                {!! Form::label('Precio x Unidad') !!}
                {!! Form::text('price', null, ['class'=>' form-control']) !!}
            </div>

            <div class="col-xs-2 form-group">
                {!! Form::label('Descuento %') !!}
                {!! Form::text('discount', null, ['class'=>' form-control']) !!}
            </div>
            <div class="col-xs-1 form-group" style="padding-top: 2%">
                <button type="submit" class="btn btn-default"><span class="fa fa-plus"></span></button>
            </div>
            {!! Form::close() !!}

            <div class="col-xs-12">
                <table class="table">
                    <th>Cant.</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>$ Unidad</th>
                    <th>Dto.</th>
                    <th>Sub. Total</th>
                    <tbody>
                    @foreach($models->PurchasesOrdersItems as $item)
                        <tr>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->Models->Brands->name}}</td>
                            <td>{{$item->Models->name}}</td>
                            <td>$ {{$item->price}}</td>
                            <td>% {{$item->discount}}</td>
                            <td>$ {{(($item->quantity * $item->price))-((($item->quantity * $item->price)*($item->discount)/100))}}</td>
                            <td><a href="{{route('moto.purchasesOrders.deleteItems',[$item->id, $models->id])}}"><span class="text-danger fa fa-trash"></span></a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

@endsection

