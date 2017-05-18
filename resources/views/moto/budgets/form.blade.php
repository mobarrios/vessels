@extends('template.model_form')

@section('css')
    <style>
        .autocompletedemoCustomTemplate .autocomplete-custom-template li {
            border-bottom: 1px solid #ccc;
            height: auto;
            padding-top: 8px;
            padding-bottom: 8px;
            white-space: normal; }

        .autocompletedemoCustomTemplate .autocomplete-custom-template li:last-child {
            border-bottom-width: 0; }

        .autocompletedemoCustomTemplate .autocomplete-custom-template .item-title,
        .autocompletedemoCustomTemplate .autocomplete-custom-template .item-metadata {
            display: block;
            line-height: 2; }

        .autocompletedemoCustomTemplate .autocomplete-custom-template .item-title md-icon {
            height: 18px;
            width: 18px; }

        .search{
            color: rgba(0,0,0,0.87);
            background-color: rgb(250,250,250);
            padding: 16px;

        }

        .select2-template-title{
            font-size: 12px;
            font-weight: bold;
            display: block;
            width:100%;
        }

        .select2-template-text{
            font-size: 12px;
            display: block;
            width:100%;
            padding-left:5px;
        }

        .select2-template-container{
            border-bottom: 1px solid #ddd;
        }

        #branches + span.select2-container{
            width: 100% !important;
        }


        .select2-container--default .select2-results__option[aria-selected=true]{
            background-color: rgba(162,162,162,0.21);

        }

    </style>
@endsection


@section('form_title')
    Nuevo Presupuesto
@endsection

