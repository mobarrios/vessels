@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->name }}</td>
                <td>Tank </td>
                <td>{{$model->capacities}} {{$model->um}}</td>

                <td>
                  @foreach ($model->CargoTypes as $key )
                    <label class='label label-success'>{{$key->name}}</label>
                  @endforeach
                </td>
            </tr>
        @endforeach
    @endsection
