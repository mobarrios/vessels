@extends('template.model_index')
    @section('table')
        <div class="box-body table-responsive">
            <table class="table table-hover">

                <thead>
                    <th width="1%"><input type="checkbox"></th>
                    <th>#</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($models as $model)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$model->id}}</td>
                            <td>{{$model->name }}</td>
                            <td>{{$model->slug}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    @endsection