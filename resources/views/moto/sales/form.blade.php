@extends('template.model_form')

@section('form_title')
    Nueva Venta
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

        {!! Form::hidden('users_id',\Illuminate\Support\Facades\Auth::user()->id) !!}

    @if(\Illuminate\Support\Facades\Auth::user()->Brancheables->count() >= 1)
        <div class="col-xs-2 form-group">
            {!! Form::label('Tu Sucursal') !!}
            {!! Form::select('branches_id',\Illuminate\Support\Facades\Auth::user()->branches_name ,null, ['class'=>'select2 form-control']) !!}
        </div>
    @endif


    <div class="col-xs-2  form-group">
        {!! Form::label('Fecha Pactada') !!}
        {!! Form::text('date_confirm', null, ['class'=>'datePicker form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
        {!! Form::label('Cliente') !!}
        {!! Form::select('clients_id',$clients ,null, ['class'=>'select2 form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
        {!! Form::label('Sucursal de Entrega') !!}
        {!! Form::select('branches_confirm_id',$branches ,null, ['class'=>'select2 form-control']) !!}
    </div>

    <div class="col-xs-2 form-group" style="padding-top: 2%">
        <button type="submit" class="btn btn-default"><span class="fa fa-save"></span></button>
        @if(isset($models))
            <a href="#" data-action="{!! route("moto.sales.addItems") !!}" data-toggle="control-sidebar"
               class="btn btn-default"><span class="fa fa-plus"></span></a>
        @endif
    </div>

    {!! Form::close() !!}

    @if(isset($models))
        <div class="col-xs-12">
            <table class="table">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>N Motor</th>
                    <th>N Cuadro</th>
                    <th>Importe Articulo</th>
                    <th>Patentamiento</th>
                    <th>Pack Service</th>
                    <th>S. Total</th>
                </tr>
                <tbody>
                <?php $total = 0; ?>
                @foreach($models->SalesItems as $item)

                    <tr>
                        <td>{{$item->Items->Models->Brands->name}}</td>
                        <td><a href="{{route('moto.items.edit',$item->Items->id)}}">{{$item->Items->Models->name}}</a></td>
                        <td>{{$item->Items->Colors->name}}</td>
                        <td>{{$item->Items->n_motor}}</td>
                        <td>{{$item->Items->n_cuadro}}</td>
                        <td>
                            $ {{number_format($item->price_actual ,2)}}
                        </td>
                        <td>
                            $ {{number_format($item->patentamiento ,2)}}
                        </td>
                        <td>
                            $ {{number_format($item->pack_service ,2)}}
                        </td>
                        <td>
                            $ {{number_format(($item->price_actual +$item->patentamiento+$item->pack_service),2)}}
                        </td>
                        <td>
                            <a  class="btn btn-xs btn-default" href="{{route('moto.sales.deleteItems',[$item->id,$models->id])}}"><span
                                        class="text-danger fa fa-trash"></span></a>
                            <a class="btn btn-xs btn-default" href="{{route('moto.sales.editItems',[$item->id,$models->id])}}"><span
                                        class="text-success fa fa-edit"></span></a>
                        </td>
                    </tr>
                    <?php $total +=  $item->price_actual +$item->patentamiento+$item->pack_service ; ?>
                    @endforeach
                </tbody>
            </table>

            <div class="col-xs-12">
                <b>TOTAL $ {{number_format($total,2)}}</b>
            </div>
        </div>
        @endif

        @endsection


        @section('formAside')

        @include('moto.partials.asideOpenForm')

        @if(isset($models))

                <!-- .control-sidebar-menu -->

        @if(isset($modelItems))
            {!! Form::model($modelItems,['route'=> ['moto.sales.updateItems', $modelItems->id,$models->id], 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> ['moto.sales.addItems' ], 'files' =>'true']) !!}
        @endif

        {!! Form::hidden('sales_id',$models->id) !!}
        {!! Form::hidden('branches_id',$models->Brancheables->first()->Branches->id) !!}


        <div class="col-xs-12  form-group">
            {!! Form::label('Modelo') !!}
            <select id="select_model" name='models_id' class=" select2 form-control">
                @foreach($brands as $br)
                    <optgroup label="{{$br->name}}">
                        @foreach($br->Models as $m)
                            @if($m->stock >= 1)
                                <option value="{{$m->id}}" @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                            @endif
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>

        <div class="col-xs-12 form-group">
            {!! Form::label('Precio Unidad') !!}
            {!! Form::number('price_actual', null, ['class'=>'form-control price']) !!}
        </div>

        <div class="col-xs-6 form-group">
            {!! Form::label('Patentamiento') !!}
            {!! Form::number('patentamiento', null, ['class'=>'form-control patentamiento']) !!}
        </div>

        <div class="col-xs-6  form-group">
            {!! Form::label('Pack Service') !!}
            {!! Form::number('pack_service', null, ['class'=>'form-control packService']) !!}
        </div>



        <div class="col-xs-12 text-center form-group" style="padding-top: 2%">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
        </div>
        {!! Form::close() !!}
                <!-- /.control-sidebar-menu -->
    @endif
    @include('moto.partials.asideCloseForm')



@endsection

@section('js')
    <script>
        $('#select_model').on('change',function(){
           var id = $(this).val();

            $.ajax({
                method: 'GET',
                url: 'moto/modelLists/'+id,
                success: function(data){
                   // $.each(data, function(i , v){
                        $('.price').val(data.active_list_price.price_list);
                        $('.patentamiento').val(data.patentamiento);
                        $('.packService').val(data.pack_service);


                    //});
                }
            })
        });

    </script>
@endsection