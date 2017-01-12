@extends('template.model_form')

@section('form_title')
    Nuevo Remito
@endsection

@section('form_inputs')
    <div ng-app="myApp">
        <div ng-controller="myCtrl">
            @if(isset($models))
                {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
            @else
                {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
            @endif

            <div class="col-xs-2  form-group">
                {!! Form::label('Fecha Remito') !!}
                {!! Form::text('date', null, ['class'=>'datePicker form-control']) !!}
            </div>

            <div class="col-xs-2 form-group">
                {!! Form::label('Nro. Remito') !!}
                {!! Form::text('number', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-2 form-group">
                {!! Form::label('Imagen Remito') !!}
                {!! Form::file('image',['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-2 form-group">
                {!! Form::label('Pedido de Mercaderia') !!}


                <select class="form-control">
                    <option>Seleccionar...</option>
                    <optgroup ng-repeat="x in datos" label="@{{ x.name }}">
                        <option ng-repeat="a in x.purchases_orders_confirmed" ng-click="onCategoryChange(a.id)">
                            # @{{ a.id }}</option>
                    </optgroup>
                </select>
            </div>


            <div class="col-xs-2 form-group">
                {!! Form::label('Sucursal') !!}
                {!! Form::select('branches_id',$branches ,null, ['class'=>'select2 form-control']) !!}
            </div>

            <div class="col-xs-2 form-group" style="padding-top: 2%">
                <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
                @if(isset($models))
                    <a href="#" data-action="{!! route("moto.dispatches.addItems") !!}" data-toggle="control-sidebar"
                       class="btn btn-default"><span class="fa fa-plus"></span></a>
                @endif
            </div>

            {!! Form::close() !!}

            <div class="col-xs-12 ">
                <table class="table ">
                    <thead>
                    <th>#</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody>

                    <tr ng-repeat="purchase in purchases ">
                        <td>@{{ purchase.id }}</td>
                        <td>@{{ purchase.purchases_orders_items.models.brands.name }}</td>
                        <td>@{{ purchase.purchases_orders_items.models.name }}</td>
                        <td>@{{ purchase.purchases_orders_items.colors.name }}</td>
                        <td><input class="form-control input-sm n_motor_@{{ purchase.id }}" type="text"
                                   placeholder="N Motor"></td>
                        <td><input class="form-control input-sm n_chasis_@{{ purchase.id }}" type="text"
                                   placeholder="N Chasis"></td>
                        <td>
                            <button class="btn" ng-click="addITem(purchase)"><span class="fa fa-share"></span></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


            @if(isset($models))
                <div class="col-xs-12">
                    <table class="table">
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Color</th>
                            <th>N Motor</th>
                            <th>N Cuadro</th>
                        </tr>
                        <tbody>
                        @foreach($models->DispatchesItems as $item)
                            <tr>
                                <td>{{$item->Items->Models->Brands->name}}</td>
                                <td>{{$item->Items->Models->name}}</td>
                                <td>{{$item->Items->Colors->name}}</td>
                                <td>{{$item->Items->n_motor}}</td>
                                <td>{{$item->Items->n_cuadro}}</td>
                                <td>
                                    <a href="{{route('moto.dispatches.deleteItems',[$item->id,$models->id])}}"><span
                                                class="text-danger fa fa-trash"></span></a>
                                </td>
                                <td>
                                    <a href="{{route('moto.dispatches.editItems',[$item->id,$models->id])}}"><span
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
                    {!! Form::model($modelItems,['route'=> ['moto.dispatches.updateItems', $modelItems->id,$models->id], 'files' =>'true']) !!}
                @else
                    {!! Form::open(['route'=> ['moto.dispatches.addItems' ], 'files' =>'true']) !!}
                @endif

                {!! Form::hidden('dispatches_id',$models->id) !!}
                {!! Form::hidden('branches_id',$models->Brancheables->first()->Branches->id) !!}

                <div class="col-xs-12 form-group">
                    {!! Form::label('Modelo') !!}
                    {!! Form::select('models_id', $models_lists, null, ['class'=>'form-control select2']) !!}
                </div>
                <div class="col-xs-12 form-group">
                    {!! Form::label('Color') !!}
                    {!! Form::select('colors_id', $colors, null, ['class'=>'form-control select2']) !!}
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('N Motor') !!}
                    {!! Form::text('n_motor', null, ['class'=>'form-control']) !!}
                </div>
                <div class="col-xs-12 form-group">
                    {!! Form::label('N Cuadro') !!}
                    {!! Form::text('n_cuadro', null, ['class'=>'form-control']) !!}
                </div>

                <div class="col-xs-12 text-center form-group" style="padding-top: 2%">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
                </div>
                {!! Form::close() !!}
                        <!-- /.control-sidebar-menu -->
            @endif
            @include('moto.partials.asideCloseForm')
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script>


        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope, $http) {

            $scope.datos = {!!$providers!!};

            $scope.onCategoryChange = function (id) {
                $http.get("moto/dispatchesItems/" + id)
                        .then(function (response) {
                            $scope.purchases = response.data;
                        });
            };

            $scope.addITem = function (purchase) {

                var n_motor  = $('.n_motor_' + purchase.id).val();
                var n_chasis = $('.n_motor_' + purchase.id).val();

                if(n_motor == "")
                        n_motor = "c";


            };


        });
    </script>
@endsection
