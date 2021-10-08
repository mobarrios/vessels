@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>

                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->nombre }}</td>
                <td><strong>Gama</strong> {{ $model->gama }}</td>
                <td>{{$model->tipo}}</td>
                <td>{{$model->porcentaje}} %</td>
                <td>$ {{$model->importe}}</td>

            </tr>
        @endforeach
    @endsection