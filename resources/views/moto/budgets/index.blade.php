@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>

                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>

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