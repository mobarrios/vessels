@extends('template.model_index')
@section('table')
    @foreach($models as $model)
        <tr>
            <td style="width: 1%">
                <input class="id_destroy" value="{{$model->id}}" type="checkbox">
            </td>
            <td>
               # {!! $model->id !!}
            </td>
            <td>
                Venta Nro: {!! $model->sales->id !!}
            </td>
            <td>

                @foreach($model->factura as $factura )
                    <b>Factura #{!! $factura->numero !!}</b><br>
                @endforeach
            </td>
            <td>
                @foreach($model->remito as $remito )
                    <b>Remito #{!! $remito->numero !!}</b><br>
                @endforeach

            </td>
            <td>
                <span class="label label-primary">{!! $model->estado !!}</span>
            </td>
            <td>
                <span class="label label-success">{!! $model->ubicacion !!}</span>
            </td>
        </tr>
    @endforeach
@endsection

@section("footTable")
    <br>
    <div class="row">
        <div class="col-xs-12">
            <a href="#" id="remito" class="btn btn-sm btn-default">Generar remito</a>
        </div>
    </div>

@endsection

@section("js")
    <script>
        var btn = $("#remito");

        btn.prop("disabled",true);
        btn.attr("disabled",true);
        btn.on('click',function(ev){
            ev.preventDefault();
        })

        $(".id_destroy").on('click',function(ev){
            var estado = [];

            $(".id_destroy").each(function(ind,val){
                if($(val).prop('checked')){
                    estado[ind] = true;
                }else{
                    estado[ind] = false;
                }
            });


            if($.inArray(true,estado) != -1){
                $(btn).prop('disabled',false);
                $(btn).attr("disabled",false);

            }else{
                $(btn).prop('disabled',true);
                $(btn).attr("disabled",true);
            }
        })

        btn.on('click',function(ev){
            ev.preventDefault();

            var data = [];
//            var data = [];
            {{--data["_token"] = "{!! csrf_token() !!}";--}}
//            data["data"] = [];

            $(".id_destroy:checked").each(function(ind,val) {
                data.push(val.value);
            });

            var datos = $.extend(data,{});


            $.ajax({
                method: "post",
                dataType: "JSON",
                url: "{!! route('moto.files.remito') !!}",
                data: 'files_id='+data+'&_token={!! csrf_token() !!}',
                success: function(data){

                    window.location.href = 'moto/files/remito/'+data;
                }

            });


        })



    </script>
@endsection
