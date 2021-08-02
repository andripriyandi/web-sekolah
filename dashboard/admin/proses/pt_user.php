<?php
include "../../conf/koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;
if(move_uploaded_file($tmp,$path)){

	$query = "INSERT INTO user VALUES('".$id."','".$nama."','".$username."','".$password."','".$level."','".$fotobaru."')";
	$sql = mysqli_query($koneksi, $query);
	if($sql){
		echo "
			<script>
				alert('Data Berhasil ditambah!');
				document.location.href= '../list_user.php';
			</script>
		";
	}else{
		echo"Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo"<br><a href='../tambah_user.php'>Kembali Ke Form</a>";
	}
	}else{
		echo"Maaf, Terjadi gagal untuk di upload.";
		echo"<br><a href='../tambah_user.php'>Kembali Ke Form</a>";
	}
?>