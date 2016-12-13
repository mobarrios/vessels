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
            @if(isset($models))
                <a href="#" data-action="{!! route("moto.purchasesOrders.addItems") !!}" data-toggle="control-sidebar" class="btn btn-default"><span class="fa fa-plus"></span></a>
            @endif
        </div>

        {!! Form::close() !!}


        @if(isset($models))
            <div class="col-xs-12">
                <table class="table">
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cantidad</th>
                        <th>$ Lista</th>
                        <th>Descuento</th>
                        <th>Color</th>
                    </tr>
                    @foreach($models->PurchasesOrdersItems as $item)
                        <tbody>
                        <tr>
                            <td>{{$item->Models->Brands->name}}</td>
                            <td>{{$item->Models->name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->discount}}</td>
                            <td>{{$item->colors->name}}</td>
                            <td>
                                <a href="{{route('moto.purchasesOrders.deleteItems',[$item->id,$models->id])}}"><span
                                            class="text-danger fa fa-trash"></span></a>
                            </td>
                            <td>
                                <a href="{{route('moto.purchasesOrders.editItems',[$item->id,$models->id])}}"><span
                                            class="text-success fa fa-edit"></span></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        @endif

@endsection

@section('formAside')
    @include('moto.partials.asideOpenForm')
    @if(isset($models))

        <!-- .control-sidebar-menu -->

        @if(isset($modelItems))
            {!! Form::model($modelItems,['route'=> ['moto.purchasesOrders.updateItems', $modelItems->id,$models->id], 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> ['moto.purchasesOrders.addItems' ], 'files' =>'true']) !!}
        @endif

        {!! Form::hidden('purchases_orders_id',$models->id) !!}
        <div class="col-xs-12 form-group">
            {!! Form::label('Modelo') !!}
            {!! Form::select('models_id', $models_lists, null, ['class'=>'form-control select2']) !!}
        </div>
        <div class="col-xs-12 form-group">
            {!! Form::label('Precio') !!}
            {!! Form::text('price', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-12 form-group">
            {!! Form::label('Cantidad') !!}
            {!! Form::text('quantity', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-12 form-group">
            {!! Form::label('Descuento') !!}
            {!! Form::text('discount', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-12 form-group">
            {!! Form::label('Color') !!}
            {!! Form::select('colors_id', $colors, null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-12 text-center form-group" style="padding-top: 2%">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
        </div>
        {!! Form::close() !!}
        <!-- /.control-sidebar-menu -->
    @endif
    @include('moto.partials.asideCloseForm')


@endsection

