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

                @if(!isset($budget))
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
                        {!! Form::text('last_name', null, ['class'=>'form-control','required' => 'required','ng-model' => 'last_name']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('name', "NOMBRE") !!}
                        {!! Form::text('name', null, ['class'=>'form-control','required' => 'required','ng-model' => 'name']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('dni', "DNI") !!}
                        {!! Form::text('dni', null, ['class'=>'form-control','required' => 'required','ng-model' => 'dni']) !!}
                    </div>

                    <div class="col-xs-12 col-lg-3 form-group">
                        {!! Form::label('sexo', "SEXO") !!}
                        {!! Form::select('sexo', ['masculino' => 'masculino','femenino' => 'femenino'],null, ['class'=>'form-control','ng-model' => 'sexo']) !!}
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
                        @if(!isset($budget))
    {{--                        {!! Form::hidden('clients_id', $client->id) !!}--}}
                            <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
                            <button type="reset" id="reset" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                        @endif

                            @if(isset($budget))
                                <a href="#" data-action="{!! route("moto.".$section.".addItem", $budget->id) !!}" data-toggle="control-sidebar" class="btn btn-default"><span class="fa fa-plus"></span></a>
                            @endif
                        {!! Form::close() !!}



                    </div>
                </div>


            <span class="clearfix"></span>
            @if(isset($budget))

                <hr>

                {!! Form::model($budget,["route" => 'moto.'.$section.'.update', 'method' => 'POST', 'id' => 'formPresupuesto']) !!}

                    {!! Form::hidden('clients_id',$client->id) !!}
                    {!! Form::hidden('id',$budget->id) !!}
                    {!! Form::hidden('branches_id',Auth::user()->branches_active_id) !!}

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
                                            <a href="moto/budgets/deleteItem/{{ $budget->id }}/@{{ models.pivot.id }}"><span class="text-danger fa fa-trash"></span></a>
                                        </td>
                                        <td>
                                            <a href="moto/budgets/editItem/{{ $budget->id }}/@{{ models.pivot.id }}"><span class="text-success fa fa-edit"></span></a>
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
            {!! Form::model($modelItems,['route'=> ['moto.'.$section.'.editItem', $budget->id, $modelItems->id], 'files' =>'true', 'method' => 'post']) !!}
        @else
            {!! Form::open(['route'=> ['moto.'.$section.'.addItem', $budget->id], 'files' =>'true']) !!}
        @endif

        {!! Form::hidden('budgets_id',$budget->id) !!}
        {!! Form::hidden('price_actual',null,['class' => 'price_actual']) !!}

        <div class="col-xs-12  form-group">
            {!! Form::label('Modelo') !!}
            <select id="select_model" name='models_id' class=" select2 form-control" placeholder="Seleccione un modelo">
                <option>Seleccionar...</option>
                @foreach($brands as $br)
                    <optgroup label="{{$br->name}}">
                        @foreach($br->Models as $m)
                            @if($m->stock >= 1)
                                <option value="{{$m->id}}"
                                        @if(isset($modelItems) && ($modelItems->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                            @endif
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Color') !!}
            @if(isset($modelItems))
                <select name="colors_id" id="colors" class="form-control select2">
                    @foreach($colors as $cant => $color)
                        @foreach($color as $col)
                            <option value=' {!! $col->colors_id  !!} ' @if($col->colors_id == $modelItems->colors_id) selected = "selected" @endif> {!! $col->colors->name !!} ( {!! $color->count() !!} ) </option>
                        @endforeach
                    @endforeach
                </select>
{{--                {!! Form::select('colors_id', $colors,null, ['class'=>'form-control select2',"id" => "colors"]) !!}--}}
            @else
                {!! Form::select('colors_id', [],null, ['class'=>'form-control select2',"id" => "colors"]) !!}
            @endif
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
        var routeBase = window.location.href.split('moto/')[0]

        $("#reset").on('click', function () {
            $('#modelId').val("")
            $('#formClient').attr('action',routeBase+'moto/clients/store')
        })

        var app = angular.module("buscador", []);


        app.controller("buscadorController", function ($scope, $http) {
            @if(isset($client))
                    $scope.model = "{!! $client->id !!}"
                    $scope.last_name = "{!! $client->last_name !!}"
                    $scope.name = "{!! $client->name !!}"
                    $scope.dni = "{!! $client->dni !!}"
                    $scope.email = "{!! $client->email !!}"
                    $scope.sexo = "{!! $client->sexo !!}"
                    $scope.nacionality = "{!! $client->nacionality !!}"
                    $scope.phone1 = "{!! $client->phone1 !!}"
                    $scope.address = "{!! $client->address !!}"
                    $scope.city = "{!! $client->city !!}"
                    $scope.location = "{!! $client->location !!}"
                    $scope.province = "{!! $client->province !!}"
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


//            $scope.onCategoryChange = function (event) {
//
//
//                var id = event.currentTarget.getAttribute('value');
//                find(id);
//                console.log(id)
//            };


        });



        $("select[name='models_id']").on('change', function(ev){
            $("#select_model>option").remove();
            var id = $(this).val();

            var parent = $(this).parent().parent();

            $.ajax({
                method: 'GET',
                url: 'moto/modelLists/'+id,
                success: function(data){
                    $.ajax({
                        method: 'GET',
                        url: 'moto/modelAvailables/' + id,
                        success: function (data) {
                            $.each(data, function (x, y) {

                                $.each(y, function (a, b) {

                                    color_id = b.colors_id;
                                    color = b.colors.name;
                                    q = y.length;
                                });

                                $('#colors').append('<option value=' + color_id + ' >' + color + ' ( ' + q + ' ) </option>');
                            });
                        }
                    })

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
            if($(val).val() == "{!! $budget->modo_financiamiento !!}"){
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
            $http.get("moto/budgetsItems/{!! $budget->id !!}")
                    .then(function (response) {
                        $scope.total = parseFloat(response.data[0]['price'])
                        $scope.stotal = parseFloat(response.data[0]['price'])
                        $scope.patentamiento = parseFloat(response.data[0]['patentamiento'])
                        $scope.packService = parseFloat(response.data[0]['pack_service'])
                        $scope.data = response.data[1]
                        $scope.seguro = {!! $budget->seguro or '0' !!}
                                $scope.flete = {!! $budget->flete or '0' !!}
                                $scope.formularios = {!! $budget->formularios or '0' !!}
                                $scope.gastosAdministrativos = {!! $budget->gastros_administrativos or '0' !!}
                                $scope.descuento = {!! $budget->descuento or '0' !!}
                                $scope.anticipo = {!! $budget->anticipo or '0' !!}
                                $scope.importeCuota = {!! $budget->importe_cuota or '0' !!}
                                $scope.aFinanciar = {!! $budget->a_financiar or '0' !!}
                        $scope.calcular();

                    });


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

