
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022<a href=""> <?= $peternakan['nama_peternakan']?></a>.</strong>
   
    <div class="float-right d-none d-sm-inline-block">
      <b></b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../asset/plugins/moment/moment.min.js"></script>
<script src="../asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../asset/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../asset/plugins/jszip/jszip.min.js"></script>
<script src="../asset/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../asset/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../asset/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../asset/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../asset/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="../asset/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
   
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="text/javascript">
    
    $(document).ready(function(){
      $("#kode_burung[]").change(function(){
        var kode_burung=$(this).val();

        $.ajax({
          type:'GET',
          url : '../login/cek_kode.php',
          data : 'kode_burung='+kode_burung,
          success: function(response){
            $("#datakode").html(response);

          }
        });
      })
    });
    
  </script>
  <script type="text/javascript">
    $('#kode_penjualan').onchange(function(){
      alert('ooyy');
    });
    
    // $(document).ready(function(){
    //   $("#kode_penjualan").onkeydown(function(){
    //     var kode_penjualan=$(this).val();
    //     alert('ekso');

    //     // $.ajax({
    //     //   type:'GET',
    //     //   url : '../karyawan/pilih_return_jual.php',
    //     //   data : 'kode_penjualan='+kode_penjualan,
    //     //   success: function(response){
    //     //     $("#penjualan").html(response);

    //     //   }
    //     // });
    //   })
    // });
    
  </script>
    <!-- <script>
        $(function(){
            var count = 0;
            
            if(count == 0){
                $('.btnSave').hide();
            }
            $('#btn-tambah').on('click', function(){
                count +=1;
                $('#tbl-barang-body').append(`
                    <tr>
                        <td>`+ count +`</td>
                        <td>
                            <input type="text" name="namabarang[]" class="form-control">
                        </td>
                        <td>
                            <input type="number" name="jumlah[]" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="satuan[]" class="form-control">
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger removeItem">HAPUS</button>
                        </td>
                    </tr>
                `);

                if(count > 0){
                    $('.btnSave').show();
                }

                $('.removeItem').on('click', function(){
                    $(this).closest("tr").remove();
                    count +=1;
                    if(count == 0){
                        $('.btnSave').hide();
                    }
                })
            })
        })
    </script> -->
  
</body>
</html>
