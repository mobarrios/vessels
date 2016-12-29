@extends('template.model_form')

@section('form_title')
    Nueva Venta
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

    {!! Form::hidden('users_id',\Illuminate\Support\Facades\Auth::user()->id) !!}

    <div class="col-xs-2  form-group">
        {!! Form::label('Fecha Pactada') !!}
        {!! Form::text('date_confirm', null, ['class'=>'datePicker form-control']) !!}
    </div>

    <div class="col-xs-6 form-group">
        {!! Form::label('Cliente') !!}
        <select id="clients_id" name="clients_id" class="form-control select2">
            @foreach($clients  as $client)
                <option value="{{$client->id}}">
                    {{$client->fullName}}
                    |<strong> {{$client->email}}</strong>
                    | {{$client->dni}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-xs-1 form-group" style="padding-top: 1.5%">
        <a href="{{route("moto.clients.create")}}" target="_blank" class="btn btn-default"><span
                    class="fa fa-plus"></span></a>
    </div>

    <div class="col-xs-2 form-group">
        {!! Form::label('Presupuestos ') !!}
        <select id="budgets_id" name="budgets_id" class="form-control select2">
        </select>
    </div>

    <div class="col-xs-1 form-group" style="padding-top: 1.5%">
        <button type="button" id="show_budget" class="btn btn-default"><span class="fa fa-eye"></span></button>
    </div>

    <div class="col-xs-2 form-group">
        {!! Form::label('Sucursal de Entrega') !!}
        {!! Form::select('branches_confirm_id',$branches ,null, ['class'=>'select2 form-control']) !!}
    </div>

    <div class="col-xs-1 form-group" style="padding-top: 1.5%">
        <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
    </div>



    {!! Form::close() !!}


    <div class="col-xs-12 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Artículos

                <div class="pull-right">
                    @if(isset($models))
                        <a href="#" data-action="{!! route("moto.sales.addItems") !!}" data-toggle="control-sidebar"
                           class="btn btn-xs btn-primary"><span class="fa fa-plus"></span></a>
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
                        <th>Patentamiento</th>
                        <th>Pack Service</th>
                        <th>S. Total</th>
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
                                    $ {{number_format($item->patentamiento ,2)}}
                                </td>
                                <td>
                                    $ {{number_format($item->pack_service ,2)}}
                                </td>
                                <td>
                                    $ {{number_format(($item->price_actual +$item->patentamiento+$item->pack_service),2)}}
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-default"
                                       href="{{route('moto.sales.deleteItems',[$item->id,$models->id])}}"><span
                                                class="text-danger fa fa-trash"></span></a>
                                    <a class="btn btn-xs btn-default"
                                       href="{{route('moto.sales.editItems',[$item->id,$models->id])}}"><span
                                                class="text-success fa fa-edit"></span></a>
                                </td>
                            </tr>
                            <?php $total += $item->price_actual + $item->patentamiento + $item->pack_service; ?>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <td colspan="11" align="right">TOTAL ADEUDADO : $ <b class="text-primary">{{number_format($total,2)}}</b></td>
                        </tfoot>
                    </table>

                @endif

            </div>
        </div>
    </div>

    @include('moto.sales.formPagos')

@endsection


@section('formAside')

    @include('moto.partials.asideOpenForm')

        @if(isset($models))
            @if(isset($modelItems))
                {!! Form::model($modelItems,['route'=> ['moto.sales.updateItems', $modelItems->id,$models->id], 'files' =>'true']) !!}
            @else
                {!! Form::open(['route'=> ['moto.sales.addItems' ], 'files' =>'true']) !!}
            @endif

            {!! Form::hidden('sales_id',$models->id) !!}
            {!! Form::hidden('branches_confirm_id',$models->branches_confirm_id) !!}


            <div class="col-xs-12  form-group">
                {!! Form::label('Modelo') !!}
                <select id="select_model" name='models_id' class=" select2 form-control">
                    @foreach($brands as $br)
                        <optgroup label="{{$br->name}}">
                            @foreach($br->Models as $m)
                                @if($m->stock >= 1)
                                    <option value="{{$m->id}}"
                                            @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                                @endif
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>

            <div class="col-xs-12 form-group">
                {!! Form::label('Colores Disponibles') !!}
                <div>
                    <select name="colors_id" class=" form-control select2" id="disponibles">
                    </select>
                </div>
            </div>

            <div class="col-xs-12 form-group">
                {!! Form::label('Precio Unidad') !!}
                {!! Form::number('price_actual', null, ['class'=>'form-control price']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Patentamiento') !!}
                {!! Form::number('patentamiento', null, ['class'=>'form-control patentamiento']) !!}
            </div>

            <div class="col-xs-6  form-group">
                {!! Form::label('Pack Service') !!}
                {!! Form::number('pack_service', null, ['class'=>'form-control packService']) !!}
            </div>

            <div class="col-xs-3  form-group">
                {!! Form::label('Cédula') !!}
                {!! Form::number('cedula', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-3  form-group">
                {!! Form::label('Alta Pat.') !!}
                {!! Form::number('alta_patente', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-3  form-group">
                {!! Form::label('Ad. Suc.') !!}
                {!! Form::number('ad_suc', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-3  form-group">
                {!! Form::label('LoJack') !!}
                {!! Form::number('lojack', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-3  form-group">
                {!! Form::label('Alta Seguro') !!}
                {!! Form::number('alta_seguro', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-3  form-group">
                {!! Form::label('Repuestos') !!}
                {!! Form::number('repuestos', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-3  form-group">
                {!! Form::label('Larga Distancia') !!}
                {!! Form::number('larga_distancia', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-3  form-group">
                {!! Form::label('Formularios') !!}
                {!! Form::number('formularios', null, ['class'=>'form-control']) !!}
            </div>


            <div class="col-xs-12  form-group">
                {!! Form::label('Aseguradora') !!}
                {!! Form::number('formularios', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-3  form-group">
                {!! Form::label('Tipo Seguro') !!}
                {!! Form::select('seguro_tipo', ['rc'=>'RC' ,'rcr'=> 'RCR' ],null, ['class'=>'form-control']) !!}
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
        $('#select_model').on('change', function () {
            var id = $(this).val();
            var color;
            var color_id;
            var q;

            $('#disponibles').html("");
            $.ajax({
                method: 'GET',
                url: 'moto/modelLists/' + id,
                success: function (data) {
                    // $.each(data, function(i , v){
                    $('.price').val(data.active_list_price.price_list);
                    $('.patentamiento').val(data.patentamiento);
                    $('.packService').val(data.pack_service);
                    //});
                }
            }),
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

                                $('#disponibles').append('<option value=' + color_id + ' >' + color + ' ( ' + q + ' ) </option>');
                            });
                        }
                    })

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
            window.open('moto/budgets/pdf/' + id, '_blank');


        });

    </script>
@endsection