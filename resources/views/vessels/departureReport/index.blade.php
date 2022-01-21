@extends('template.model_index')
    @section('table')
        <thead>
            <th></th>
            <th>Departure Location</th>
            <th>Departure DateTime</th>
        </thead>
        <tbody>
        @foreach($models as $model)
          @if($model->services_id == Session::get('servicesId'))
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                {{-- <td>{{$model->id}}</td> --}}
                <td>{{$model->Locations->name }}</td>
                <td>{{$model->created_at }}</td>
            </tr>
          @endif
        @endforeach
        </tbody>
    @endsection
