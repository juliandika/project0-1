
    <!-- Main content -->
    <section class="content">
      <table id="myTable" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Tanggal Konsultasi</th>
            <th>ID Konsultasi</th>
            <th>Judul Konsultasi</th>
            <th>Isi Konsultasi</th>

          </tr>
        </thead>
        <tbody>

          <?php foreach($posts as $post) : ?>
          <tr>
            <td><?=$post->created_at?></td>
            <td><?=$post->id?></td>
            <td><?=$post->title?></td>
            <td><?=$post->slug?></td>

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
