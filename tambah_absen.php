<?php include('header.php') ?>
<div class="card  bg-light mb-3">
<div class="card-header">
	<h2>Form Tambah Kehadiran</h2>
</div>
<div class="card-body">
	
<form method="POST">
    <div class="form-group row">
    <label for="inputnama" class="col-sm-2 col-form-label">Karyawan</label>
    <div class="col-sm-10">
      <select class="form-control" name="karyawan_id">
      <option>-- Pilih karyawan --</option>
      <?php 
        $con = mysqli_connect("localhost","root","","crudmysqli");
        if (mysqli_connect_errno())
        {
        echo "Gagal koneksi ke MySQL: " . mysqli_connect_error();
        }
        
        $query=mysqli_query($con,"select * from `karyawan`");
        while($row=mysqli_fetch_array($query)){
          ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['nama'] ?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputnama" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input name="tgl" type="date" class="form-control" id="tgl">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputnama" class="col-sm-2 col-form-label">Jam datang</label>
    <div class="col-sm-10">
      <input name="datang" type="time" class="form-control" id="datang">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputnama" class="col-sm-2 col-form-label">Jam pulang</label>
    <div class="col-sm-10">
      <input name="pulang" type="time" class="form-control" id="pulang">
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
			$karyawan_id=$_POST['karyawan_id'];
			$tgl=$_POST['tgl'];
			$datang=$_POST['datang'];
      $pulang=$_POST['pulang'];
		$conn = mysqli_connect("localhost", "root", "", "crudmysqli");
		if (!$conn) {
			die("Koneksi gagal: " . mysqli_connect_error());
		}
			$sql = "INSERT kehadiran SET 
				karyawan_id='$karyawan_id', 
				tgl='$tgl',
				datang='$datang', 
        pulang='$pulang'";
			if (mysqli_query($conn, $sql)) {
				echo "Data sudah ditambah";
			} else {
				echo "Gagal tambah data: " . mysqli_error($conn);
			}
		mysqli_close($conn);
		header('location:index_absen.php');
	} 
	?>
</div>
</div>
</div>
</body>
</html>