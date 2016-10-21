@extends('template')
@section('sectionContent')
    <div class="row">
        <!-- Default box -->
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="col-xs-8">
                        <div class="row pull-left box-tools ">
                            <button id="check_all" type="button" class="btn btn-sm btn-default" data-toggle="button" aria-pressed="false"><i class="fa fa-check-square-o"></i></button>
                            <div class="btn-group btn-group-sm">
                                <a href="{{route($createRoute)}}" class="btn btn-default" title="Nuevo"><i class="fa fa-plus-square-o"></i></a>
                                <button class="destroy_btn btn btn-default" url_destroy="{{$destroyUrl}}" title="Borrar"><i class="fa fa-minus-square-o"></i></button>
                                <a id="edit_btn"  href="{{route($editRoute)}}" class="btn btn-default" title="Editar" ><i class="fa fa-edit"></i></a>
                            </div>
                            <div class="btn-group btn-group-sm">
                                <a href="" class="btn btn-default" title="Exportar Excel"><i class="fa fa-file-excel-o"></i></a>
                                <a href="" class="btn btn-default" title="Exportar PDF"><i class="fa fa-file-pdf-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 ">
                        {!! Form::open(['route'=>$indexRoute,'method'=>'GET']) !!}

                        <div class="input-group input-group-sm" >
                            <input type="text" name="search" class="form-control pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>

                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtros <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        @foreach($filters as $filter => $v)
                                            <li><a ><input name="filter[]" value="{{$v}}"  checked type="checkbox"> {{$filter}}</a></li>
                                        @endforeach
                                    </ul>

                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
                <div class="box-body table-responsive">
                    <table class="table table-hover table-striped">
                        <tbody>
                            @yield('table')
                        </tbody>
                    </table>
                </div>
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