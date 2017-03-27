@extends('template.model_index')
@section('table')
    @foreach($models as $model)
        <tr>
            <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
            <td>{{$model->id}}</td>

            <td>
            </td>

            <td>
                {!! $model->date !!}
            </td>

            <td>
                <b>${!! $model->amount !!}</b>
            </td>

            <td>

            </td>

            <td>

            </td>

            <td>

            </td>

        </tr>
    @endforeach
@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('#btn-nuevo').attr('href',"{!! route('moto.smallBoxes.create', $entry) !!}")

            $('#btn-destroy').attr('href',"{!! route('moto.smallBoxes.destroy', $entry) !!}")

            $('#edit_btn').attr('route_edit',"{!! route('moto.smallBoxes.edit', $entry) !!}")
        })
    </script>


@endsection
