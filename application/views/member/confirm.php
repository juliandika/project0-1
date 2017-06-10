<?php



?>


<!-- Main content -->
    <section class="content">
      <p><?php echo $users['saldo']; ?></p>

      <p>Apakah anda yakin ingin melakukan pembayaran untuk item ini?</p>

      <a href="<?php echo base_url(); ?>member/payment/pay/<?php echo $transaksi->id_transaksi; ?>" button type="button" class="btn btn-primary btn-md">Ya</button></a>
      <button type="button" class="btn btn-danger btn-md">Tidak</button>
      <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
      </script>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
