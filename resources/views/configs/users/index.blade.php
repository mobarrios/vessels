@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->fullName }}</td>
                <td>{{$model->email}}</td>
                <td>
                    @foreach($model->Roles as $rol)
                        {{$rol->name}}
                    @endforeach
                </td>

                <td><span class="label label-success">Activo</span></td>
            </tr>
        @endforeach
    @endsection