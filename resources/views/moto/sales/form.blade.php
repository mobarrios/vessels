@extends('template.model_form')

@section('form_title')
    Venta
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

    {!! Form::hidden('users_id',\Illuminate\Support\Facades\Auth::user()->id) !!}
    <div class="col-xs-12 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Cabecera
            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>


    <div class="col-xs-12 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Artículos
                <div class="pull-right">
                    @if(isset($model))
                        <a href="{{route('sales.addItems',$model->id)}}" class="btn btn-xs btn-primary"><span class="fa fa-plus"></span></a>
                    @endif
                </div>

            </div>

            <div class="panel-body">
                @if(isset($models))

                    <table class="table table-bordered table-striped">
                        <thead>
                        <th>Cod.</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>N Motor</th>
                        <th>N Cuadro</th>
                        <th>Importe Articulo</th>
                        <th colspan="2" class="text-left">S. Total</th>
                        </thead>
                        <tbody>
                        <?php $total = 0; ?>
                        @foreach($models->SalesItems as $item)

                            <tr>
                                <td>{{$item->items_id}}</td>

                                <td>{{$item->Items->Models->Brands->name}}</td>
                                <td>
                                    <a href="{{route('moto.items.edit',$item->Items->id)}}">{{$item->Items->Models->name}}</a>
                                </td>
                                <td>{{$item->Items->Colors->name}}</td>
                                <td>{{$item->Items->n_motor}}</td>
                                <td>{{$item->Items->n_cuadro}}</td>
                                <td>
                                    $ {{number_format($item->price_actual ,2)}}
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-default"
                                       href="{{route('moto.sales.deleteItems',[$item->id,$models->id])}}"><span
                                                class="text-danger fa fa-trash"></span></a>
                                    <a class="btn btn-xs btn-default editItems"
                                       href="{{route('moto.sales.editItems',[$item->id,$models->id])}}"
                                       data-id="{!! $item->id !!}"><span
                                                class="text-success fa fa-edit"></span></a>
                                </td>
                            </tr>
                            <?php $total += $item->price_actual + $item->patentamiento + $item->pack_service; ?>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <td colspan="11" align="right">TOTAL ADEUDADO : $ <b
                                    class="text-primary">{{number_format($total,2)}}</b></td>
                        </tfoot>
                    </table>

                @endif

            </div>
        </div>
    </div>

    @if(isset($models))
        <div class="col-xs-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Formas de Pago
                    <div class="pull-right">
                        @if(isset($models))
                            <a href="#" id="agregarPago" data-action="{!! route("moto.sales.addItems") !!}"
                               class="btn btn-xs btn-primary"><span class="fa fa-plus"></span></a>
                        @endif
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12">
                        <table class="table table-bordered">
                            <thead>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Forma de Pago</th>
                            <th> $ Monto</th>
                            </thead>
                            <tbody>
                            <?php $pago = 0 ?>
                            @if(isset($models->SalesPayments))

                                @foreach($models->SalesPayments as $payment)
                                    <tr>
                                        <td>{{$payment->id}}</td>
                                        <td>{{$payment->date}}</td>
                                        <td>{{$payment->Financials->name}}</td>
                                        <td> $ {{number_format($payment->amount, 2)}}</td>
                                        <?php  $pago += $payment->amount;?>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <td colspan="4" align="right">TOTAL ABONADO : <b class="text-success">
                                    $ {{number_format($pago,2)}}</b></td>
                            </tfoot>
                        </table>

                        <h5 class="pull-right">TOTAL A PAGAR : <b class="text-danger">
                                $ {{number_format(($total - $pago),2)}}</b>
                        </h5>

                        <a target="_blank" href="{!! route('moto.'.$section.'.pdf',$models->id) !!}"
                           class="pull-left"
                           title="Exportar PDF">
                    <span class="btn btn-danger">
                        <i class="fa fa-file-pdf-o"></i>
                    </span>
                        </a>
                        <a target="_blank" href="{!! route('moto.'.$section.'.recibo') !!}"
                           class="pull-left"
                           title="Recibo PDF">
                    <span class="btn btn-success">
                        <i class="fa fa-file-pdf-o"></i>
                    </span>
                        </a>
                        <a target="_blank" href="{!! route('moto.'.$section.'.factura') !!}"
                           class="pull-left"
                           title="Factura PDF">
                    <span class="btn btn-warning">
                        <i class="fa fa-file-pdf-o"></i>
                    </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    @endif



@endsection


@section('modal')
    @include('moto.partials.modalItems')
@endsection



@section('js')

    <script>

        var app = angular.module("app", []);
        app.controller("ctl", function ($scope, $http) {

            $scope.ver = function () {
                $http.get("moto/budgets/budget/" + $('#budgets_id').val())
                        .then(function (response) {
                            $scope.budgets = response.data;
                            console.table(response.data);
                        });
            };
        });

        $('#ver').on('click', function () {
            $.get("moto/budgets/budget/" + $('#budgets_id').val(), function (res) {

            });
        });

        $('#budgets_id').on('change', function () {
            $.get("moto/budgets/budgetsClients/" + $(this).val(), function (res) {
                $("#clients_id ").val(res).trigger("change");
            });
        });


        $('#clients_id').on('change', function () {
            var id = $(this).val();
            var budgets = $('#budgets_id');

            budgets.html("");

            $.ajax({
                method: 'GET',
                url: 'moto/budgetsByClients/' + id,
                success: function (data) {
                    $.each(data, function (i, y) {
                        budgets.append("<option value=" + y.id + ">#" + y.id + " | " + y.created_at + "</option>")
                    });
                }
            })
        });


        $("#show_budget").on('click', function () {
            var id = $('#budgets_id').val();
            //window.open('moto/budgets/pdf/' + id, '_blank');

            //$('#modalBudgetClients .modal-content').load('{{route('moto.budgets.index')}}');

            $('#modalBudgetClients').modal(open);
        });

    </script>
@endsection