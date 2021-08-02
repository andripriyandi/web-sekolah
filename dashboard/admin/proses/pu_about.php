<?php
include "../../conf/koneksi.php";

$id = $_GET['id'];
$deskripsi = $_POST['deskripsi'];

		$query = "UPDATE about SET deskripsi ='$deskripsi' WHERE id='$id'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			header("location: ../about.php?pesan=berhasil");
		}else{
			header("location: ../about.php?pesan=");
		}
	?>