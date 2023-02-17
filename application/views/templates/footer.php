<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?= date('Y') ?> <a href="#">F-Project</a>.</strong> All rights reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="<?= base_url().'assets/boostrap/plugins/jquery/jquery.min.js';?>"></script>

<script src="https://adminlte.io/themes/v3/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url().'assets/boostrap/plugins/sweetalert2/sweetalert2.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/toastr/toastr.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js';?>"></script>

<script src="<?= base_url().'assets/boostrap/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<!-- DataTables  & Plugins AdminLTE -->
<script src="<?= base_url().'assets/boostrap/plugins/datatables/jquery.dataTables.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-responsive/js/dataTables.responsive.min.js';?>">
</script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-responsive/js/responsive.bootstrap4.min.js';?>">
</script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-buttons/js/dataTables.buttons.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-buttons/js/buttons.bootstrap4.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/jszip/jszip.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/pdfmake/pdfmake.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/pdfmake/vfs_fonts.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-buttons/js/buttons.html5.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-buttons/js/buttons.print.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/datatables-buttons/js/buttons.colVis.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/select2/js/select2.full.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/daterangepicker/daterangepicker.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/dist/js/adminlte.min.js?v=3.2.0';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/jquery-validation/jquery.validate.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/jquery-validation/additional-methods.min.js'?>"></script>
<script src="<?= base_url().'assets/boostrap/dist/js/demo.js';?>"></script>

<script>
$('.select2').select2()
//Initialize Select2 Elements
$('.select2bs4').select2({
    theme: 'bootstrap4'
})

$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "info": true,
        "autoWidth": false,
        "buttons": ["copy", "excel"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0) ');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    $('#pengujian').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
    });
    $('#pengujian1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
    });
    $('#pengujian2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
    });
    $('#pengujian3').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
    });
    $('#kesimpulan').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
});
</script>
<script>
/*** add active class and stay opened when selected ***/
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    if (this.href) {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }
}).addClass('active');

// for the treeview
$('ul.nav-treeview a').filter(function() {
    if (this.href) {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>
<script type="text/javascript">
function doit(type, fn, dl) {
    var elt = document.getElementById('printableArea');
    var wb = XLSX.utils.table_to_book(elt, {
        sheet: "Sheet JS"
    });
    var table =
        "<html><head><style> table, td {border:2px solid black} table {border-collapse:collapse}</style></head><body><table><tr>";
    return dl ?
        XLSX.write(wb, {
            bookType: type,
            bookSST: true,
            type: 'base64'
        }) :
        XLSX.writeFile(wb, fn || ('Atana-Report.' + (type || 'xlsx')));

}

function isNumber(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
}
</script>

</body>

</html>