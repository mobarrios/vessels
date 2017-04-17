@extends('template.model_form')

@section('form_title')
    Nuevo Legajo
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

    <div class="col-xs-12 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Datos del Cliente
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-4 form-group">
                        {!! Form::label('Venta #') !!}
                        <div class="btn-group">
                            <a id="verVenta" data-toggle="modal" data-target="#modalVentas" class="btn btn-default"><i class="fa fa-eye"></i></a>
                            {!! Form::select('sales_id',$sales, isset($sales_id) ? $sales_id : null, ['class'=>'form-control select2']) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 form-group">
                        {!! Form::label('Factura #') !!}
                        <div class="btn-group">
                            <a href="" class="btn btn-default"><i class="fa fa-eye"></i></a>
                            {!! Form::select('invoices_id',$invoices, null, ['class'=>'form-control select2']) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 form-group">
                        {!! Form::label('Remito #') !!}
                        <div class="btn-group">
                            <a href="" class="btn btn-default"><i class="fa fa-eye"></i></a>
                            {!! Form::select('senders_id',$senders, null, ['class'=>'form-control select2']) !!}
                        </div>
                    </div>

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
                                <label>
                                    {!! Form::checkbox('form_12', null) !!}
                                     Formulario 12
                                </label>
                            </div>
                        </div>
                        {!! Form::file('form_12_file') !!}
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('form_59', 1,null) !!}
                                     Formulario 59
                                </label>
                            </div>
                        </div>
                    {!! Form::file('form_59_file') !!}
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
@endsection

@section('js')
    <script>
        $(document).on("ready", function() {

            // with plugin options
            $("input[type=checkbox]").checkboxX({
                threeState: false,
                size: 'xs',
                theme: 'krajee-flatblue',
                enclosedLabel: true
            });


            var btnVenta = $("#verVenta");

            btnVenta.on('click',function(ev){
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
            })


        })
    </script>



@endsection

