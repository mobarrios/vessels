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
            <span class="text-muted"> Estado : </span> <span class="label label-success">{!! $models->status !!}</span><br>

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
    </div>
    @endif

</div>