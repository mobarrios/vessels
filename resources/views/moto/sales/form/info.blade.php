<div class="row invoice-info">
    @if(isset($models))
    <div class="col-sm-3 invoice-col">
        <address>
            <strong>Resumen</strong><br>

            <span class="text-muted">Fecha : </span> {!! $models->created_at !!}<br>
            <span class="text-muted"> Entrega : </span> {!! $models->date_confirm !!}
            en {!! $models->branchesConfirm->name  !!}<br>
            <span class="text-muted"> Usuario : </span> {!! $models->User->fullName !!}
            en {!! $models->Brancheables->first()->Branches->name !!}<br>
            <span class="text-muted"> Estado : </span>
            <button class="btn btn-xs btn-danger">Finalizada</button>
            <br>

        </address>
    </div>

    <div class="col-sm-3 invoice-col">
        <address>
            <strong>Cliente</strong><br>
            <span class="text-muted">Apellido Nombre : </span>{!! $models->Clients->fullName !!}<br>
            <span class="text-muted">Doc. : </span>{!! $models->Clients->dni !!}<br>
            <span class="text-muted">Dir. : </span>{!! $models->Clients->address !!}, {!! $models->Clients->city !!}
            ,{!! $models->Clients->location !!}, {!! $models->Clients->province !!}<br>
            <span class="text-muted">Email : </span>{!! $models->Clients->email !!}<br>
            <span class="text-muted">Tel. : </span>{!! $models->Clients->phone1 !!}  {!! $models->Clients->phone2 !!}
        </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-3 invoice-col">
        <address>
            <strong>Artículos</strong><br>
            <span class="text-muted"> Items </span><br>
            @foreach($models->SalesItems as  $item)
                  <a href="{{route('moto.items.edit', $item->Items->id)}}"># {!! $item->Items->id !!} </a> {!! $item->Items->Models->Brands->name !!} {!! $item->Items->Models->name !!} {!! $item->Items->Colors->name !!} <br>
                   <span class="text-muted"> Motor : </span>{!! $item->Items->n_motor !!} <span class="text-muted">Cuadro : </span> {!! $item->Items->n_cuadro !!}
                <br>
            @endforeach
            <hr>
            <span class="text-muted">Adicionales </span><br>
                @foreach($models->Additionables as  $item)
                - {!! $item->Additionals->name !!} <br>
            @endforeach
        </address>
    </div>


    <div class="col-sm-3 invoice-col">
        <address>
            <strong>Contable</strong><br>
                <span class="text-muted">Total Venta: </span>
                    <b class="text-danger total"
                       data-precio="{!! ($total+($models->totalAdditionalsAmount == '0' ? 0 : $models->totalAdditionalsAmount) ) - $pago !!}">
                        $ {{number_format($models->total ,2)}}
                    </b>
<br>
            <span class="text-muted">Total Adeudado: </span>
            <b class="text-danger total"
               data-precio="{!! ($total+($models->totalAdditionalsAmount == '0' ? 0 : $models->totalAdditionalsAmount) ) - $pago !!}">
                $ {{number_format($models->adeudado,2)}}
            </b>
        </address>

        <hr>
        <address>
            <strong>Puesta en marcha</strong>
            
            <br>
            
            <div class="form-group">
            
                <span class="text-muted">Asignar mecánico: </span>

                <div class="input-group">
                    {!! Form::select('mechanics_id',$mecanicos,null,['class' => 'form-control']) !!}
                    <a class="btn btn-primary input-group-addon" id="mechanics_id">
                        <i class="fa fa-cogs"></i>
                    </a>
                </div>
            
            </div>
            
        </address>

        


    </div>
        <span class="clearfix"></span>
    <div class="col-xs-12">
        <div class="btn-group btn-group-xs pull-right">
            <a href="{!! route('moto.sales.r431',$models->id) !!}" class="btn btn-default">R-431</a>
            <a href="{!! route('moto.sales.hojaDeVenta',$models->id) !!}" class="btn btn-default">Hoja de venta</a>
        </div>
    </div>
    @endif


</div>

@section('js')
    <script>
        $("#mechanics_id").on('click',function(ev){

            var mechanic = $('select[name=mechanics_id]').val();

            $.ajax({
                method: 'get',
                url: 'moto/sales/asignMechanic/{!! $models->id !!}/'+mechanic,
                success: function(data){
                    $(".breadcrumb").after('<div class="alert bg-warning  alert-dismissible" id="messages"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+data+'</div>');
                },
                error: function (error) {
                    $(".breadcrumb").after('<div class="alert bg-warning  alert-dismissible" id="messages"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+data+'</div>');
                }
            });


        })


    </script>
@endsection