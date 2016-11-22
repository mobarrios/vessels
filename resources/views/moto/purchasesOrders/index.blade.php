@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>

                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->date }}</td>
                <td>{{$model->quantity }}</td>
                <td>{{$model->Models->Brands->name }} : {{$model->Models->name }}</td>
                <td>$ {{$model->price}}</td>
                <td>$ {{$model->price * $model->quantity }}</td>
                <td>% {{$model->discount}}</td>
                <td>$ {{( ($model->price * $model->quantity) - (($model->price * $model->quantity) *  $model->discount ) / 100)   }}</td>

            </tr>
        @endforeach
    @endsection