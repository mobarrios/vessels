@extends('template.model_index')
@section('table')
    @foreach($models as $model)
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
                <span class="text-bold">Artículos SIN ASIGNAR</span>
            </div>
            <div class="box-body">
                <table class="table ">
                    <thead>
                    <th>Fecha Solicitud</th>
                    <th>Artículo</th>
                    <th>Sucursal</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th></th>

                    </thead>
                    <tbody>
                    @foreach($myRequests as $myRequest)
                        @for($i=0 ; $i < $myRequest->quantity;  $i++)
                            <tr>
                                <td>{{date('d-m-Y',strtotime($myRequest->created_at))}}</td>
                                <td>
                                    {{$myRequest->Models->Brands->name}}  <span class ="text-success">{{$myRequest->Models->name}}</span>
                                     | {{$myRequest->Colors->name}}
                                </td>
                                <td>
                                    <strong>{{$myRequest->Brancheables->first()->branches->name}}</strong>

                                </td>
                                <td>{{$myRequest->Users->fullname}}</td>
                                <th><a href="{{route('moto.itemsRequest.asign',[ $myRequest->models_id , $myRequest->Brancheables->first()->branches_id ] )}}" class="btn btn-xs btn-primary"> asignar</a></th>

                            </tr>
                        @endfor

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection