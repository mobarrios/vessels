@extends('template.model_form')

@section('form_title')
    Nuevo Presupuesto
@endsection

@section('form_inputs')

    <div class="modal-body">
        <div>
            <div>

                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('name', "NOMBRE") !!}
                    {!! Form::text('name', $client->fullName, ['class'=>'form-control','disabled']) !!}
                </div>

                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('name', "DNI") !!}
                    {!! Form::text('email', $client->dni, ['class'=>'form-control','disabled']) !!}
                </div>

                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('name', "SEXO") !!}
                    {!! Form::text('sexo', $client->sexo, ['class'=>'form-control','disabled']) !!}
                </div>

                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('name', "EMAIL") !!}
                    {!! Form::text('dni', $client->email, ['class'=>'form-control','disabled']) !!}
                </div>




                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('nacionality', "NACIONALIDAD") !!}
                    {!! Form::text('nacionality', $client->nacionality ? $client->nacionality : "SIN DATO", ['class'=>'form-control','disabled']) !!}
                </div>

                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('phone1', "TELÉFONO") !!}
                    {!! Form::text('phone1', $client->phone1 ? $client->phone1 : "SIN DATO", ['class'=>'form-control','disabled']) !!}
                </div>

                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('address', "DIRECCIÓN") !!}
                    {!! Form::text('address', $client->address ? $client->address : "SIN DATO", ['class'=>'form-control','disabled']) !!}
                </div>

                <div class="col-xs-12 col-lg-3 form-group">
                    {!! Form::label('city', "CIUDAD") !!}
                    {!! Form::text('city', $client->city ? $client->city : "SIN DATO", ['class'=>'form-control','disabled']) !!}
                </div>



                <div class="col-xs-12 col-lg-4 form-group">
                    {!! Form::label('location', "LOCALIDAD") !!}
                    {!! Form::text('location', $client->location ? $client->location : "SIN DATO", ['class'=>'form-control','disabled']) !!}
                </div>




                <div class="col-xs-12 col-lg-4 form-group">
                    {!! Form::label('province', "PROVINCIA") !!}
                    {!! Form::text('province', $client->province ? $client->province : "SIN DATO", ['class'=>'form-control','disabled']) !!}
                </div>



                <div class="col-xs-12 col-lg-4 form-group" style="padding-top: 2%;">
                    @if(!isset($budget))
                    {!! Form::open(['route'=> [config('models.'.$section.'.storeRoute')],  'title' =>"Crear presupuesto"]) !!}
                        {!! Form::hidden('clients_id', $client->id) !!}
                        <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
                    @endif

                        @if(isset($budget))
                            <a href="#" data-action="{!! route("moto.".$section.".addItem", $client->id) !!}" data-toggle="control-sidebar" class="btn btn-default"><span class="fa fa-plus"></span></a>
                        @endif
                    {!! Form::close() !!}



                </div>
            </div>

            <span class="clearfix"></span>
            <hr>
            <div ng-app="myApp">
                <div ng-controller="myCtrl">

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Marca</td>
                                <td>Modelo</td>
                                <td>$ Presupuestado</td>
                                <td>$ Lista</td>
                                <td>Acciones</td>

                            </tr>
                            <tr ng-repeat="models in data" >
                                <td>@{{ models.brands.name }}</td>
                                <td>@{{ models.name }}</td>
                                <td class="text-danger">$ @{{ models.pivot.price_budget }}</td>
                                <td class="text-danger">$ @{{ models.pivot.price_actual }}</td>
                                <td>
                                    <a href="moto/budgets/deleteItem/{{ $client->id }}/{{ $budget->id }}/@{{ models.pivot.id }}"><span class="text-danger fa fa-trash"></span></a>
                                </td>
                                <td>
                                    <a href="moto/budgets/editItem/{{ $client->id }}/{{ $budget->id }}/@{{ models.pivot.id }}"><span class="text-success fa fa-edit"></span></a>
                                </td>
                            </tr>

                        </table>
                    </div>



                    <span class="clearfix"></span>
                    <hr>


                    <h3 class="text-blue" ng-bind="modelName"><strong></strong></h3>
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
                    <div class="col-xs-2 form-group">
                        <label>Total</label>
                        <input ng-model="Stotal" type="text" class="form-control">
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

                    <div class="col-xs-2 form-group" style="padding-top: 2%">
                        @if(isset($budget))
                            <a href="{{route('moto.'.$section.'.pdf', $budget->id)}}" target="_blank" class="btn btn-default" title="Exportar PDF">
                                <i class="fa bg-danger fa-file-pdf-o"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection

