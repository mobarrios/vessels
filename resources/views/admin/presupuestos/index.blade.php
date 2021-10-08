@extends('template.model_index')
    @section('table')
        @foreach($models as $model)

            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>
                    {{ isset($model->Producto->Model->name) ? $model->Producto->Model->name : '' }} 
                <strong>{{ isset($model->Producto->Model->Brands->name) ? ': '.$model->Producto->Model->Brands->name : ''  }} {{ !empty($model->Producto->capacidad) ? $model->Producto->capacidad . ' GB' : '' }}</strong>
                
                </td> 

                <td>{{ isset($model->Cliente) ? $model->Cliente->fullname : '' }}</td>

                <td>$ {{$model->precio_final}}</td>
                <td>
                    @if($model->Estados->count() > 0)
                        {{ $model->Estados->last()->States->description }}
                    @endif

                </td>

                <td>
                    @if($model->Estados->count() > 0)
                    <span class="label" style="background-color:{{ $model->Estados->last()->States->color }} "> 
                        {{ $model->Estados->last()->States->description }} 
                    </span>
                    @endif
                </td>

                <td><a href="{{ route('admin.presupuestos.show', $model->id)}}" class="btn btn-sm btn-success"><span class="fa  fa-info-circle"></span></a></td>
            </tr>
        @endforeach
    @endsection