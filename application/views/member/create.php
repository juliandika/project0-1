
    <!-- Main content -->
    <section class="content">
      <div class="container">
      <h2><?= $title; ?></h2>




      <?php echo validation_errors(); ?>

      <?php echo form_open_multipart('member/posts/create'); ?>

      


      <input type="hidden" class="form-control" name="id_user" placeholder="" value="<?= $id_user?>">

        <div class="form-group">
          <label>Judul Konsultasi</label>
          <input type="text" class="form-control" name="title" placeholder="Judul Konsultasi">
        </div>
        <div class="form-group">
          <label>Isi Konsultasi</label>
          <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
        </div>
        <div class="form-group">
          <label>Category</label>
          <select name="category_id" class="form-control">
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label>Upload Image</label>
          <input type="file" name="userfile" size="20">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
