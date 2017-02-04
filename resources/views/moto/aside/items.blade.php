
@if(!empty($data['hidden']))
    @foreach($data['hidden'] as $name => $val)
        {!! Form::hidden($name,$val) !!}
    @endforeach
@endif

@if($data['type'] == 'items')
    @if(array_has(config('models.'.$section.'.asideInputs'),'items'))
        @if(array_has(config('models.'.$section.'.asideInputs.items'),'models_id'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Modelo') !!}
            <select id="select_model" name='models_id' class=" select2 form-control" placeholder="Seleccione un modelo">
                <option>Seleccionar...</option>
                @foreach($brands as $br)
                    <optgroup label="{{$br->name}}">
                        @foreach($br->Models as $m)
                            @if($m->stock >= 1)
                                <option value="{{$m->id}}"
                                        @if(isset($modelItems) && ($modelItems->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                            @endif
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'colors_id'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Color') !!}
            @if(isset($modelItems))
                @if(is_array($colors))
                    <select name="colors_id" id="colors" class="form-control select2">
                        @foreach($colors as $cant => $color)
                            @foreach($color as $col)
                                <option value=' {!! $col->colors_id  !!} ' @if($col->colors_id == $modelItems->colors_id) selected = "selected" @endif> {!! $col->colors->name !!} ( {!! $color->count() !!} ) </option>
                            @endforeach
                        @endforeach
                    </select>
                @else
                    {!! Form::select('colors_id', [],null, ['class'=>'form-control select2',"id" => "colors"]) !!}
                @endif
                {{--                {!! Form::select('colors_id', $colors,null, ['class'=>'form-control select2',"id" => "colors"]) !!}--}}
            @else
                {!! Form::select('colors_id', [],null, ['class'=>'form-control select2',"id" => "colors"]) !!}
            @endif
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'patentamiento'))
        <div class="col-xs-6 col-lg-6 form-group">
            {!! Form::label('Patentamiento') !!}
            {!! Form::number('patentamiento', null, ['class'=>'form-control patentamiento', config('models.'.$section.'.asideInputs.items.patentamiento') => config('models.'.$section.'.asideInputs.items.patentamiento')]) !!}
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'price_budget'))
        <div class="col-xs-6 col-lg-6 form-group">
            {!! Form::label('Subtotal') !!}
            {!! Form::number('price_budget', null, ['class'=>'form-control sTotal']) !!}
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'pack_service'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Pack service') !!}
            {!! Form::number('pack_service', null, ['class'=>'form-control packService', config('models.'.$section.'.asideInputs.items.pack_service') => config('models.'.$section.'.asideInputs.items.pack_service')]) !!}
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'price_actual'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Precio Unidad') !!}
            {!! Form::number('price_actual', null, ['class'=>'form-control price']) !!}
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'cedula'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Cédula') !!}
            {!! Form::number('cedula', null, ['class'=>'form-control']) !!}
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'alta_patente'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Alta Pat.') !!}
            {!! Form::number('alta_patente', null, ['class'=>'form-control']) !!}
        </div>
        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'ad_suc'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Ad. Suc.') !!}
            {!! Form::number('ad_suc', null, ['class'=>'form-control']) !!}
        </div>

        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'lojack'))
        <div class="col-xs-6  form-group">
            {!! Form::label('LoJack') !!}
            {!! Form::number('lojack', null, ['class'=>'form-control']) !!}
        </div>

        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'alta_seguro'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Alta Seguro') !!}
            {!! Form::number('alta_seguro', null, ['class'=>'form-control']) !!}
        </div>

        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'repuestos'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Repuestos') !!}
            {!! Form::number('repuestos', null, ['class'=>'form-control']) !!}
        </div>

        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'larga_distancia'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Larga Distancia') !!}
            {!! Form::number('larga_distancia', null, ['class'=>'form-control']) !!}
        </div>

        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'formularios'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Formularios') !!}
            {!! Form::number('formularios', null, ['class'=>'form-control']) !!}
        </div>

        @endif

        @if(array_has(config('models.'.$section.'.asideInputs.items'),'seguro_tipo'))

        <div class="col-xs-6  form-group">
            {!! Form::label('Tipo Seguro') !!}
            {!! Form::select('seguro_tipo', ['rc'=>'RC' ,'rcr'=> 'RCR' ],null, ['class'=>'form-control']) !!}
        </div>
        @endif

    @endif
@endif



@if($data['type'] == 'pay')
    @if(array_has(config('models.'.$section.'.asideInputs'),'pay'))
        @if(array_has(config('models.'.$section.'.asideInputs.pay'),'amount'))
            <div class="col-xs-2 form-group">
                {!! Form::label('Monto') !!}
                {!! Form::number('amount' ,null, ['class'=>' form-control']) !!}
            </div>
        @endif
        @if(array_has(config('models.'.$section.'.asideInputs.pay'),'financials_id'))

            <div class="col-xs-4 form-group">
                {!! Form::label('Forma de Pago') !!}

                {!! Form::select('financials_id',\App\Http\Repositories\Moto\FinancialsRepo::ListsData('name','id') ,null, ['class'=> 'select2 form-control']) !!}

            </div>
        @endif
        @if(array_has(config('models.'.$section.'.asideInputs.pay'),'ccn'))
            <div class="col-xs-3 form-group">
                {!! Form::label('Nro . Tarjeta') !!}
                {!! Form::text('ccn', null, ['class'=>' form-control']) !!}
            </div>
        @endif
        @if(array_has(config('models.'.$section.'.asideInputs.pay'),'ccc'))
            <div class="col-xs-1 form-group">
                {!! Form::label('Cod. Seg.') !!}
                {!! Form::text('ccc', null, ['class'=>' form-control']) !!}
            </div>
        @endif
        @if(array_has(config('models.'.$section.'.asideInputs.pay'),'cce'))
            <div class="col-xs-1 form-group">
                {!! Form::label('Vto.') !!}
                {!! Form::text('cce', null, ['class'=>' form-control']) !!}
            </div>
        @endif
    @endif
@endif







<div class="col-xs-12 text-center form-group" style="padding-top: 2%">
    <button type="submit" class="btn btn-primary">Agregar</button>
    <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
</div>

@section('js')

    <script>
        $('a[data-toggle=control-sidebar]').click(function () {
            $('.control-sidebar-heading').html($(this).attr('data-title'))
        })
    </script>

@endsection