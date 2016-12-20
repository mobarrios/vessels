@extends('template.model_form')

@section('form_title')
    Nuevo Presupuesto
@endsection

@section('form_inputs')

    <div class="modal-body">
        <div ng-app="myApp">
            <div ng-controller="myCtrl">

                <div class="input-group">
                    <input ng-model="q" type="text" class="form-control"
                           placeholder="Buscar...">
                        <span class="input-group-btn">
                        <button type="button"
                                class="btn btn-default"><span class="fa fa-search"></span>
                        </button>
                        </span>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Marca</td>
                            <td>Modelo</td>
                            <td>$ Contado</td>
                            <td>$ Lista</td>
                            <td>Dto. Max</td>
                            <td>Promo</td>


                        </tr>
                        <tr ng-repeat="models in data | filter:q ">
                            <td>@{{ models.brands.name }}</td>
                            <td>@{{ models.name }}</td>
                            <td class="text-danger">$ @{{ models.active_list_price.price_net }}</td>
                            <td>$ @{{ models.active_list_price.price_list }}</td>
                            <td>% @{{ models.active_list_price.max_discount }}</td>
                            <td>
                                <label class="label label-default"> Ahora 12</label>
                                <label class="label label-default"> Ahora 18</label>
                            </td>
                            <td>
                                <button ng-click="add(models)" class="btn btn-sm">=)</button>
                            </td>
                        </tr>
                    </table>
                </div>

                <h3 class="text-blue" ng-bind="modelName"><strong></strong></h3>
                <div class="col-xs-2 form-group">
                    <label>SubTotal</label>
                    <input ng-model="sTotal" type="number" class="form-control" ng-change="calcular()" value="0">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Patentamiento</label>
                    <input ng-model="patentamiento" type="number" class="form-control" ng-change="calcular()">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Pack Service</label>
                    <input ng-model="packService" type="number" class="form-control" ng-change="calcular()">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Seguro</label>
                    <input ng-model="seguro" type="number" class="form-control" ng-change="calcular()">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Flete</label>
                    <input ng-model="flete" type="number" class="form-control" ng-change="calcular()">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Formularios</label>
                    <input ng-model="formularios "type="number" class="form-control" ng-change="calcular()">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Gastos Administrativos</label>
                    <input ng-model="gastos "type="number" class="form-control" ng-change="calcular()">
                </div>

                <div class="col-xs-2 form-group">
                    <label>Descuento</label>
                    <input ng-model="gastos "type="number" class="form-control" ng-change="calcular()">
                </div>
                <div class="col-xs-8 form-group">
                    <label>Total</label>
                    <input ng-model="total" type="text" class="form-control">
                </div>

                <div class="col-xs-2 form-group">
                    <label>Anticipo</label>
                    <input type="number" class="form-control" ng-model="entrega" ng-change="financiar()">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Total a Financiar</label>
                    <input ng-model="aFinanciar" type="number" class="form-control">
                </div>

                <div class="col-xs-2 form-group">
                    <label>Total a Financiar</label>
                    <select class="form-control" ng-model="itemSelected">
                        @foreach($financials as $financial)
                            <optgroup label="{{$financial->name}}">
                                @foreach($financial->FinancialsDues as $dues)
                                    <option ng-click="onCategoryChange($event)" value="{{$dues->coef}}"
                                            due="{{$dues->due}}">{{$dues->due}} cuota/s
                                    </option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-2 form-group">
                    <label>Importe Cuota</label>
                    <input ng-model="importeCuota" type="number" class="form-control">
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
    <script>
        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope, $http) {
            $http.get("moto/modelsLists")
                    .then(function (response) {
                        $scope.data = response.data;
                    });

            $scope.add = function (models)
            {
                $scope.modelName =  models.brands.name +' '+models.name;
                $scope.sTotal = models.active_list_price.price_net;
                $scope.patentamiento = models.patentamiento;
                $scope.packService = models.pack_service;
                $scope.seguro = 0;
                $scope.flete = 0;
                $scope.formularios = 0;
                $scope.calcular();
            };


            $scope.onCategoryChange = function (event) {
                var coef = event.currentTarget.getAttribute('value');
                var dues = event.currentTarget.getAttribute('due');
                var aFinanciar = $scope.aFinanciar;

                    $scope.importeCuota = ( aFinanciar * coef ) / dues;
            };

            $scope.calcular = function()
            {
             $scope.total =  $scope.sTotal + $scope.patentamiento + $scope.packService + $scope.seguro + $scope.flete + $scope.formularios;
                console.log($scope.total);
                
            };

            $scope.financiar = function()
            {
              $scope.aFinanciar = $scope.total -  $scope.entrega ;
            };
        });
    </script>
@endsection

