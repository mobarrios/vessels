@extends('template')
@section('sectionContent')
    <div class="row">
        <!-- Default box -->
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-xs-9">
                        <div class=" pull-left box-tools btn-group btn-group-sm ">
                            <a href="{{route($createRoute)}}" class="btn btn-default" title="Nuevo"><i class="fa fa-plus-square-o"></i></a>
                            <a href="{{route($destroyRoute)}}" class="btn btn-default" title="Borrar"><i class="fa fa-minus-square-o"></i></a>
                            <a href="{{route($editRoute)}}" class="btn btn-default" title="Editar"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-default" title="Exportar Excel"><i class="fa fa-file-excel-o"></i></a>
                            <a href="" class="btn btn-default" title="Exportar PDF"><i class="fa fa-file-pdf-o"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-3 ">
                        {!! Form::open(['route'=>$indexRoute,'method'=>'GET']) !!}
                        <div class="input-group input-group-sm" >
                            <input type="text" name="search" class="form-control pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>

                     @yield('table')

                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <h6 >Total de Registros : <strong>{{$models->count()}}</strong></h6>

                    <ul class="pagination pagination-md no-margin pull-right">
                        @if(isset($search))
                            {!! $models->appends(['search'=> $search])->render() !!}
                        @else
                            {!! $models->render() !!}
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection