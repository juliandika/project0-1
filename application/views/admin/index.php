
    <!-- Main content -->
    <section class="content">

      <table id="myTable" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>ID Transaksi</th>
            <th>ID User</th>
            <th>Username</th>
            <th>Nama Transaksi</th>
            <th>Bahan</th>
            <th>Panjang</th>
            <th>Lebar</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>No Telepon</th>
            <th>Keterangan</th>
            <th>Status Pembayaran</th>
            <th>
              <?=anchor('admin/products/create','Action', ['class'=>'btn btn-primary btn-sm'])?>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($transaksi as $a) : ?>
          <tr>
            <td><?=$a->id_transaksi?></td>
            <td><?=$a->id_user?></td>
            <td><?=$a->username?></td>
            <td><?=$a->nama_product?></td>
            <td><?=$a->Bahan?></td>
            <td><?=$a->Panjang?></td>
            <td><?=$a->Lebar?></td>
            <td><?=$a->Jumlah?></td>
            <td><?=$a->Harga?></td>
            <td><?=$a->No_Telepon?></td>
            <td><?=$a->Keterangan?></td>
            <td><?php

            if($a->status_pembayaran == 1){
              echo '<button type="button" class="btn btn-success btn-md">Sudah dibayar</button>';
            }else{
              echo '<button type="button" class="btn btn-danger btn-md">Belum dibayar</button>';
            }

            ?></td>
            <td>
              <?=anchor('admin/products/update/' . $a->id_transaksi, 'Edit', ['class'=>'btn btn-default btn-sm'])?>
              <?=anchor('admin/products/delete/' . $a->id_transaksi, 'Delete', ['class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm(\'Apakah anda yakin?\')'])?>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>

      <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
      </script>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
