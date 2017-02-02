
@if(isset($hidden))
    @foreach($hidden as $name => $val)
        {!! Form::hidden($name,$val) !!}
    @endforeach
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'models_id'))
<div class="col-xs-12  form-group">
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

@if(array_has(config('models.'.$section.'.asideInputs'),'colors_id'))
<div class="col-xs-12 form-group">
    {!! Form::label('Color') !!}
    @if(isset($modelItems))
        <select name="colors_id" id="colors" class="form-control select2">
            @foreach($colors as $cant => $color)
                @foreach($color as $col)
                    <option value=' {!! $col->colors_id  !!} ' @if($col->colors_id == $modelItems->colors_id) selected = "selected" @endif> {!! $col->colors->name !!} ( {!! $color->count() !!} ) </option>
                @endforeach
            @endforeach
        </select>
        {{--                {!! Form::select('colors_id', $colors,null, ['class'=>'form-control select2',"id" => "colors"]) !!}--}}
    @else
        {!! Form::select('colors_id', [],null, ['class'=>'form-control select2',"id" => "colors"]) !!}
    @endif
</div>
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'patentamiento'))
<div class="col-xs-12 col-lg-6 form-group">
    {!! Form::label('Patentamiento') !!}
    {!! Form::number('patentamiento', null, ['class'=>'form-control patentamiento', config('models.'.$section.'.asideInputs.patentamiento') => config('models.'.$section.'.asideInputs.patentamiento')]) !!}
</div>
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'price_budget'))
<div class="col-xs-12 col-lg-6 form-group">
    {!! Form::label('Subtotal') !!}
    {!! Form::number('price_budget', null, ['class'=>'form-control sTotal']) !!}
</div>
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'pack_service'))
<div class="col-xs-12 form-group">
    {!! Form::label('Pack service') !!}
    {!! Form::number('pack_service', null, ['class'=>'form-control packService', config('models.'.$section.'.asideInputs.pack_service') => config('models.'.$section.'.asideInputs.pack_service')]) !!}
</div>
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'price_actual'))
<div class="col-xs-12 form-group">
    {!! Form::label('Precio Unidad') !!}
    {!! Form::number('price_actual', null, ['class'=>'form-control price']) !!}
</div>
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'cedula'))
<div class="col-xs-3  form-group">
    {!! Form::label('Cédula') !!}
    {!! Form::number('cedula', null, ['class'=>'form-control']) !!}
</div>
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'alta_patente'))
<div class="col-xs-3  form-group">
    {!! Form::label('Alta Pat.') !!}
    {!! Form::number('alta_patente', null, ['class'=>'form-control']) !!}
</div>
@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'ad_suc'))
<div class="col-xs-3  form-group">
    {!! Form::label('Ad. Suc.') !!}
    {!! Form::number('ad_suc', null, ['class'=>'form-control']) !!}
</div>

@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'lojack'))
<div class="col-xs-3  form-group">
    {!! Form::label('LoJack') !!}
    {!! Form::number('lojack', null, ['class'=>'form-control']) !!}
</div>

@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'alta_seguro'))
<div class="col-xs-3  form-group">
    {!! Form::label('Alta Seguro') !!}
    {!! Form::number('alta_seguro', null, ['class'=>'form-control']) !!}
</div>

@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'repuestos'))
<div class="col-xs-3  form-group">
    {!! Form::label('Repuestos') !!}
    {!! Form::number('repuestos', null, ['class'=>'form-control']) !!}
</div>

@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'larga_distancia'))
<div class="col-xs-3  form-group">
    {!! Form::label('Larga Distancia') !!}
    {!! Form::number('larga_distancia', null, ['class'=>'form-control']) !!}
</div>

@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'formularios'))
<div class="col-xs-3  form-group">
    {!! Form::label('Formularios') !!}
    {!! Form::number('formularios', null, ['class'=>'form-control']) !!}
</div>

@endif

@if(array_has(config('models.'.$section.'.asideInputs'),'seguro_tipo'))

<div class="col-xs-3  form-group">
    {!! Form::label('Tipo Seguro') !!}
    {!! Form::select('seguro_tipo', ['rc'=>'RC' ,'rcr'=> 'RCR' ],null, ['class'=>'form-control']) !!}
</div>
@endif













<div class="col-xs-12 text-center form-group" style="padding-top: 2%">
    <button type="submit" class="btn btn-primary">Agregar</button>
    <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
</div>
