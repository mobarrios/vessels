@extends('template.model_form')

@section('form_title')
    Nuevo Legajo
@endsection

@section('form_inputs')

    {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}

    <div class="col-xs-12 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Datos del Cliente
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 form-group">
                        {!! Form::label('Venta #') !!}
                        <div class="btn-group">
                            <a id="verVenta" class="btn btn-default"><i class="fa fa-eye"></i></a>
                            {!! Form::select('sales_id',$sales, isset($models->sales_id) ? $models->sales_id : null, ['class'=>'form-control select2']) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 form-group">
                        {!! Form::label('Factura #') !!}
                        <div class="btn-group">
                            <a href="" class="btn btn-default"><i class="fa fa-eye"></i></a>
                            {!! Form::select('invoices_id',$invoices, null, ['class'=>'form-control select2']) !!}
                        </div>
                    </div>

                    {{--<div class="col-xs-12 col-md-4 form-group">--}}
                        {{--{!! Form::label('Remito #') !!}--}}
                        {{--<div class="btn-group">--}}
                            {{--<a href="" class="btn btn-default"><i class="fa fa-eye"></i></a>--}}
                            {{--{!! Form::select('senders_id',$senders, null, ['class'=>'form-control select2']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('dni_photocopy', null) !!}
                                     Fotocopia de dni
                                </label>
                            </div>

                        </div>
                        {!! Form::file('dni_photocopy_file') !!}
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('proof_of_cuil', null) !!}
                                     Constancia de cuil
                                </label>
                            </div>
                        </div>
                        {!! Form::file('proof_of_cuil_file') !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Formularios
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('form_01', null) !!}
                                    Formulario 01
                                </label>
                            </div>
                        </div>
                        {!! Form::file('form_01_file') !!}
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label class="checkbox">
                                    {!! Form::checkbox('form_12', null) !!}
                                     Formulario 12
                                </label>
                            </div>


                            @if(!$models->form12)
                                <a href="{!! route('moto.files.form12') !!}" id="btnForm12" class="btn btn-success btn-sm pull-right">
                                    Crear formulario
                                </a>
                            @else
                                <div class="btn-group btn-group-sm pull-right">

                                    <a href="#modalForm12Muestra" data-toggle="modal" data-target="#modalForm12Muestra" class="btn btn-default">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{!! route('moto.files.showForm12',$models->form12->id) !!}" class="btn btn-default">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label class="checkbox">
                                    {!! Form::checkbox('form_59', 1,null) !!}
                                     Formulario 59
                                </label>
                            </div>
                                <a href="{!! route('moto.files.form59') !!}" id="btnForm59" data-toggle="modal" data-target="#modalForm59" class="btn btn-success btn-sm pull-right">
                                    Crear formulario
                                </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>




@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="modalVentas" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Venta</h4>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalForm12Muestra" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Formulario N°12</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>DATOS DEL VEHÍCULO VERIFICADO</h4>
                            @foreach($models->sales->SalesItems as $salesItem)
                                <ul>
                                    <li>N° de chapa: {!! $salesItem->Items->n_chapa !!}</li>
                                    <li>Marca: {!! $salesItem->Items->models->brands->name !!}</li>
                                    <li>Tipo: Moto</li>
                                    <li>Modelo: {!! $salesItem->Items->models->name !!}</li>
                                    <li>Marca del motor: {!! $salesItem->Items->models->name !!}</li>
                                    <li>Marca del motor: {!! $salesItem->Items->models->name !!}</li>
                                    <li>N° del motor: {!! $salesItem->Items->n_motor !!}</li>
                                    <li>N° de cuadro: {!! $salesItem->Items->n_chapa !!}</li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="col-xs-6">
                            <h4>OBSERVACIONES Y CONSTANCIAS</h4>
                            <p>{!! $models->form12->observaciones !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-xs-12">
                            <h4>DATOS DEL SOLICITANTE</h4>
                            <ul>
                                <li>{!! $models->sales->clients->fullName  !!}</li>
                                <li>{!! $models->sales->clients->dni !!}</li>
                                <li>{!! $models->sales->clients->address !!}</li>
                                <li>{!! $models->sales->clients->location !!}</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalForm12" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Formulario 12</h4>
                </div>
                <div class="modal-body">
                    @if(isset($models->formulario12))
                        {!! Form::model($models->formulario12,['route'=> 'moto'.$section.'updateform12', [$models->id,$models->formulario12->id]  , 'files' =>'true']) !!}
                    @else
                        {!! Form::open(['route'=> ['moto.'.$section.'.form12', $models->id] , 'files' =>'true']) !!}
                    @endif

                        {!! Form::hidden('sales_id',null) !!}

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('Municipio:') !!}
                                {!! Form::select('municipio', $municipios,null, ['class'=>'select2 form-control']) !!}
                            </div>
                        </div>


                        <div class="col-xs-12 form-group">
                            {!! Form::label('observacion') !!}
                            {!! Form::textarea('observacion', null, ['class'=>'form-control']) !!}
                        </div>

                        <button class="btn btn-block btn-primary" type="submit"> Crear formulario </button>



                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalForm59" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Formulario 59</h4>
                </div>
                <div class="modal-body">
                    @if(isset($models->formulario59))
                        {!! Form::model($models->formulario59,['route'=> ['moto'.$section.'updateForm59', $models->formulario12->id ], 'files' =>'true']) !!}
                    @else
                        {!! Form::open(['route'=> ['moto.'.$section.'.form59', $models->id ], 'files' =>'true']) !!}
                    @endif

                        <div class="row">
                            <p class="text-center">
                                <b>"A" DATOS DEL PRESENTANTE, MANDATARIO/EMPLEADO DEL MANDATARIO/COMERCIANTE HABITUALISTA</b>
                            </p>

                            <div class="col-xs-12 form-group">
                                {!! Form::label('Razón Social:') !!}
                                {!! Form::select('razon_social',[], null, ['class'=>'form-control']) !!}
                            </div>

                        </div>

                        <hr>

                        <div class="row">
                            <p class="text-center">
                                <b>"C" COMERCIANTE HABITUALISTA</b>
                            </p>

                            <div class="col-xs-12 form-group">
                                {!! Form::label('Código de inscripción:') !!}
                                {!! Form::text('cod_inscripcion', null, ['class'=>'form-control']) !!}
                            </div>

                        </div>

                        <hr>
                        <div class="row">
                            <p class="text-center">
                                <b>"D" TRÁMITE PRESENTADO</b>
                            </p>


                            <div class="col-xs-3 form-group">
                                {!! Form::label('Dominio:') !!}
                                {!! Form::text('dominio1', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="col-xs-3 form-group">
                                {!! Form::label('Trámite presentado:') !!}
                                {!! Form::text('tramite1', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="col-xs-3 form-group">
                                {!! Form::label('Solicitud tipo:') !!}
                                {!! Form::text('solicitud_tipo1', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="col-xs-3 form-group">
                                {!! Form::label('N° de control:') !!}
                                {!! Form::text('n_control1', null, ['class'=>'form-control']) !!}
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('Observaciones:') !!}
                                {!! Form::textarea('observaciones', null, ['class'=>'form-control','rows' => '3']) !!}
                            </div>
                        </div>

                        <button class="btn btn-block btn-primary" type="submit"> Crear formulario </button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function crearModal() {


            $("#modalVentas").modal();

            var id = $('select[name=sales_id]').val();

            $.ajax({
                method: 'get',
                url: 'moto/sales/show/'+id,
                success: function(data){

                    var content = '<div class="row"><div class="col-xs-12"><h4>Cliente</h4></div><div class="col-xs-12 col-md-6"><p><b>Nombre:</b><span>' + data.clients.last_name + ', ' + data.clients.name + '</span></p><p><b>Dni:</b><span> ' + data.clients.dni +'</span></p><p><b>Sexo:</b><span> ' + data.clients.sexo + '</span></p></div><div class="col-xs-12 col-md-6"><p><b>Dirección:</b><span>  ' + data.clients.address + '</span></p><p><b>Localidad:</b><span> ' + data.clients.location + '(' + data.clients.province + ')' + '</span></p> </div></div><hr><div class="row"><div class="col-xs-12 col-md-6"><h4>Compra <small>Retira por ' + data.branches_confirm.name + '</small></h4>';



                    for(var item in data.items){
                        content += '<div class="col-xs-12 col-md-6"><p><b>Modelo:</b><span> ' + data.items[item].models.name + '</span></p><p><b>N° cuadro:</b><span> ' + data.items[item].n_cuadro + '</span></p><p><b>N° motor:</b><span> ' + data.items[item].n_motor + '</span></p><p><b>Color:</b><span> ' + data.items[item].colors.name + '</span></p><p><b>Precio:</b><span> $' + data.items[item].pivot.price_actual + '</span></p></div>';

                    }


                    content += '</div><div class="col-xs-12 col-md-6"><h4>Pagos</h4><table class="table table-responsive"><tr><td>Fecha</td><td>Monto</td></tr>';



                    for(var payment in data.payments){
                        content += '<tr><td>' + data.payments[payment].date + '</td><td> $' + data.payments[payment].amount + '</td></tr>';
                    }

                    content += '</table></div></div><hr><div class="row"><div class="col-xs-12"><h4>Facturación</h4><table class="table table-responsive"><tr><td>Fecha</td><td>Tipo</td><td>Letra</td><td>#</td><td>Concepto</td><td>Pto. Venta</td><td>Importe total</td></tr>';

                    for(var voucher in data.vouchers){
                        content += '<tr><td>' + data.vouchers[voucher].fecha + '</td><td> ' +  data.vouchers[voucher].tipo + '</td><td> ' +  data.vouchers[voucher].letra  + '</td><td>' +   data.vouchers[voucher].numero  + '</td><td> ' +  data.vouchers[voucher].concepto  + '</td><td>' +   data.vouchers[voucher].punto_venta  + '</td><td> $' +  data.vouchers[voucher].importe_total  + '</td></tr>';
                    }

                    content += '</table></div></div>';


                    $("#modalVentas .modal-body").append($(content))


                }
            })
        }


        $(document).on("ready", function() {
            var selectSales = $(".select2[name=sales_id]");

            var btnVenta = $("#verVenta");

                btnVenta.on('click',function(ev){
                    ev.preventDefault();

                    if(selectSales.val() != "null"){
                        crearModal();
                    }

            })

            $(selectSales).on('change', function(){
                crearModal();
            });


            $("#btnForm12").on('click',function (ev) {
                ev.preventDefault();

                $("#modalForm12 input[name=sales_id]").val($(selectSales).val());

                $("#modalForm12").modal();
            })





            


            //console.log(selectSales.val())







            // with plugin options
            $("input[type=checkbox]").checkboxX({
                threeState: false,
                size: 'xs',
                theme: 'krajee-flatblue',
                enclosedLabel: true
            });


            

        })
    </script>



@endsection

