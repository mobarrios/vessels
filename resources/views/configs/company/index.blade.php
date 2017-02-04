@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td><strong>{{$model->rs1_razon_social }}</strong></td>
                <td>{{$model->rs1_nombre_fantasia}}</td>
                <td>{{$model->rs1_cuit}}</td>
                <td>{{$model->rs1_direccion}}</td>
                <td>{{$model->rs1_condicion_iva}}</td>


            </tr>
        @endforeach
    @endsection