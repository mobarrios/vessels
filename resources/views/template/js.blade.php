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


<script>

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

        var url = $(this).attr('url_destroy');

        $("input:checkbox:checked").each(function() {
            var id = $(this).val();

            $.ajax(url + id);

            location.reload();
        });

    });

    // edit button
    $('#edit_btn').on('click',function () {
       $('.id_destroy:checked').each(function () {

       });
    });

</script>