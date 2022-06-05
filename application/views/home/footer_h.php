    <!-- Main Footer -->
    <footer class="text-center" style="background-color:gray">
        <strong>Copyright &copy; KOST-JAKRTA <a href="<?= base_url('home'); ?>" style="color:orange">WEB II UNIVERSITAS BINASARANA INFORMATIKA</a>.</strong>
    </footer>
    <script src="<?= base_url('assets/lte/'); ?>plugins/jquery/jquery.min.js"></script>

<script src="<?= base_url('assets/lte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/lte/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/lte/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="<?= base_url('assets/lte/'); ?>dist/js/adminlte.min.js?v=3.2.0"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)').DataTablee({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>