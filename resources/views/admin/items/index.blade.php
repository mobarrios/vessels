@extends('template.model_index_sin_create')

    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{ isset($model->Models->Brands->name) ? $model->Models->Brands->name : '' }} <strong>{{ isset($model->Models->name) ? $model->Models->name : '' }}</strong><br></td>
                <td>{{ isset($model->Compra->color) ? $model->Compra->color : '' }}</td>
                <td>{{ isset($model->Compra->capacidad) ? $model->Compra->capacidad : '' }}</td>
                <td>Precio Venta <strong>$ {{ isset($model->Compra->precio_venta) ? $model->Compra->precio_venta : ''}}</strong><br></td>
                <td><span class="label" style="background-color:{{ isset($model->lastItemsEstados()->States->color) ? $model->lastItemsEstados()->States->color : '' }} "> {{ isset($model->lastItemsEstados()->States->description) ? $model->lastItemsEstados()->States->description : '' }} </span></td>
                <td><span class="label label-default"> {{ isset($model->lastItemsSursales()->Sucursal->name) ? $model->lastItemsSursales()->Sucursal->name : '' }} </span></td>
                {{--
                <td>
                    {{dd($model->ItemsSucursales)}}
                    @if($model->Sucursal)
                    <label class="label label-default"> {{$model->Sucursal->name }}</label>
                    @endif
                </td>
                --}}
                <td><a href="{{route('admin.items.show', $model->id)}}" class="btn btn-sm btn-success" ><span class="fa  fa-info-circle"></span></a></td>
               
            </tr>
        @endforeach


    @endsection