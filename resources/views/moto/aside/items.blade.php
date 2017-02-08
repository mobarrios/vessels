@if($type == 'items')
    @if(isset($modelItems))
        {!! Form::model($modelItems,['route'=> $routeItems, 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> $routeItems, 'files' =>'true']) !!}
    @endif

    @if($hidden)
        @foreach($hidden as $name => $value)
            {!! Form::hidden($name, $value) !!}
        @endforeach
    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'models_id'))
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

    @if(array_has(config('models.'.$section.'.asideItems'),'colors_id'))
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

    @if(array_has(config('models.'.$section.'.asideItems'),'patentamiento'))
        <div class="col-xs-6 col-lg-6 form-group">
            {!! Form::label('Patentamiento') !!}
            {!! Form::number('patentamiento', null, ['class'=>'form-control patentamiento', config('models.'.$section.'.asideItems.patentamiento') => config('models.'.$section.'.asideItems.patentamiento')]) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'price_budget'))
        <div class="col-xs-6 col-lg-6 form-group">
            {!! Form::label('Subtotal') !!}
            {!! Form::number('price_budget', null, ['class'=>'form-control sTotal']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'pack_service'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Pack service') !!}
            {!! Form::number('pack_service', null, ['class'=>'form-control packService', config('models.'.$section.'.asideItems.pack_service') => config('models.'.$section.'.asideItems.pack_service')]) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'price_actual'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Precio Unidad') !!}
            {!! Form::number('price_actual', null, ['class'=>'form-control price']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'cedula'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Cédula') !!}
            {!! Form::number('cedula', null, ['class'=>'form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'alta_patente'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Alta Pat.') !!}
            {!! Form::number('alta_patente', null, ['class'=>'form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'ad_suc'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Ad. Suc.') !!}
            {!! Form::number('ad_suc', null, ['class'=>'form-control']) !!}
        </div>

    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'lojack'))
        <div class="col-xs-6  form-group">
            {!! Form::label('LoJack') !!}
            {!! Form::number('lojack', null, ['class'=>'form-control']) !!}
        </div>

    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'alta_seguro'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Alta Seguro') !!}
            {!! Form::number('alta_seguro', null, ['class'=>'form-control']) !!}
        </div>

    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'repuestos'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Repuestos') !!}
            {!! Form::number('repuestos', null, ['class'=>'form-control']) !!}
        </div>

    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'larga_distancia'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Larga Distancia') !!}
            {!! Form::number('larga_distancia', null, ['class'=>'form-control']) !!}
        </div>

    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'formularios'))
        <div class="col-xs-6  form-group">
            {!! Form::label('Formularios') !!}
            {!! Form::number('formularios', null, ['class'=>'form-control']) !!}
        </div>

    @endif

    @if(array_has(config('models.'.$section.'.asideItems'),'seguro_tipo'))
         <div class="col-xs-6  form-group">
             {!! Form::label('Tipo Seguro') !!}
             {!! Form::select('seguro_tipo', ['rc'=>'RC' ,'rcr'=> 'RCR' ],null, ['class'=>'form-control']) !!}
         </div>
    @endif
@endif


@if($type == 'pays')

    @if(isset($modelPays))
        {!! Form::model($modelPays,['route'=> $routePays, 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> $routePays, 'files' =>'true']) !!}
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'amount'))
        <div class="col-xs-6 form-group">{!! Form::label('Monto') !!}
            {!! Form::number('amount' ,null, ['class'=>' form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'financials_id'))
         <div class="col-xs-6 form-group">
             {!! Form::label('Forma de Pago') !!}
             {!! Form::select('financials_id',$financials ,null, ['class'=> 'select2 form-control']) !!}
          </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'ccn'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Nro . Tarjeta') !!}
            {!! Form::text('ccn', null, ['class'=>' form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'ccc'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Cod. Seg.') !!}
            {!! Form::text('ccc', null, ['class'=>' form-control']) !!}
        </div>
    @endif

    @if(array_has(config('models.'.$section.'.asidePays'),'cce'))
        <div class="col-xs-6 form-group">
            {!! Form::label('Vto.') !!}
            {!! Form::text('cce', null, ['class'=>' form-control']) !!}
        </div>
    @endif
@endif


<div class="col-xs-12 text-center form-group" style="padding-top: 2%">
    <button type="submit" class="btn btn-primary">Agregar</button>
    <a data-toggle="control-sidebar" class="btn btn-danger">Cancelar</a>
</div>


<script src="js/asideModelsColors.js"></script>
