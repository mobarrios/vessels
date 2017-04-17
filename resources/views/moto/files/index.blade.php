@extends('template.model_index')
@section('table')
    @foreach($models as $model)
        <tr>
            <td style="width: 1%">
                <input class="id_destroy " value="{{$model->id}}" type="checkbox">
            </td>
            <td></td>
            <td><b>Factura #{!! $model->invoice->numero !!}</b></td>
            <td><b>Remito #{!! $model->sender->numero !!}</b></td>
        </tr>
    @endforeach
@endsection