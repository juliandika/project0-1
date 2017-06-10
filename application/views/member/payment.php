<?php

$id_user = $this->session->userdata('id_user');
$nama = $this->session->userdata('nama');
$username = $this->session->userdata('username');
$email = $this->session->userdata('email');
$notelepon = $this->session->userdata('notelepon');

if($this->input->post('is_submitted')){

$kode_pembayaran         = set_value('kode_pembayaran');

}

$id_transaksi = $transaksi->id_transaksi;

?>



<section class="content">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <h1>Add New Product Table</h1>

        <div><?= validation_errors() ?></div>
        <?= form_open_multipart('member/payment/pay/' . $id_transaksi, ['class'=>'form-horizontal'])?>

        <div class="form-group">
          <div class="col-sm-10">
            <input type="hidden" class="form-control" name="id_user" placeholder="" value="<?= $id_user?>">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10">
            <input type="hidden" class="form-control" name="username" placeholder="" value="<?= $username?>">
          </div>
        </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Masukkan voucher pembayaran</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_pembayaran" placeholder="" value="<?= set_value('kode_pembayaran') ?>">
              </div>
            </div>


            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="is_submitted" value="1" />
                <button type="submit" class="btn btn-default">Save</button>
              </div>
            </div>
        <?= form_close() ?>
      </div>
    <div class="col-md-1"></div>
</section>
</div>