@section('formAside')
    @include('moto.partials.asideOpenForm')
    @if(isset($budget))

        @if(isset($modelItems))
            {!! Form::model($modelItems,['route'=> ['moto.'.$section.'.editItem', $client->id, $budget->id, $modelItems->id], 'files' =>'true', 'method' => 'post']) !!}
        @else
            {!! Form::open(['route'=> ['moto.'.$section.'.addItem', $client->id], 'files' =>'true']) !!}
        @endif

        {!! Form::hidden('budgets_id',$budget->id) !!}
        {!! Form::hidden('price_actual',null,['class' => 'price_actual']) !!}


        <div class="col-xs-12 form-group">
            {!! Form::label('Modelo') !!}
            {!! Form::select('models_id', $items,null, ['class'=>'form-control select2', "placeholder" => "Seleccione modelo"]) !!}
        </div>

        <div class="col-xs-12 col-lg-6 form-group">
            {!! Form::label('Subtotal') !!}
            {!! Form::number('price_budget', null, ['class'=>'form-control sTotal']) !!}
        </div>

        <div class="col-xs-12 col-lg-6 form-group">
            {!! Form::label('Patentamiento') !!}
            {!! Form::number(null, null, ['class'=>'form-control patentamiento', 'disabled' => 'disabled']) !!}
        </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Pack service') !!}
            {!! Form::number(null, null, ['class'=>'form-control packService', 'disabled' => 'disabled']) !!}
        </div>

        {{--<div class="col-xs-12 col-lg-6 form-group">--}}
            {{--{!! Form::label('Seguro') !!}--}}
            {{--{!! Form::number('seguro', null, ['class'=>'form-control seguro']) !!}--}}
        {{--</div>--}}

        {{--<div class="col-xs-12 col-lg-6 form-group">--}}
            {{--{!! Form::label('Flete') !!}--}}
            {{--{!! Form::number('flete', null, ['class'=>'form-control flete']) !!}--}}
        {{--</div>--}}

        {{--<div class="col-xs-12 col-lg-6 form-group">--}}
            {{--{!! Form::label('Formularios') !!}--}}
            {{--{!! Form::number('formularios', null, ['class'=>'form-control formularios']) !!}--}}
        {{--</div>--}}


        <div class="col-xs-12 text-center form-group" style="padding-top: 2%">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
        </div>
        {!! Form::close() !!}
        <!-- /.control-sidebar-menu -->
    @endif
    @include('moto.partials.asideCloseForm')
@endsection


@section('js')
    <script>
        $("select[name='models_id']").on('change', function(ev){
            var id = $(this).val();

            var parent = $(this).parent().parent();

           $.ajax({
               method: 'GET',
               url: 'moto/modelLists/'+id,
               success: function(data){
                   $(".sTotal").val(data.active_list_price.price_net);
                   $(".price_actual").val(data.active_list_price.price_net);
                   $(".patentamiento").val(data.patentamiento);
                   $(".packService").val(data.pack_service);
               }
           })
        });


    @if(isset($budget))
        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope, $http) {
            $http.get("moto/budgetsItems/{!! $budget->id !!}")
                    .then(function (response) {
                        $scope.data = response.data;
                    });

            $scope.add = function (models)
            {
                $scope.modelName =  models.brands.name +' '+models.name;
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


    @endif
    </script>
@endsection

