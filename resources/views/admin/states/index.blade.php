@extends('template.model_index')
    @section('table') 
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td><span class="label" style="background-color: {{ $model->color}}">{{$model->description }}</span></td>
                <td style="width: 60%" >{!! $model->text_email !!}</td>  
                <td>@if($model->enviar == 1) Se envia email al cliente @else No se envia al cliente @endif </td>           
                <td>@if($model->enviar_remito == 1) Se envia remito al cliente @endif </td> 
                <td>@if($model->confirmar_cliente == 1) Confirmación del Cliente @endif </td>           
                  
            </tr>
        @endforeach
    @endsection
