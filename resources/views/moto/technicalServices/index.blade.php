@extends('template.model_index')
@section('table')
    @foreach($models as $model)
        <tr>
            <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
            <td>{{$model->id}}</td>
            <td>{{$model->Clients->fullName}}</td>
            <td>{{$model->descripcion_cliente}}</td>

            <td>{{$model->status}}</td>

        </tr>
    @endforeach
@endsection