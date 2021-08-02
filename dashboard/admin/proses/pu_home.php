<?php
include "../../conf/koneksi.php";

$id = $_GET['id'];
$judul = $_POST['judul'];
$alamat = $_POST['alamat'];

		$query = "UPDATE home SET judul='$judul', alamat ='$alamat' WHERE id='$id'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			header("location: ../home.php?pesan=berhasil");
		}else{
			header("location: ../home.php?pesan=");
		}
	?>