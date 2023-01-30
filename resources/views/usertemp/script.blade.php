<!--jquery-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--data table-->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
{{-- <script>
    $(document).ready(function () {
    $('#myTable').DataTable();
});
</script> --}}
<script>
    $(document).ready(function() {
    var table = $('#myTables').DataTable( {
        lengthChange: true,
    } );
 
    table.buttons().container()
        .appendTo( '#myTable_wrapper .col-md-6:eq(0)' );

} );

$(document).ready(function() {
    var table = $('#myTable').DataTable( {
        lengthChange: true,
    } );
 
    table.buttons().container()
        .appendTo( '#myTable_wrapper .col-md-6:eq(0)' );

} );

</script>
<!-- jQuery -->
{{-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script> --}}
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>