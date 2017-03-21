
var contenedor = $("#adicionales")
var save = $(".saveAdicionales")
var remove = $(".adicionales a[btn-danger]")


var select = contenedor.find('select[name=additionals_id]')
var amount = contenedor.find('input[name=amount]')
var entity = contenedor.find('input[name=entity]')
var models_id = contenedor.find('select[name=models_id]')
var token = contenedor.find('input[name=_token]')

save.on('click',function(ev){
    ev.preventDefault()

    if(select.val() == "" && mount.val() == "")
        return false
    else{
        var data = {
            additionals_id : select.val(),
            amount : amount.val(),
            entity: entity.val(),
            _token: token.val(),
            models_id: models_id.val()
        }


        $.ajax({
            url: 'moto/addAdditionals',
            data: data,
            method: 'POST',
            success: function(response){
                console.log(response);
                $(".adicionales").append($('<tr><td class="text-center">'+response.name+'</td><td class="text-center">$ '+amount.val()+'</td><td><div class="btn-group pull-right"><a href="moto/removeAdditionals/'+response.id+'" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></div></td></tr>'))
            },
            error: function (error) {
                console.log("Error: "+error)
            }
        })

    }
})



remove.on('click',function(ev){
    ev.preventDefault()

    $(this).attr('disabled',true)

    var contenedor = $(this).parent().parent().parent()

    var data = {
        models_id: $(this).attr('data-id')
    }


    $.ajax({
        url: 'moto/addAdditionals',
        data: data,
        method: 'POST',
        success: function(response){
            $(contenedor).remove()
        },
        error: function (error) {
            console.log("Error: "+error)
        }
    })

})






