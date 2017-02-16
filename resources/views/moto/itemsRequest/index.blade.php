@extends('template.model_index')
@section('table')

    @foreach($models->where('status',4) as $model)
        <tr>
            <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
            <td>{{$model->id}}</td>
            <td>{{$model->created_at}}</td>
            <td>
                 <strong>cod : {{$model->items_id}} </strong>
                | {{$model->Items->Models->Brands->name}}
                {{$model->Items->Models->name}}
            </td>
            <td>
                <span class="text-muted">Origen:</span>   {{$model->Items->Branches}}
            </td>
            <td>
                <span class="text-muted">Destino:</span>  {{$model->BranchesTo->name}}
            </td>
            <td>
                <span class="label label-default">{{$model->statusName}}</span>
            </td>
        </tr>
    @endforeach


    @section('footTable')

<hr>
            <a href="{{route('moto.itemsRequest.notaPedido')}}" target="_blank" class="btn btn-default" title="Enviar Reparto"><span class="fa fa-truck" ></span></a>

    @endsection

@endsection


@section('box')

    <div class="col-xs-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <span class="text-bold">PENDIENTES DE APROBACIÓN</span>
            </div>
            <div class="box-body">
                <table class="table ">
                    <thead>
                    <th>Pedido #</th>
                    <th>Tipo</th>
                    <th>Fecha Solicitud</th>
                    <th>Artículo</th>
                    <th>Sucursal</th>
                    <th>Usuario</th>
                    <th></th>

                    </thead>
                    <tbody>
                    @foreach($models->where('status',1) as $pending)
                        <tr>
                            <td>{{$pending->MyRequest->id}}</td>
                            <td><label class="label label-default">{{$pending->MyRequest->Types}}</label></td>
                            <td>{{date('d-m-Y',strtotime($pending->created_at))}}</td>
                            <td><strong>{{$pending->MyRequest->Models->Brands->name}} <span class="text-blue">{{$pending->MyRequest->Models->name}}</span></strong></td>
                            <td>{{$pending->MyRequest->Brancheables->first()->Branches->name}}</td>
                            <td>{{$pending->MyRequest->Users->fullName}}</td>
                            <td>
                                <a href="{{route('moto.itemsRequest.asign',[ $pending->MyRequest->models_id , $pending->Brancheables->first()->branches_id, $pending->my_request_id ] )}}"
                                   class="btn btn-xs btn-primary"> Aceptar</a>
                            </td>
                            <td>
                                <a href="{{route('moto.itemsRequest.reject', $pending->id )}}"
                                   class="reject btn btn-xs btn-danger"> Rechazar</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="box box-warning">
            <div class="box-header with-border">
                <span class="text-bold">EN TRANSITO</span>
            </div>
            <div class="box-body">
                <table class="table ">
                    <thead>
                    <th>Pedido #</th>
                    <th>Tipo</th>
                    <th>Fecha Solicitud</th>
                    <th>Artículo</th>
                    <th>Sucursal</th>
                    <th>Usuario</th>
                    <th></th>

                    </thead>
                    <tbody>

                    @foreach($models->where('status',4) as $model)
                        <tr>
                            <td>{{$model->id}}</td>
                            <td>{{$model->created_at}}</td>
                            <td>
                                <strong>cod : {{$model->items_id}} </strong>
                                | {{$model->Items->Models->Brands->name}}
                                {{$model->Items->Models->name}}
                            </td>
                            <td>
                                <span class="text-muted">Origen:</span>   {{$model->Items->Branches}}
                            </td>
                            <td>
                                <span class="text-muted">Destino:</span>  {{$model->BranchesTo->name}}
                            </td>
                            <td>
                                <span class="label label-default">{{$model->statusName}}</span>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection