@extends('template.model_index')
@section('table')
    @foreach($models as $model)
        <tr>
            <td style="width: 1%">
                <input class="id_destroy " value="{{$model->id}}" type="checkbox">
            </td>
            <td>
               # {!! $model->id !!}
            </td>
            <td>
                Venta Nro: {!! $model->sales->id !!}
            </td>
            <td>

                @foreach($model->factura as $factura )
                    <b>Factura #{!! $factura->numero !!}</b><br>
                @endforeach
            </td>
            <td>
                @foreach($model->remito as $remito )
                    <b>Remito #{!! $remito->numero !!}</b><br>
                @endforeach

            </td>
            <td>
                <span class="label label-primary">{!! $model->estado !!}</span>
            </td>
            <td>
                <span class="label label-success">{!! $model->ubicacion !!}</span>
            </td>
        </tr>
    @endforeach
@endsection