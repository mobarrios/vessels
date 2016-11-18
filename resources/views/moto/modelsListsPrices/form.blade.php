@extends('template.model_form')

    @section('form_title')
        Nuevo Artículo
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

        <div class="col-xs-6 form-group">
            {!! Form::label('Nombre Lista de Precio') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
            {!! Form::label('Proveedor') !!}
            {!! Form::select('providers_id', $providers,null, ['class'=>'select2 form-control']) !!}
        </div>

        <div class="col-xs-2 form-group" style="padding-top: 2%">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                <span class="fa fa-plus"></span>
            </button>
        </div>



        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                <th>Modelo</th>
                <th>$ Lista</th>
                <th>$ Contado</th>
                <th>Dto. Max.</th>
                </thead>
                <tbody>

                

                </tbody>
            </table>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-default">Aceptar</button>
        </div>
        {!! Form::close() !!}

        <!-- Modal -->
        <div class="modal  bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Item</h4>
                    </div>
                    <div class="modal-body row">
                    {!! Form::open(['route'=>'moto.modelsListsPricesAddItems']) !!}
                        <div class="col-xs-12 form-group">
                            {!! Form::label('Modelo') !!}
                            {!! Form::select('models_id', $models_lists, null, ['class'=>'form-control select2']) !!}
                        </div>
                        <div class="col-xs-4 form-group">
                            {!! Form::label('Precio de Lista') !!}
                            {!! Form::text('price_list', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-xs-4 form-group">
                            {!! Form::label('Precio de Contado') !!}
                            {!! Form::text('price_net', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-xs-4 form-group">
                            {!! Form::label('Dto. Máximo') !!}
                            {!! Form::text('max_discount', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="col-xs-12 form-group">
                            {!! Form::label('Observaciones') !!}
                            {!! Form::text('obs', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Aceptar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    @endsection

