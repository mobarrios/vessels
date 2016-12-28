@extends('template.model_index')
    @section('table')
        @foreach($budgets as $model)
            <tr>

                <td style="width: 1%">
                    <div class="icheckbox_flat-blue">
                        <input class="id_destroy" value="{{$model->id}}" type="checkbox">
                    </div>
                </td>

                <td>{{$model->id}}</td>

                <td>{{$model->date }}</td>
                <td>
                    <ul>
                        @forelse($model->allItems as $item)
                            <li> {!! $item->name !!}</li>
                        @empty

                        @endforelse
                    </ul>
                </td>
                <td>
                    <a href="{{route('moto.budgets.pdf',$model->id)}}" target="_blank" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></a>
                </td>
            </tr>
        @endforeach
    @endsection