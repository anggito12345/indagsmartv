
<!--/#app -->
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>



<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

<!--Page Specific Scripts & Styles-->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example-with-json-button').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'JSON',
                    action: function ( e, dt, button, config ) {
                        var data = dt.buttons.exportData();

                        $.fn.dataTable.fileSave(
                            new Blob( [ JSON.stringify( data ) ] ),
                            'Export.json'
                        );
                    }
                }
            ]
        } );
    } );
</script>

</body>
</html>