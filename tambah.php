<?php include('header.php') ?>
<div class="card  bg-light mb-3">
<div class="card-header">
	<h2>Form Tambah Karyawan</h2>
</div>
<div class="card-body">
	
<form method="POST">
  <div class="form-group row">
    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input name="nama" type="text" class="form-control" id="inputnama" placeholder="Nama">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Jenis kelamin</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenkel" id="jenkel1" value="Pria">
          <label class="form-check-label" for="jenkel1">
            Pria
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenkel" id="jenkel2" value="Wanita">
          <label class="form-check-label" for="jenkel2">
            Wanita
          </label>
        </div>

      </div>
    </div>
  </fieldset>
   <div class="form-group row">
    <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input name="jabatan" type="text" class="form-control" id="inputjabatan" placeholder="jabatan">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputno_hp" class="col-sm-2 col-form-label">No handphone</label>
    <div class="col-sm-10">
      <input name="no_hp" type="text" class="form-control" id="inputno_hp" placeholder="no_hp">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    	<textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group row">
  	<label for="inputalamat" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
    	<input type="hidden" name="id" value="<?php echo $var['id'] ?>">
      <a class="btn btn-default" href="index.php">Kembali</a>
      <input class="btn btn-primary" type="submit" value="Simpan" name="simpan">
    </div>
  </div>
</form>
<br>

	
	<?php
	if (isset($_POST['simpan']))
	{
			$id=$_POST['id'];
			$nama=$_POST['nama'];
			$jenkel=$_POST['jenkel'];
			$jabatan=$_POST['jabatan'];
			$alamat=$_POST['alamat'];
			$no_hp=$_POST['no_hp'];
		$conn = mysqli_connect("localhost", "root", "", "crudmysqli");
		if (!$conn) {
			die("Koneksi gagal: " . mysqli_connect_error());
		}
			$sql = "INSERT karyawan SET 
				nama='$nama', 
				jenkel='$jenkel',
				jabatan='$jabatan', 
				no_hp='$no_hp', 
				alamat='$alamat'";
			if (mysqli_query($conn, $sql)) {
				echo "Data sudah diubah";
			} else {
				echo "Gagal ubah data: " . mysqli_error($conn);
			}
		mysqli_close($conn);
		header('location:index.php');
	} 
	?>
</div>
</div>
</div>
</body>
</html>