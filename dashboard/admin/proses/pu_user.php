<?php
include "../../conf/koneksi.php";

$id = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if(isset($_POST['ubah_foto'])) {

	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "images/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM user WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);
		$data = mysqli_fetch_array($sql);

		if(is_file("images/".$data['foto']))
			unlink("images/".$data['foto']);

		$query = " UPDATE user SET nama='".$nama."',username='".$username."',password='".$password."',level='".$level."', foto='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			echo "
					<script>
						alert('Data Berhasil diubah!');
						document.location.href= '../list_user.php';
					</script>
				";
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo"<br><a href='../fu_user.php'>Kembali Ke Form</a>";
		}
		}else{
			echo "Maaf, Gambar gagal untuk diupload.";
			echo"<br><a href='../fu_user.php'>Kembal Ke Form</a>";
		}
		}else{

		$query = "UPDATE user SET id='".$id."',nama='".$nama."',username='".$username."',password='".$password."',level='".$level."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);

		if($sql){
			echo "
					<script>
						alert('Data Berhasil diubah!');
						document.location.href= '../list_user.php';
					</script>
				";
		}else{
			echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
			echo "<br><a href='../fu_siswa.php'>Kembali Ke form </a>";

		}
	}
	?>