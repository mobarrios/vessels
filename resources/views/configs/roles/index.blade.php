@extends('template.model_index')
    @section('table')
      <thead>
          <th></th>
          <th>ID</th>
          <th></th>
          <th></th>
          <th></th>

      </thead>
      <tbody>
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->name }}</td>
                <td>{{$model->slug}}</td>
                <td>{{$model->level}}</td>
            </tr>
        @endforeach
      </tbody>

    @endsection
