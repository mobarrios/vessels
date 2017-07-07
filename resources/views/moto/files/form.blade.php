@extends('template.model_form')

@section('form_title')
    Nuevo Legajo
@endsection

@section('form_inputs')

    {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}

    <div class="col-xs-12 col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                Datos del Cliente
            </div>
            <div class="box-body">
                <div class="row">
                    
                    <div class="col-xs-12 col-md-6 form-group">
                        {!! Form::label('Estado') !!}
                        {!! Form::select('estado',$estado, $models->estadoValue, ['class'=>'form-control select2']) !!}
                    </div>

                    <div class="col-xs-12 col-md-6 form-group">
                        {!! Form::label('Ubicación') !!}

                        {!! Form::select('ubicacion',$ubicacion,  $models->ubicacionValue or null, ['class'=>'form-control select2']) !!}
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                     Fotocopia de dni
                                </label>
                            </div>

                        </div>
                        {!! Form::file('dni_photocopy_file') !!}
                        @if($models->dni_photocopy_file)
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon text-success">{!! $models->imageDni !!}</span>
                                    <span class="input-group-btn">
                                        <a href="{!! route("moto.files.downloadDni",$models->id) !!}"  class="btn btn-default"><i class="fa fa-file-image-o"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                        @endif
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                     Constancia de cuil
                                </label>
                            </div>
                        </div>
                        {!! Form::file('proof_of_cuil_file') !!}
                        
                        @if($models->proof_of_cuil_file)
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon text-success">{!! $models->imageCuil !!}</span>
                                    <span class="input-group-btn">
                                        <a href="{!! route("moto.files.downloadCuil",$models->id) !!}"  class="btn btn-default"><i class="fa fa-file-image-o"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                Formularios
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    Formulario 01
                                </label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-btn">

                                    <a href="{!! route('moto.files.form12') !!}" id="btnForm12" data-toggle="modal" data-target="#modalForm12" class="btn btn-success btn-sm pull-right">
                                        Crear formulario
                                    </a>
                                </div>
                                {!! Form::select('form_01',$forms01,null,["class" => 'form-control']) !!}

                            </div>

                        </div>
                        {!! Form::file('form_01_file') !!}
                        
                        @if($models->form_01_file)
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon text-success">{!! $models->imageForm01 !!}</span>
                                    <span class="input-group-btn">
                                        <a href="{!! route("moto.files.downloadForm01",$models->id) !!}"  class="btn btn-default"><i class="fa fa-file-image-o"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                        @endif

                        @if($forms01->count() == 0)
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="alert bg-gray-light" style="margin-top:5px !important; padding:5px !important;">
                                        <p class="text-red active"><i class="icon fa fa-warning"></i> No hay <b>formularios 01</b> cargados</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label class="checkbox">

                                     Formulario 12
                                </label>
                            </div>


                            @if(!$models->form12)
                                <a href="{!! route('moto.files.form12') !!}" id="btnForm12" data-toggle="modal" data-target="#modalForm12" class="btn btn-success btn-sm pull-right">
                                    Crear formulario
                                </a>

                                @if($forms12->count() == 0)
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="alert bg-gray-light" style="margin-top:5px !important; padding:5px !important;">
                                                <p class="text-red active"><i class="icon fa fa-warning"></i> No hay <b>formularios 12</b> cargados</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="btn-group btn-group-sm pull-right">

                                    <a href="#modalForm12Muestra" data-toggle="modal" data-target="#modalForm12Muestra" class="btn btn-default">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{!! route('moto.files.showForm12',$models->form12->id) !!}" target="_blank" class="btn btn-default">
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
                                     Formulario 59
                                </label>
                            </div>

                            @if(!$models->form59)
                                <a href="{!! route('moto.files.form59') !!}" id="btnForm59" data-toggle="modal" data-target="#modalForm59" class="btn btn-success btn-sm pull-right">
                                    Crear formulario
                                </a>

                                @if($forms59->count() == 0)
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="alert bg-gray-light" style="margin-top:5px !important; padding:5px !important;">
                                                <p class="text-red active"><i class="icon fa fa-warning"></i> No hay <b>formularios 59</b> cargados</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="btn-group btn-group-sm pull-right">

                                    <a href="#modalForm59Muestra" data-toggle="modal" data-target="#modalForm59Muestra" class="btn btn-default">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{!! route('moto.files.showForm59',$models->form59->id) !!}" target="_blank" class="btn btn-default">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </div>
                            @endif

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
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="nav-tabs-custom">

                                <ul class="nav nav-tabs pull-right">
                                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Facturación</a></li>
                                    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true">Pagos</a></li>
                                    <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="true">Compra</a></li>
                                    <li class="active"><a href="#tab_5" data-toggle="tab" aria-expanded="true">Cliente</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_5">

                                    </div>
                                    <div class="tab-pane " id="tab_4">

                                    </div>
                                    <div class="tab-pane " id="tab_3">

                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@if($models->form12)
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
@endif


