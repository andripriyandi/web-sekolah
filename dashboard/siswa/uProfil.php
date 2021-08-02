<?php
include "../conf/koneksi.php";

$id = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if(isset($_POST['ubah_foto'])) {

	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "../admin/proses/images/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM user WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);
		$data = mysqli_fetch_array($sql);

		if(is_file("../admin/proses/images/".$data['foto']))
			unlink("../admin/proses/images/".$data['foto']);

		$query = " UPDATE user SET nama='".$nama."',username='".$username."',password='".$password."',level='".$level."', foto='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

			if($sql){
			header("location: profil.php?pesan=berhasil");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo"<br><a href='profil.php'>Kembali Ke Form</a>";
		}
		}else{
			header("location: profil.php?pesan=ErrorFoto");
		}
		}else{

		$query = "UPDATE user SET id='".$id."',nama='".$nama."',username='".$username."',password='".$password."',level='".$level."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);

		if($sql){
			header("location: profil.php?pesan=berhasil");
		}else{
			header("location: profil.php?pesan=");
		}
	}
	?>