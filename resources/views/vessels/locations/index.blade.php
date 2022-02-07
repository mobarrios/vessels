@extends('template.model_index')
    @section('table')
      <thead>
          <th></th>
          <th>TYPE</th>
          <th>NAME</th>
      </thead>
      <tbody>
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                {{-- <td>{{$model->id}}</td> --}}
                <td>{{$model->type }}</td>
                <td>{{$model->name }}</td>
            </tr>
        @endforeach
      </tbody>
    @endsection
