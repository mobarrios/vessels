@extends('template.model_index')
@section('table')

    @foreach($models->where('status',4) as $model)
        <tr>
            <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
            <td>{{$model->id}}</td>
            <td>{{$model->created_at}}</td>
            <td>{{$model->Sales->User->fullName or  ''}}</td>

            <td>
                # {{$model->items_id}}
                {{$model->Items->Models->Brands->name}}
                {{$model->Items->Models->name}}
            </td>
            <td>
                de <b>{{$model->Items->Branches}}</b> a <b>{{$model->BranchesTo->name}}</b>
            </td>
            <td>
                <span class="label label-default">{{$model->statusName}}</span>
            </td>
        </tr>
    @endforeach

@endsection


@section('box')

    <div class="col-xs-8">
        <div class="box box-danger">
            <div class="box-header with-border">
                <span class="text-bold">PENDIENTES</span>
            </div>
            <div class="box-body">
                <table class="table ">
                    <thead>
                    <th>Pedido #</th>
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
@endsection