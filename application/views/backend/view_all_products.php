  <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>Products Table</h1>
        <table id="myTable" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>
                <?=anchor('admin/products/create','Add Product', ['class'=>'btn btn-primary btn-sm'])?>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($products as $product) : ?>
            <tr>
              <td><?=$product->id?></td>
              <td><?=$product->name?></td>
              <td><?=$product->description?></td>
              <td><?=$product->price?></td>
              <td>
                <?=anchor('admin/products/update/' . $product->id, 'Edit', ['class'=>'btn btn-default btn-sm'])?>
                <?=anchor('admin/products/delete/' . $product->id, 'Delete', ['class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm(\'Apakah anda yakin?\')'])?>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-1"></div>
    </div>

    <script>
      $(document).ready(function(){
          $('#myTable').DataTable();
      });
    </script>
