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
            </tr>
        @endforeach
    @endsection