@section('form_inputs')

    <div class="modal-body">
        <div>
            <div ng-app="buscador">

                @if(!isset($models))
                    <div class="search" ng-controller="buscadorController" >

                        <p>Antes de crear un prospecto, busque si ya existe.</p>
                        <select id="search" class="select2 form-control">
                            <option value="seleccione">Seleccione... ~  ~ </option>
                            @forelse($prospectos as $prospecto)
                                <option value="{!! $prospecto->id !!}">
                                    {!! $prospecto->fullname !!} ~ {!! $prospecto->dni !!} ~ {!! $prospecto->email !!} ~ {!! $prospecto->phone !!}

                                </option>
                            @empty

                            @endforelse
                        </select>
                    </div>
                @endif

                <div>
                    @if(isset($client))
                        {!! Form::model($client,['route'=> [config('models.prospectos.updateRoute')],  'title' =>"Crear prospecto",'ngApp' => 'buscador','ng-controller' => 'buscadorController', 'id' => 'formClient']) !!}
                    @else
                        {!! Form::open(['route'=> [config('models.prospectos.storeRoute')],  'title' =>"Crear prospecto",'ngApp' => 'buscador','ng-controller' => 'buscadorController', 'id' => 'formClient']) !!}
                    @endif

                    {!! Form::hidden('model',null,['ng-model' => 'model','id' => 'modelId']) !!}
                    {!! Form::hidden('budgets',true) !!}

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('last_name', "APELLIDO") !!}
                        {!! Form::text('last_name', null, ['class'=>'form-control','ng-model' => 'last_name']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('name', "NOMBRE") !!}
                        {!! Form::text('name', null, ['class'=>'form-control','ng-model' => 'name']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('dni', "DNI") !!}
                        {!! Form::text('dni', null, ['class'=>'form-control','ng-model' => 'dni']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('sexo', "SEXO") !!}
                        {!! Form::select('sexo', ['masculino' => 'masculino','femenino' => 'femenino'],'masculino', ['class'=>'form-control','ng-model' => 'sexo']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('email', "EMAIL") !!}
                        {!! Form::text('email', null, ['class'=>'form-control','ng-model' => 'email']) !!}
                    </div>




                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('nacionality', "NACIONALIDAD") !!}
                        {!! Form::text('nacionality', null, ['class'=>'form-control','ng-model' => 'nacionality']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('phone1', "TELÉFONO") !!}
                        {!! Form::text('phone1', null, ['class'=>'form-control','ng-model' => 'phone1']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('address', "DIRECCIÓN") !!}
                        {!! Form::text('address', null, ['class'=>'form-control','ng-model' => 'address']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('city', "CIUDAD") !!}
                        {!! Form::text('city', null, ['class'=>'form-control','ng-model' => 'city']) !!}
                    </div>



                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('location', "LOCALIDAD") !!}
                        {!! Form::text('location', null, ['class'=>'form-control','ng-model' => 'location']) !!}
                    </div>




                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('province', "PROVINCIA") !!}
                        {!! Form::text('province', null, ['class'=>'form-control','ng-model' => 'province']) !!}
                    </div>



                    <div class="col-xs-12 col-lg-3 form-group" style="padding-top: 2%;">
                        @if(!isset($models))
    {{--                        {!! Form::hidden('clients_id', $client->id) !!}--}}
                            <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
                            <button type="reset" id="reset" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                        @endif

                            @if(isset($models))
                                <a href="{!! route("moto.".$section.".addItems", $models->id) !!}" class="btn btn-default"><span class="fa fa-plus"></span></a>
                            @endif
                        {!! Form::close() !!}



                    </div>
                </div>


            <span class="clearfix"></span>
            @if(isset($models))

                <hr>

                {!! Form::model($models,["route" => 'moto.'.$section.'.update', 'method' => 'POST', 'id' => 'formPresupuesto']) !!}

                    {!! Form::hidden('clients_id',$client->id) !!}
                    {!! Form::hidden('id',$models->id) !!}
                    {!! Form::hidden('branches_id',Auth::user()->branches_active_id) !!}
                    {!! Form::hidden('users_id',Auth::user()->id) !!}

                    <div>
                        <div ng-controller="myCtrl">

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Marca</td>
                                        <td>Modelo</td>
                                        <td>$ Presupuestado</td>
                                        <td>$ Lista</td>
                                        <td colspan="2">Acciones</td>

                                    </tr>
                                    <tr ng-repeat="models in data" >
                                        <td>@{{ models.brands.name }}</td>
                                        <td>@{{ models.name }}</td>
                                        <td class="text-danger" class="priceBudget">$ @{{ models.pivot.price_budget }}</td>
                                        <td class="text-danger">$ @{{ models.pivot.price_actual }}</td>
                                        <td>
                                            <a href="moto/budgets/deleteItem/@{{ models.pivot.id }}/{{ $models->id }}"><span class="text-danger fa fa-trash"></span></a>
                                        </td>
                                        <td>
                                            <a href="moto/budgets/editItem/@{{ models.pivot.id }}/{{ $models->id }}" class="editItems" data-id="@{{ models.pivot.id }}"><span class="text-success fa fa-edit"></span></a>
                                        </td>
                                    </tr>

                                </table>
                            </div>


                            <span class="clearfix"></span>
                            <hr>


                            @if($models->allItems)
                                @include('moto.partials.additionals',['modelos' => $models->modelsList()])
                            @endif


                            <span class="clearfix"></span>
                            <hr>


                            <h3 class="text-blue" ng-bind="modelName"><strong></strong></h3>

                            {{--<div class="col-xs-2 form-group">--}}
                                {{--<label>Patentamiento</label>--}}
                                {{--{!! Form::number('patentamiento',null,['class' => 'form-control','ng-model' => 'patentamiento','ng-change' => 'calcular()']) !!}--}}

                            {{--</div>--}}

                            {{--<div class="col-xs-2 form-group">--}}
                                {{--<label>Pack Service</label>--}}
                                {{--{!! Form::number('pack_service',null,['class' => 'form-control','ng-model' => 'packService','ng-change' => 'calcular()']) !!}--}}
                            {{--</div>--}}

                            {{--<div class="col-xs-2 form-group">--}}
                                {{--<label>Seguro</label>--}}
                                {{--{!! Form::number('seguro',null,['class' => 'form-control','ng-model' => 'seguro','ng-change' => 'calcular()']) !!}--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-2 form-group">--}}
                                {{--<label>Flete</label>--}}
                                {{--{!! Form::number('flete',null,['class' => 'form-control','ng-model' => 'flete','ng-change' => 'calcular()']) !!}--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-2 form-group">--}}
                                {{--<label>Formularios</label>--}}
                                {{--{!! Form::number('formularios',null,['class' => 'form-control','ng-model' => 'formularios','ng-change' => 'calcular()']) !!}--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-2 form-group">--}}
                                {{--<label>Gastos Administrativos</label>--}}
                                {{--{!! Form::number('gastos_administrativos',null,['class' => 'form-control','ng-model' => 'gastosAdministrativos','ng-change' => 'calcular()']) !!}--}}
                            {{--</div>--}}

                            <div class="col-xs-2 form-group">
                                <label>Descuento (%)</label>
                                {!! Form::number('descuento',null,['class' => 'form-control','ng-model' => 'descuento','ng-change' => 'calcular()','min' => '0']) !!}
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Anticipo</label>
                                {!! Form::number('anticipo',null,['class' => 'form-control','ng-model' => 'anticipo','ng-change' => 'calcular()','min' => '0']) !!}
                            </div>
                            <div class="col-xs-2 form-group">
                                <label>Total a Financiar</label>
                                {!! Form::text('a_financiar',null,['class' => 'form-control','readonly','ng-model' => 'aFinanciar','ng-change' => 'calcular()','id' => 'aFinanciar','min' => '0']) !!}
                            </div>

                            <div class="col-xs-2 form-group">
                                <label>Modo de Financiamiento</label>

                                <select name="modo_financiamiento" class="form-control" id="financials">
                                    @foreach($financials as $i => $financial)
                                        <optgroup label="{{$financial->name}}">
                                            @foreach($financial->FinancialsDues as $ind => $dues)
                                                <option value="{{$dues->coef}}" data-id="due{!! $i.$ind !!}" due="{{$dues->due}}">
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
                                    {!! Form::text('total',$models->totalAdditionalsAmount == '0' ? 0 : $models->totalAdditionalsAmount,['class' => 'form-control','readonly','ng-model' => 'total','ng-change' => 'calcular()']) !!}
                                </div>
                            </div>



                        </div>

                    </div>



                {!! Form::close() !!}

                        <div class="col-xs-12">

                            <div class="btn-group" role="group" aria-label="...">
                                <a id="sendForm" class="btn btn-danger" title="Exportar PDF"><i class="fa fa-file-pdf-o"></i></a>
                                <a class="btn btn-success" title="Vender" id="sendVenderPresupuestado"  data-toggle="modal" data-target="#modalVender">
                                    <i class="fa fa-money"></i>
                                </a>


                            </div>
                        </div>


            @endif
            </div>

        </div>
    </div>



@endsection



@if(isset($models))
    @section('modal')
        <div class="modal fade" id="modalVender" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    {!! Form::open(['route'=> 'moto.sales.storeFromBudgets']) !!}
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Generar venta</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel">
                                <div class="panel-body">
                                    {!! Form::hidden('clients_id',$models->Clients->id) !!}
                                    {!! Form::hidden('budgets_id',$models->id) !!}
                                    {!! Form::hidden('users_id',Auth::user()->id) !!}

                                    <div class="col-xs-12 col-md-6 form-group">
                                        {!! Form::label('Fecha Pactada') !!}
                                        {!! Form::text('date_confirm', null, ['class'=>'datePicker form-control']) !!}
                                    </div>


                                    <div class="col-xs-12 col-md-6 form-group">
                                        {!! Form::label('Sucursal de Entrega') !!}
                                        {!! Form::select('branches_confirm_id',$branches ,null, ['class'=>' form-control select2','id'=>'branches']) !!}
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">
                                Enviar
                            </button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    @endsection

@endif


@section('js')
    {{--<script src="js/aside2.js"></script>--}}
    <script src="js/asideModelsColors.js"></script>

    <script>
        var routeBase = window.location.href.split('moto/')[0]
        var rutaEdit;

        $("#reset").on('click', function () {
            $('#modelId').val("")
            $('#formClient').attr('action',routeBase+'moto/clients/store')
        })

        var app = angular.module("buscador", []);



        app.controller("buscadorController", function ($scope, $http) {
            $scope.model = ""
            $scope.last_name = ""
            $scope.name = ""
            $scope.dni = ""
            $scope.email = ""
            $scope.sexo = ""
            $scope.nacionality = ""
            $scope.phone1 = ""
            $scope.address = ""
            $scope.city = ""
            $scope.location = ""
            $scope.province = ""



            @if(isset($client) || $errors->any())
                    $scope.model = "{!! $client->id or ""!!}"
                $scope.last_name = "{!! $client->last_name or old('last_name')!!}"
                $scope.name = "{!! $client->name or old('name') !!}"
                $scope.dni = "{!! $client->dni or old('dni')!!}"
                $scope.email = "{!! $client->email or old('email')!!}"
                $scope.sexo = "{!! $client->sexo or old('sexo')!!}"
                $scope.nacionality = "{!! $client->nacionality or old('nacionality')!!}"
                $scope.phone1 = "{!! $client->phone1 or old('phone1')!!}"
                $scope.address = "{!! $client->address or old('address')!!}"
                $scope.city = "{!! $client->city or old('city')!!}"
                $scope.location = "{!! $client->location or old('location')!!}"
                $scope.province = "{!! $client->province or old('province')!!}"
            @endif

            $('#search').on('change',function(ev){
                $("#search>option[value='seleccione']").remove();
                var select = $(this);
                var option = select.find('option:selected');

                $('#modelId').val(option.val());

                $http.get("moto/clientsSearch/"+option.val())
                        .then(function (response) {
                            $('#formClient').attr('action',routeBase+'moto/clients/update/'+option.val())
                            $scope.model = option.val()
                            $scope.last_name = response.data['last_name']
                            $scope.name = response.data['name']
                            $scope.dni = response.data['dni']
                            $scope.email = response.data['email']
                            $scope.sexo = response.data['sexo']
                            $scope.nacionality = response.data['nacionality']
                            $scope.phone1 = response.data['phone1']
                            $scope.address = response.data['address']
                            $scope.city = response.data['city']
                            $scope.location = response.data['location']
                            $scope.province = response.data['province']
                        });

            });


        });


        $("#sendForm").on('click',function (ev) {
            ev.preventDefault();

            $('#formPresupuesto').submit();
        })


                @if(isset($models))
        var coef;

        $("#financials option").each(function(ind, val){
            if($(val).val() == "{!! $models->modo_financiamiento !!}"){
                $(val).attr('selected','selected')
                coef = $(val);
            }
        });


        $("#financials").on('click',function(ev){
            coef = $(this).find('option:selected');

        })

        $("#financials").on('change',function(ev){

            var option = $(this).find("option[data-id='"+$(coef).attr('data-id')+"']");
            var dues = $(this).find("option[data-id='"+$(coef).attr('data-id')+"']").attr('due');
            var aFinanciar = $('#aFinanciar').val();

            $("#financials option").each(function(ind, val){
                if($(val).attr('data-id') == $(coef).attr('data-id'))
                    $(val).attr('selected',false);
            });

//                $(option).attr("selected","selected");

            var importeCuota = ( aFinanciar * $(option).val() ) / dues;
            $('#importeCuota').val(parseFloat(importeCuota).toFixed(2));
        });

        //        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope, $http) {
            $http.get("moto/budgetsItems/{!! $models->id !!}")
                    .then(function (response) {

                        $scope.stotal = parseFloat(response.data[0]['price'])


                        $scope.data = response.data[1]
                        $scope.descuento = {!! $models->descuento or '0' !!}
                        $scope.anticipo = {!! $models->anticipo or '0' !!}
                        $scope.importeCuota = {!! $models->importe_cuota or '0' !!}
                        $scope.aFinanciar = {!! $models->a_financiar or '0' !!}
                        $scope.calcular();

//                        var modelos = [];
//
//                        for(var m in $scope.data) {
//                            var obj = {
//                                modelo : $scope.data[m].id,
//                                color : $scope.data[m].pivot.colors_id
//                            }
//
//                            modelos.push(obj)
//                        }
//
//
//
//                        $.ajax({
//                            method: 'get',
//                            data: $.extend({},modelos),
//                            url: 'moto/branchesWithStockByModels',
//                            success: function(data){
//                                $("#branches option").remove();
//
//                                for(var i in data){
//                                    $("#branches").append($("<option value='"+i+"'>"+data[i]+"<option>"))
//                                }
//
//
//                            }
//                        })


                    });



                    $scope.calcular = function()
            {
                if( ($scope.descuento != null) && (parseFloat($scope.descuento) != 0)) {
                    var total = parseFloat(($scope.stotal  * $scope.descuento) / 100).toFixed(2);
                    $scope.total = parseFloat($scope.stotal - total).toFixed(2);


                }else
                    $scope.total =  parseFloat(parseFloat($('input[name=total]').attr('value'))+$scope.stotal).toFixed(2);


                $scope.financiar();
            };

            $scope.financiar = function()
            {
                $scope.aFinanciar = parseFloat($scope.total -  $scope.anticipo).toFixed(2) ;
            };








            var contenedor = $("#adicionales")
            var save = $(".saveAdicionales")
            var remove = $(".adicionales a[btn-danger]")


            var select = contenedor.find('select[name=additionals_id]')
            var amount = contenedor.find('input[name=amount]')
            var entity = contenedor.find('input[name=entity]')
            var id = contenedor.find('input[name=id]')
            var token = contenedor.find('input[name=_token]')

            save.on('click',function(ev){
                ev.preventDefault()

                if(select.val() == "" && mount.val() == "")
                    return false
                else{
                    var data = {
                        additionals_id : select.val(),
                        amount : amount.val(),
                        entity: entity.val(),
                        _token: token.val(),
                        id: id.val()
                    }


                    $.ajax({
                        url: 'moto/addAdditionals',
                        data: data,
                        method: 'POST',
                        success: function(response){
                            $scope.stotal = parseFloat($scope.stotal) +parseFloat(amount.val());

                            $scope.calcular();
                            $scope.financiar();

                            $('input[name=total]').val($scope.total)
                            $('#aFinanciar').val($scope.aFinanciar)

                            $(".adicionales").append($('<tr><td class="text-center">'+response.name+'</td><td class="text-center">$ '+amount.val()+'</td><td><div class="btn-group pull-right"><a href="moto/removeAdditionals/'+response.id+'" class="btn btn-xs btn-danger deleteAdicionales" data-id="'+select.val()+'"><i class="fa fa-trash"></i></a></div></td></tr>'))
                        },
                        error: function (error) {
                            console.log("Error: "+error)
                        }
                    })

                }
            })



            contenedor.on('click','.deleteAdicionales',function(ev){
                ev.preventDefault()

                $(this).attr('disabled',true)

                var contenedor = $(this).parent().parent().parent()

                var data = {
                    additionals_id : $(this).attr('data-id'),
                    entity: entity.val(),
                    _token: token.val(),

                    id: id.val()
                }


                $.ajax({
                    url: 'moto/removeAdditionals',
                    data: data,
                    method: 'POST',
                    success: function(response){

                        $scope.stotal = parseFloat($scope.stotal) - parseFloat(response.amount);

                        $scope.calcular();
                        $scope.financiar();

                        $('input[name=total]').val($scope.total)
                        $('#aFinanciar').val($scope.aFinanciar)


                        $(contenedor).remove()
                    },
                    error: function (error) {
                        console.log("Error: "+error)
                    }
                })

            })

        });

        @endif




        function formatState (state) {

            var datos = state.text.split("~");

            if (!state.id) { return state.text; }
            var span;
            for(var i = 1;i < datos.length; i++) {
                if(i==1)
                    span = '<span class="select2-template-text">' + datos[i] + '</span>';
                else
                    span += '<span class="select2-template-text">' + datos[i] + '</span>';
            }


            var $state = $(
                    '<span class="select2-template-container">' +
                    '<span class="select2-template-title">' +
                    datos[0]
                    + '</span>' +

                    span

                    +'</span>'
            );
            return $state;
        };

        $("#search").select2({
            templateResult: formatState
        });



    </script>

@endsection