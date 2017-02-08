@extends('template.model_index')
@section('table')



    @foreach($models as $model)

        <tr>
            <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
            <td>{{$model->id}}</td>
            <td>{{$model->created_at}}</td>
            <td>Cant: <strong>{{$model->quantity}}</strong></td>
            <td><strong>{{$model->Models->Brands->name}}</strong></td>
            <td><strong>{{$model->Models->name}}</strong></td>
            <td>{{$model->Colors->name}}</td>
            <td>{{$model->Users->fullName}}</td>
            <td>
                <span class="label label-default">{{$model->actual_status}}</span>
            </td>
        </tr>
    @endforeach
@endsection