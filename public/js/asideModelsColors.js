$("select[name='models_id']").on('change', function(ev){
    $("#select_model>option").remove();
    $("#colors>option").remove();
    var id = $(this).val();

    var parent = $(this).parent().parent();

    $.ajax({
        method: 'GET',
        url: 'moto/modelLists/'+id,
        success: function(data){
            console.log(data)
            $.ajax({
                method: 'GET',
                url: 'moto/modelAvailables/' + id,
                success: function (response) {
                    $.each(response, function (x, y) {

                        $('#colors').append('<option value=' + x + ' >' + y.color + ' ( ' + y.cantidad + ' ) </option>');
                    });
                }
            })

            if(data.active_list_price != null){
                $(".sTotal").val(data.active_list_price.price_net);
                $("input[name=price_actual]").val(data.active_list_price.price_net);
            }

            $(".patentamiento").val(data.patentamiento);
            $(".packService").val(data.pack_service);



        }
    })
});