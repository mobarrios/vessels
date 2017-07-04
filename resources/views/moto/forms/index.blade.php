@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>

                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->number }}</td>
                <td>Formulario : <strong>{{$model->Types }}</strong></td>
                <td><label class="label label-default">{{$model->StatusName }}</label> </td>

            </tr>
        @endforeach
    @endsection