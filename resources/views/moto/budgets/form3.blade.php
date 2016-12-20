@extends('template.model_form')

@section('form_title')
    Nuevo Presupuesto
@endsection

@section('form_inputs')

    <div class="modal-body">
        <div>
            <div>

                <div class="input-group">
                    <input type="text" class="form-control"
                           placeholder="Buscar...">
                        <span class="input-group-btn">
                        <button type="button"
                                class="btn btn-default"><span class="fa fa-search"></span>
                        </button>
                        </span>
                </div>
                <hr>


                @if(isset($models))
                    {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
                @else
                    {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
                @endif

                <div class="col-xs-12 col-lg-5 form-group">
                    {!! Form::label('Nombre Lista de Precio') !!}
                    {!! Form::text('number', null, ['class'=>'form-control']) !!}
                </div>

                <div class="col-xs-12 col-lg-4  form-group" style="padding-top: 2%">
                    <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
                    @if(isset($models))
                        <a href="#" data-action="{!! route("moto.modelsListsPrices.addItems") !!}" data-toggle="control-sidebar" class="btn btn-default"><span class="fa fa-plus"></span></a>
                    @endif
                </div>

                {!! Form::close() !!}

                @if(isset($models))
                    <div class="col-xs-12">
                        <table class="table">
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>$ Lista</th>
                                <th>$ Contado</th>
                                <th>Dto. Max</th>
                                <th>Obs.</th>
                            </tr>
                            @foreach($models->ModelsListsPricesItems as $item)
                                <tbody>
                                <tr>
                                    <td>{{$item->Models->Brands->name}}</td>
                                    <td>{{$item->Models->name}}</td>
                                    <td>{{$item->price_list}}</td>
                                    <td>{{$item->price_net}}</td>
                                    <td>{{$item->max_discount}}</td>
                                    <td>{{$item->obs}}</td>
                                    <td>
                                        <a href="{{route('moto.modelsListsPrices.deleteItems',[$item->id,$models->id])}}"><span
                                                    class="text-danger fa fa-trash"></span></a>
                                    </td>
                                    <td>
                                        <a href="{{route('moto.modelsListsPrices.editItems',[$item->id,$models->id])}}"><span
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
                            {!! Form::model($modelItems,['route'=> ['moto.modelsListsPrices.updateItems', $modelItems->id,$models->id], 'files' =>'true']) !!}
                        @else
                            {!! Form::open(['route'=> ['moto.modelsListsPrices.addItems' ], 'files' =>'true']) !!}
                        @endif

                        {!! Form::hidden('models_lists_prices_id',$models->id) !!}
                        <div class="col-xs-12 form-group">
                            {!! Form::label('Modelo') !!}
                            {!! Form::select('models_id', $models_lists, null, ['class'=>'form-control select2']) !!}
                        </div>
                        <div class="col-xs-12 form-group">
                            {!! Form::label('Precio de Lista') !!}
                            {!! Form::text('price_list', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-xs-12 form-group">
                            {!! Form::label('Precio de Contado') !!}
                            {!! Form::text('price_net', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-xs-12 form-group">
                            {!! Form::label('Dto. Máximo') !!}
                            {!! Form::text('max_discount', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-xs-12 form-group">
                            {!! Form::label('Observaciones') !!}
                            {!! Form::text('obs', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-xs-12 text-center form-group" style="padding-top: 2%">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                            <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
                        </div>
                        {!! Form::close() !!}
                    <!-- /.control-sidebar-menu -->
                    @endif
                    @include('moto.partials.asideCloseForm')







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


    <div class="row">
        <div class="container">
            <div class="col-xs-12">
                <a href="{{route('moto.'.$section.'.pdf',1)}}" target="_blank" class="btn btn-default" title="Exportar PDF">
                    <i class="fa bg-danger fa-file-pdf-o"></i>
                </a>
            </div>
        </div>
    </div>

@endsection
