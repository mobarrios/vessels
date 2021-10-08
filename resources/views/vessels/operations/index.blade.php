@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->created_at}}</td>

                <td>{{$model->start_date}}</td>
                <td>{{$model->end_date}}</td>

                <td>{{$model->Locations->name}}</td>

                <td>{{$model->OperationsTypes->name}}</td>

                <td>{{$model->CargoTypes->name}}</td>
                <td>{{$model->quantity}} mt3</td>

                <td>{{$model->User->user_name}}</td>

            </tr>
        @endforeach
    @endsection
