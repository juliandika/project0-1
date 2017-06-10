<?php



?>


<!-- Main content -->
    <section class="content">
      <p><?php echo $users['saldo']; ?></p>

      <h2>Transaksi ini sudah dibayar</h2>

      <a href="<?php echo base_url(); ?>member/payment/pay/<?php echo $transaksi->id_transaksi; ?>" button type="button" class="btn btn-primary btn-md">Ya</button></a>
      <button type="button" class="btn btn-danger btn-md">Tidak</button>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