@if($models->form59)
    <!-- Modal -->
    <div class="modal fade" id="modalForm59Muestra" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Formulario N°59</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>DATOS DEL COMERCIANTE HABITUALISTA</h4>

                            <ul>
                                <li>Apellido y nombre: {!! $models->sales->brancheables->first()->branches->company->razon_social !!}</li>
                                <li>DNI/CUIT/CUIL: {!! $models->sales->brancheables->first()->branches->company->cuil !!}</li>
                            </ul>

                        </div>
                        <div class="col-xs-6">
                            <h4>COMERCIANTE HABITUALISTA</h4>
                            <p>Código de inscripción:</p>{!! $models->form59->cod_inscripcion !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-xs-12">
                            <h4>TRÁMITE PRESENTADO</h4>
                            <ul>
                                <li>Dominio: 0KM</li>
                                <li>Solicitud tipo: 01 D</li>
                                <li>Trámite presentado: INSCRIPCIÓN INICIAL</li>
                                <li>N° de control: {!! $models->form59->n_control !!}</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endif


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
                                {!! Form::label('Número de formulario:') !!}
                                {!! Form::select('forms_id', $forms12,null, ['class'=>'select2 form-control']) !!}

                            </div>
                        </div>

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
                        {!! Form::model($models->formulario59,['route'=> ['moto'.$section.'updateForm59', $models->formulario59->id ], 'files' =>'true']) !!}
                    @else
                        {!! Form::open(['route'=> ['moto.'.$section.'.form59', $models->id ], 'files' =>'true']) !!}
                    @endif
                        {!! Form::hidden('sales_id',null) !!}


                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('Número de formulario:') !!}
                                {!! Form::select('forms_id', $forms59,null, ['class'=>'select2 form-control']) !!}

                            </div>
                        </div>

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


                            {{--<div class="col-xs-3 form-group">--}}
                                {{--{!! Form::label('Dominio:') !!}--}}
                                {{--{!! Form::text('dominio', null, ['class'=>'form-control']) !!}--}}
                            {{--</div>--}}

                            {{--<div class="col-xs-3 form-group">--}}
                                {{--{!! Form::label('Trámite presentado:') !!}--}}
                                {{--{!! Form::text('tramite', null, ['class'=>'form-control']) !!}--}}
                            {{--</div>--}}

                            {{--<div class="col-xs-3 form-group">--}}
                                {{--{!! Form::label('Solicitud tipo:') !!}--}}
                                {{--{!! Form::text('solicitud_tipo', null, ['class'=>'form-control']) !!}--}}
                            {{--</div>--}}

                            <div class="col-xs-12 form-group">
                                {!! Form::label('N° de control:') !!}
                                {!! Form::text('n_control', null, ['class'=>'form-control']) !!}
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

                    var cliente = '<div class="row"><div class="col-xs-12"><h4>Cliente</h4></div><div class="col-xs-12"><p><b>Nombre:</b><span>' + data.clients.last_name + ', ' + data.clients.name + '</span></p><p><b>Dni:</b><span> ' + data.clients.dni +'</span></p><p><b>Sexo:</b><span> ' + data.clients.sexo + '</span></p></div><div class="col-xs-12"><p><b>Dirección:</b><span>  ' + data.clients.address + '</span></p><p><b>Localidad:</b><span> ' + data.clients.location + '(' + data.clients.province + ')' + '</span></p> </div>';

                    $('#tab_5').append($(cliente));

                    var compra = '<div class="row"><div class="col-xs-12"><h4>Compra - <small>Retira por ' + data.branches_confirm.name + '</small></h4></div>';

                    for(var item in data.items){
                        compra += '<div class="col-xs-12"><p><b>Modelo:</b><span> ' + data.items[item].models.name + '</span></p><p><b>N° cuadro:</b><span> ' + data.items[item].n_cuadro + '</span></p><p><b>N° motor:</b><span> ' + data.items[item].n_motor + '</span></p><p><b>Color:</b><span> ' + data.items[item].colors.name + '</span></p><p><b>Precio:</b><span> $' + data.items[item].pivot.price_actual + '</span></p></div></div>';

                    }

                    $('#tab_4').append($(compra));

                    var pagos = '<div calss="row"><div class="col-xs-12"><h4>Pagos</h4></div><table class="table table-responsive"><tr><td>Fecha</td><td>Monto</td></tr>';



                    for(var payment in data.payments){
                        pagos += '<tr><td>' + data.payments[payment].date + '</td><td> $' + data.payments[payment].amount + '</td></tr>';
                    }

                    pagos += '</table></div>';

                    $('#tab_3').append($(pagos));

                    var facturacion = '<div class="row"><div class="col-xs-12"><h4>Facturación</h4><table class="table table-responsive"><tr><td>Fecha</td><td>Tipo</td><td>Letra</td><td>#</td><td>Concepto</td><td>Pto. Venta</td><td>Importe total</td></tr>';

                    for(var voucher in data.vouchers){
                        facturacion += '<tr><td>' + data.vouchers[voucher].fecha + '</td><td> ' +  data.vouchers[voucher].tipo + '</td><td> ' +  data.vouchers[voucher].letra  + '</td><td>' +   data.vouchers[voucher].numero  + '</td><td> ' +  data.vouchers[voucher].concepto  + '</td><td>' +   data.vouchers[voucher].punto_venta  + '</td><td> $' +  data.vouchers[voucher].importe_total  + '</td></tr>';
                    }

                    facturacion += '</table></div></div>';


                    $("#tab_2").append($(facturacion));


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



            $("#modalForm59").on('show.bs.modal',function(ev){
                var id = $('select[name=sales_id]').val();

                $(ev.target).find('input[name=sales_id]').val(id);
            });




            


        })
    </script>



@endsection

