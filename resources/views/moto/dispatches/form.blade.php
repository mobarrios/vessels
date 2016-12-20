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

    <div ng-app="myApp">
        <div ng-controller="myCtrl">

            <div class="col-xs-2  form-group">
                {!! Form::label('Fecha Remito') !!}
                {!! Form::text('date', null, ['class'=>'datePicker form-control']) !!}
            </div>
            <div class="col-xs-4 form-group">
                {!! Form::label('Nro. Remito') !!}
                {!! Form::text('number', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Pedido de Mercaderia') !!}
                <select class="form-control"  ng-model="itemSelected">
                    @foreach($providers as $provider)
                        <optgroup label="{{$provider->name}}">
                            @foreach($provider->PurchasesOrders as $purchasesOrder)
                                <option ng-click="onCategoryChange($event)" value="{{$purchasesOrder->id}}"># {{$purchasesOrder->id }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>

            <div class="col-xs-12 form-group">
                {!! Form::label('Imagen Remito') !!}
                {!! Form::file('image') !!}
            </div>


            <table class="table">
                <tr ng-repeat="x in data.purchases_orders_items">
                    <td><input  type="checkbox"></td>

                    <td>@{{ x.quantity }}</td>
                    <td>@{{ x.models.brands.name }} : @{{ x.models.name }}</td>
                    <td>@{{ x.colors.name }}</td>


                </tr>
            </table>

            {!! Form::close() !!}
        </div>
    </div>

@endsection


@section('js')
    <script>
        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope, $http) {

            $scope.onCategoryChange = function (event) {
                var id = event.currentTarget.getAttribute('value');

                $http.get("moto/purchasesOrdersFind/"+id)
                        .then(function (response) {
                            $scope.data = response.data;
                            console.log(response.data);
                        });

            };

        });
    </script>
@endsection
