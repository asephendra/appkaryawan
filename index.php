<?php include('header.php') ?>
	<div class="card  mb-3">
	<div class="card-header">
		<h3>Daftar Karyawan
		<a class="btn btn-info" href="tambah.php">Tambah</a>
		</h3>
	</div>
	 <div class="card-body">
		<table class="table table-sm table-striped">
			<thead class="" style="background-color:#e3f2fd!important">
				<th>Nama</th>
				<th>Jenis kelamin</th>
				<th>Jabatan</th>
				<th>No Hp</th>
				<th>Alamat</th>
				<th>#</th>
			</thead>
			<tbody>
			<?php 
				$con = mysqli_connect("localhost","root","","crudmysqli");
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$query=mysqli_query($con,"select * from `karyawan`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['jenkel']; ?></td>
						<td><?php echo $row['jabatan']; ?></td>
						<td><?php echo $row['no_hp']; ?></td>
						<td><?php echo $row['alamat']; ?></td>
						<td>
						<a class="btn btn-success btn-sm" href="ubah.php?id=<?php echo $row['id']; ?>">Ubah</a>
						<a class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
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