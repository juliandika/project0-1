<!DOCTYPE html>
<html>
  <head>
    <link href="<?= base_url();  ?>/op.png" rel='shortcut icon'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Printing</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>styles.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
    <style>
      #wrapper {
        margin: auto;
        width: 760px;
        display: block;
        background-color: #FFFFFF;
      }
      #formbody h1 {
        text-align: center;
      }
      #registrasi {
        padding: 5px 100px;
      }
      .error
      {
        color: red;
        font-style: italic;
        font-size: 10px;
        visibility: hidden;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse" style="background-color:#0099cc; color:white border-radius:0;">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>home">Print Online</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>pages/cetak">Print Banner</a></li>
            <li><a href="<?php echo base_url(); ?>pages/document">Print Dokumen</a></li>
            <li><a href="<?php echo base_url(); ?>prices/index">Lihat Harga</a></li>
            <li><a href="<?php echo base_url(); ?>about">Tentang Kami</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right nav-list" id="navigasi">
            <li><a href="#register" data-toggle="modal" data-target="#register">Register</a></li>



            <?php if (isset($user)){ ?>
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <?php echo $user; ?><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <?php echo anchor('logout', 'Logout');?>
                </ul>
              </li>
            <?php }else{ ?>
              <li><a href="<?php echo base_url(); ?>auth/index">Sign in</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <div id="register" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">PENDAFTARAN</h3>
          </div>

          <div class="modal-body">
            <div class="row">
              <form method="POST" action="<?php echo base_url('pages/proses_register')?>">

              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap"/>

              <input type="text" name="email" id="email" class="form-control" placeholder="Alamat Email"/>

              <input type="text" name="notelepon" id="notelepeon" class="form-control" placeholder="No Telepon"/>

              <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>

              <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>


              <div class="row form-group">
                <div class="col-sm-12">
                  <button type="submit" name="register" value="submit" class="btn btn-primary"/>DAFTAR</button>

                </div>
              </div>


              </form>

          <div class="modal-footer">
            <p class="text-center">Already have an account? <a href="#">Sign In</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
