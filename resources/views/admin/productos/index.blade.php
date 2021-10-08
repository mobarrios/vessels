@extends('template.model_index')
    @section('table')
        @foreach($models as $model)

            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>
                    {{ isset($model->Model->name) ? $model->Model->name : '' }} 
                <strong>{{ isset($model->Model->Brands->name) ? ': '.$model->Model->Brands->name : ''  }} </strong>
                </td>  
                <td><strong>Gama</strong> {{ $model->gama }}</td>
                <td>{{ !empty($model->capacidad) ? $model->capacidad . ' GB' : '' }} </td>
             
                <td>$ {{$model->precio_final}}</td>
            </tr>
        @endforeach
    @endsection