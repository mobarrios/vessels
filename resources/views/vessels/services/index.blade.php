@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->start_date }}</td>
                <td>{{$model->end_date }}</td>
                <td>{{$model->Vessels->name }} </td>
                <td>{{$model->origin }} </td>
                <td>{{$model->destiny}} </td>
                <td><label class='label label-default'>Iniciado</label></td>
                <td><a href={{route('vessels.operations.index')}} class='btn btn-xs btn-warning'>Activities</a></td>
            </tr>
        @endforeach
    @endsection
