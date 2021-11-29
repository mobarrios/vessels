@extends('template.model_index')
    @section('table')
        <thead>
            <th></th>
            <th>Location</th>
            <th>Date</th>


        </thead>
        <tbody>
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                {{-- <td>{{$model->id}}</td> --}}
                <td>{{$model->Locations->name }}</td>
                <td>{{$model->created_at }}</td>

            </tr>
        @endforeach
        </tbody>
    @endsection
