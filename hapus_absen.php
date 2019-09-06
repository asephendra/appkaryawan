<?php 
	$id=$_GET['id'];
	$conn = mysqli_connect("localhost","root","","crudmysqli");
	if (!$conn) {
			die("Koneksi gagal: " . mysqli_connect_error());
	}
		$sql = "DELETE FROM kehadiran WHERE id='$id'";
		if (mysqli_query($conn, $sql)) {
			echo "Data sudah dihapus";
		} else {
			echo "Gagal hapus data: " . mysqli_error($conn);
		}
	mysqli_close($conn);
	header('location:index_absen.php');


?>