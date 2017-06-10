    <div id="wrapper">
    <div id="header">
    </div>
        <div id="formbody">
          <h1>PRINT BANNER</h1>
          <?php echo form_open_multipart('pages/upload'); ?>
            Nama File</br><input type="text" name="nama" /></br>
            Kertas<br>
            <select id="bahan" name="bahan">
              <option value="default">Pilih Bahan</option>
              <option value="Flexi China">Flexi China</option>
              <option value="Flexi Korea">Flexi Korea</option>
              <option value="Flexi Jerman">Flexi Jerman</option>
              <option value="Albatros">Albatros</option>
              <option value="Luster">Luster</option>
              <option value="Glossy Paper">Glossy Paper</option>
            </select>
            </br><br>
            Ukuran<br><input id="panjang" type="number" name="panjang" placeholder="Panjang" />
           	<input id="lebar" type="number" name="lebar" placeholder="Lebar" /><br> 
            </br>
		        Select image to upload:
		        <input type="file" name="fileToUpload" id="fileToUpload">
		        <br><br>
            Jumlah</br><input type="number" name="jumlah" id="jumlah" /></br>
            Total Harga<br><label id="harga"></label><br>
            <input type="hidden" name="harga" id="inpHrg" />
            <br/>
            Telepon<br><input type="text" name="telepon" /><br>
            <br/>
            Keterangan<br><input type="text" name="keterangan" /><br>
            <input type="hidden" name="tipe" value="banner">
            <br/>
            <input type="submit" value="Submit"/>
          </form>
        </div>
      </div>
      <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#panjang').keyup(function(){
            if ($('#jumlah') != "" && $('#panjang').val() != "" && $('#lebar').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#lebar').keyup(function(){
            if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#bahan').change(function(){
            if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#jumlah').keyup(function(){
            if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });

          function harga() {
            if ($('#bahan').val()=="Flexi China") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 10000)*$('#jumlah').val();
            else if($('#bahan').val()=="Flexi Korea") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 20000)*$('#jumlah').val();
            else if($('#bahan').val()=="Flexi Jerman") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 30000)*$('#jumlah').val();
            else var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 40000)*$('#jumlah').val();
            
            $('#harga').html(hrg);
            $('#inpHrg').val(hrg);
        }
        });
      </script>
  </body>
</html>