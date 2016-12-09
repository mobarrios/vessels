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

                <div class="col-xs-2 form-group">
                    <label>SubTotal</label>
                    <input ng-model="sTotal" type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Patentamiento</label>
                    <input ng-model="patentamiento"  type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Pack Service</label>
                    <input ng-model="packService" type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Seguro</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Flete</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Formularios</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Total</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-xs-2 form-group">
                    <label>Entrega</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Total a Financiar</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-xs-2 form-group">
                    <label>Cant. Cuotas</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
    <script>
        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope, $http)
        {
            $http.get("moto/modelsLists")
                    .then(function (response)
                    {
                        $scope.data = response.data;
                    });

            $scope.add = function(models){
                $scope.sTotal = models.active_list_price.price_net ;
                $scope.patentamiento = models.patentamiento;
                $scope.packService = models.pack_service;
            };
        });
    </script>
@endsection

