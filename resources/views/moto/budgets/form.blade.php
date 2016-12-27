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
            @if(isset($budget))

                <hr>

                {!! Form::model($budget,["route" => ['moto.'.$section.'.update'], 'method' => 'POST', 'id' => 'formPresupuesto']) !!}

                    {!! Form::hidden('clients_id',$client->id) !!}
                    {!! Form::hidden('id',$budget->id) !!}
                    {!! Form::hidden('branches_id',Auth::user()->branches_active_id) !!}

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
                                        <td class="text-danger" class="priceBudget">$ @{{ models.pivot.price_budget }}</td>
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
                                <label>Patentamiento</label>
                                {!! Form::number('patentamiento',null,['class' => 'form-control','ng-model' => 'patentamiento','ng-change' => 'calcular()']) !!}

                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Pack Service</label>
                                {!! Form::number('pack_service',null,['class' => 'form-control','ng-model' => 'packService','ng-change' => 'calcular()']) !!}
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Seguro</label>
                                {!! Form::number('seguro',null,['class' => 'form-control','ng-model' => 'seguro','ng-change' => 'calcular()']) !!}
                            </div>
                            <div class="col-xs-2 form-group">
                                <label>Flete</label>
                                {!! Form::number('flete',null,['class' => 'form-control','ng-model' => 'flete','ng-change' => 'calcular()']) !!}
                            </div>
                            <div class="col-xs-2 form-group">
                                <label>Formularios</label>
                                {!! Form::number('formularios',null,['class' => 'form-control','ng-model' => 'formularios','ng-change' => 'calcular()']) !!}
                            </div>
                            <div class="col-xs-2 form-group">
                                <label>Gastos Administrativos</label>
                                {!! Form::number('gastos_administrativos',null,['class' => 'form-control','ng-model' => 'gastosAdministrativos','ng-change' => 'calcular()']) !!}
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Descuento (%)</label>
                                {!! Form::number('descuento',null,['class' => 'form-control','ng-model' => 'descuento','ng-change' => 'calcular()']) !!}
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Anticipo</label>
                                {!! Form::number('anticipo',null,['class' => 'form-control','ng-model' => 'anticipo','ng-change' => 'calcular()']) !!}
                            </div>
                            <div class="col-xs-2 form-group">
                                <label>Total a Financiar</label>
                                {!! Form::text('a_financiar',null,['class' => 'form-control','readonly','ng-model' => 'aFinanciar','ng-change' => 'calcular()','id' => 'aFinanciar']) !!}
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Total a Financiar</label>

                                <select name="modo_financiamiento" class="form-control" id="financials">
                                    @foreach($financials as $financial)
                                        <optgroup label="{{$financial->name}}">
                                            @foreach($financial->FinancialsDues as $dues)
                                                <option value="{{$dues->coef}}" due="{{$dues->due}}">
                                                    {{$dues->due}} cuota/s
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Importe Cuota</label>
                                {!! Form::text('importe_cuota',null,['class' => 'form-control','readonly','ng-model' => 'importeCuota','ng-change' => 'calcular()', 'id' => 'importeCuota']) !!}
                            </div>



                            <div class="col-xs-2 form-group">
                                <label>Total</label>
                                <div class="col-xs-12 input-group">
                                    {!! Form::text('total',null,['class' => 'form-control','readonly','ng-model' => 'total','ng-change' => 'calcular()']) !!}
                                    <a id="sendForm" class="input-group-btn" title="Exportar PDF">
                                        <span class="btn btn-danger">
                                            <i class="fa fa-file-pdf-o"></i>
                                        </span>
                                    </a>

                                </div>
                            </div>


                            </div>
                    </div>

                {!! Form::close() !!}

            @endif
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


        $("#sendForm").on('click',function (ev) {
            ev.preventDefault();

            $('#formPresupuesto').submit();
        })


    @if(isset($budget))
        var coef;

        $("#financials option").each(function(ind, val){
            if($(val).val() == "{!! $budget->modo_financiamiento !!}")
                $(val).attr('selected','selected')
                coef = $(val).val();
        });

        $("#financials").on('change',function(ev){
            coef = $(this).val();
            var option = $(this).find("option[value='"+coef+"']");
            var dues = $(this).find("option[value='"+coef+"']").attr('due');
            var aFinanciar = $('#aFinanciar').val();

            $("#financials option").each(function(ind, val){
                if($(val).val() == coef)
                    $(val).attr('selected',false)

            });

            $(option).attr("selected","selected");

            var importeCuota = ( aFinanciar * coef ) / dues;
            $('#importeCuota').val(parseFloat(importeCuota).toFixed(2));
        });

        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope, $http) {
            $http.get("moto/budgetsItems/{!! $budget->id !!}")
                    .then(function (response) {
                        $scope.total = parseFloat(response.data[0]['price'])
                        $scope.stotal = parseFloat(response.data[0]['price'])
                        $scope.patentamiento = parseFloat(response.data[0]['patentamiento'])
                        $scope.packService = parseFloat(response.data[0]['pack_service'])
                        $scope.data = response.data[1]
                        $scope.seguro = {!! $budget->seguro !!}
                        $scope.flete = {!! $budget->flete !!}
                        $scope.formularios = {!! $budget->formularios !!}
                        $scope.gastosAdministrativos = {!! $budget->gastros_administrativos !!}
                        $scope.descuento = {!! $budget->descuento !!}
                        $scope.anticipo = {!! $budget->anticipo !!}
                        $scope.importeCuota = {!! $budget->importe_cuota !!}
                        $scope.aFinanciar = {!! $budget->a_financiar !!}
                        $scope.calcular();

                    });

//            $("#financials").on('change',function(ev){
//                var coef = $(this).val();
//                var dues = $(this).find("option[value='"+coef+"']").attr('due');
//                var aFinanciar = $scope.aFinanciar;
//
//                var importeCuota = ( aFinanciar * coef ) / dues;
//                $scope.importeCuota = parseFloat(importeCuota).toFixed(2);
//            });

            $scope.calcular = function()
            {
                if( $scope.descuento != null && $scope.descuento != 0) {
                    var total = parseFloat(($scope.stotal + $scope.seguro + $scope.patentamiento + $scope.packService + $scope.flete + $scope.formularios + $scope.gastosAdministrativos) * $scope.descuento / 100).toFixed(2);
                    $scope.total = parseFloat(($scope.stotal + $scope.seguro + $scope.patentamiento + $scope.packService + $scope.flete + $scope.formularios + $scope.gastosAdministrativos) - total).toFixed(2);

                }else
                    $scope.total =  parseFloat($scope.stotal + $scope.seguro + $scope.patentamiento + $scope.packService + $scope.flete + $scope.formularios + $scope.gastosAdministrativos).toFixed(2);

                $scope.financiar();
            };

            $scope.financiar = function()
            {
                $scope.aFinanciar = parseFloat($scope.total -  $scope.anticipo).toFixed(2) ;
            };
        });

    @endif
    </script>
@endsection

