<!-- jQuery 2.2.3 -->
<script src="vendors/LTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="vendors/LTE/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="vendors/LTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="vendors/LTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="vendors/LTE/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vendors/LTE/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="vendors/LTE/plugins/select2/select2.full.min.js"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="vendors/LTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="vendors/LTE/plugins/datepicker/bootstrap-datepicker.js"></script>

<script>

    //datePicker
    $('.datePicker').datepicker();

    //dateRange
        $('.dateRange').daterangepicker();

    //select2
    $('.select2').select2();

    //selectMult
    $('.selectMulti').attr('multiple','multiple').select2();

    //check all items
    $('#check_all').on('click',function(){

        $("input:checkbox").each(function() {

            if($(this).prop('checked'))
                $(this).prop('checked', false);
            else
                $(this).prop('checked', true);
        });

    });


    // table list checkbox to destroy
    $('.destroy_btn').on('click',function(){
        var btn = $(this);
        $(btn).prop("disabled",true);
        if(confirm('Eliminar Registro?')){
            var url = $(this).attr('url_destroy');

            $("input:checkbox:checked").each(function() {
                var id = $(this).val();
                $.ajax({
                    'url': url+"/"+id,
                    'method': 'get',
                    'success': function (data) {
                        if(data == "ok"){
                            location.href = "{!! route($config->indexRoute) !!}";
                        }else{
                            $(btn).prop("disabled",false);
                            alert("Error al querer borrar el registro")
                        }
                    }
                });
            });
        }else{
            return false;
        }
    });

    // edit button
    $('#edit_btn').on('click',function () {
        var route = $(this).attr('route_edit');

        //valida q haya solo 1 solo elemento seleccionado
        if($('.id_destroy:checked').length != 1) {
            alert('Seleccionar 1(uno) elemento para editar');
            return false;
        }else{

            //redireccion a la ruta de edicion con el id
            window.location.href = route +'/'+$('.id_destroy:checked').val();

        }

    });

</script>