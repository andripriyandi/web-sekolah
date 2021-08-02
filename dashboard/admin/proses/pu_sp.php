<?php
include "../../conf/koneksi.php";

$id = $_GET['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

		$query = "UPDATE sp SET judul='$judul', deskripsi ='$deskripsi' WHERE id='$id'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			header("location: ../sp.php?pesan=berhasil");
		}else{
			header("location: ../sp.php?pesan=");
		}
	?>