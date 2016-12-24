@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->user->fullName}}</td>

                <td>{{$model->date_confirm }}</td>
                <td><a href="{{route('moto.clients.edit',$model->clients_id) }}" >{{$model->Clients->fullName}}</a></td>
                <td>Sucursal de Entrega : {{$model->BranchesConfirm->name}}</td>

            </tr>
        @endforeach
    @endsection