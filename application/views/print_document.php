    <div id="wrapper">
    <div id="header">
    </div>
        <div id="formbody">
          <h1>PRINT DOKUMENT</h1>
          <?php echo form_open_multipart('pages/upload'); ?>
            Nama File</br><input type="text" name="nama" /></br>
            Bahan<br>
            <select id="bahan" name="bahan">
              <option value="default">Bahan</option>
              <option value="Art Paper">Art Paper</option>
              <option value="Art Karton">Art Karton</option>
              <option value="Sublime Paper">Sublime Paper</option>
              <option value="HVS">HVS</option>
              <option value="Premium Glossy">Premium Glossy</option>
              <option value="Sticker Glossy">Sticker Glossy</option>
            </select>
            </br><br>
		        Select file to upload:
		        <input type="file" name="fileToUpload" id="fileToUpload">
		        Ukuran<br>
            <select id="Ukuran" name="ukuran">
              <option value="default">Kertas</option>
              <option value="F4">F4</option>
              <option value="A3">A3</option>
              <option value="A4">A4</option>
              <option value="A5">A5</option>
              <option value="B5">B5</option>
              <option value="Q4">Q4</option>
            </select>
            </br>
            <br>
            Jumlah</br><input type="number" name="jumlah" /></br>
            Telepon<br><input type="text" name="telepon" /><br>
            <br/>
            Keterangan<br><input type="text" name="keterangan" /><br>
            <input type="hidden" name="tipe" value="document">
            <br/>
            <input type="submit" value="Submit"/>
          </form>
        </div>
      </div>
      <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#panjang').keyup(function(){
            if ($('#panjang').val() != "" && $('#lebar').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#lebar').keyup(function(){
            if ($('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#bahan').change(function(){
            if ($('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });

          function harga() {
            if ($('#bahan').val()=="CinaTipis") var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 10000;
            else if($('#bahan').val()=="CinaTebal") var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 20000;
            else if($('#bahan').val()=="KoreaTipis") var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 30000;
            else var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 40000;
            
            $('#harga').html(hrg);
            $('#inpHrg').val(hrg);
        }
        });
      </script>
  </body>
</html>