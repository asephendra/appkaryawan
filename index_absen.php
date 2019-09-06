<?php include('header.php') ?>
	<div class="card  bg-light mb-3">
	<div class="card-header">
		<h3>Daftar Kehadiran
		<a class="btn btn-info" href="tambah_absen.php">Tambah</a>
		</h3>
	</div>
	 <div class="card-body">
		<table class="table table-sm table-striped">
			<thead class="" style="background-color:#e3f2fd!important">
				<th>Nama</th>
				<th>Tanggal</th>
				<th>Jam datang</th>
				<th>Jam pulang</th>
				<th>#</th>
			</thead>
			<tbody>
			<?php 
				$con = mysqli_connect("localhost","root","","crudmysqli");
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$query=mysqli_query($con,
					"select kehadiran.*, karyawan.nama as nm_karyawan,
					timediff(kehadiran.pulang,kehadiran.datang) as jam_kerja
					from kehadiran
					left join karyawan ON kehadiran.karyawan_id=karyawan.id");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['nm_karyawan']; ?></td>
						<td><?php echo date("l, d-F-Y", strtotime($row['tgl'])); ?></td> <!-- blm ke indo -->
						<td><?php echo substr($row['datang'],0,5); ?></td>
						<td><?php echo substr($row['pulang'],0,5); ?></td>
						<td>
						<a class="btn btn-success btn-sm" href="ubah_absen.php?id=<?php echo $row['id']; ?>">Ubah</a>
						<a class="btn btn-danger btn-sm" href="hapus_absen.php?id=<?php echo $row['id']; ?>">Hapus</a>
						</td>
					</tr>
					<?php
				}
				
			?>
			</tbody>
		</table>
	</div>
	</div>
</div>

<?php include('footer.php') ?>
</body>
</html>