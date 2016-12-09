@extends('template.model_form')

@section('form_title')
    Nuevo Presupuesto
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

    <div class="modal-body">
        <div ng-app="myApp">
            <div ng-controller="myCtrl">

                <div class="input-group">
                    <input ng-model="q"  type="text" class="form-control"
                           placeholder="Buscar...">
                                    <span class="input-group-btn">
                                        <button  type="button"
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
                               <button><span class="fa fa-share"></span></button>
                            </td>
                        </tr>
                    </table>
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
        });
    </script>
@endsection

