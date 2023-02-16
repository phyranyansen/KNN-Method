<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?= base_url().'assets/content/main.js';?>"></script>
<!-- dataTable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script> -->
<!-- dataTable -->
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
<!-- SweetAlert2 -->
<script src="<?= base_url().'assets/boostrap/plugins/sweetalert2/sweetalert2.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/toastr/toastr.min.js';?>"></script>
<!-- DataTables  & Plugins AdminLTE -->
<!-- Select AdminLTE -->
<script src="<?= base_url().'assets/boostrap/plugins/select2/js/select2.full.min.js';?>"></script>
<script src="<?= base_url().'assets/boostrap/plugins/daterangepicker/daterangepicker.js';?>"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
</body>

</html>



<script>
$('.select2').select2()
//Initialize Select2 Elements
$('.select2bs4').select2({
    theme: 'bootstrap4'
})


//print
function printDiv(divName) {

    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();

    document.body.innerHTML = originalContents;


}
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
        XLSX.writeFile(wb, fn || ('KNN-Report.' + (type || 'xlsx')));

}
</script>