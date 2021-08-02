<?php
include "../../conf/koneksi.php";
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;
if(move_uploaded_file($tmp,$path)){

	$query = "INSERT INTO siswa VALUES('".$id."','".$nis."','".$nama."','".$jurusan."','".$alamat."','".$fotobaru."')";
	$sql = mysqli_query($koneksi, $query);
	if($sql){
		echo "
			<script>
				alert('Data Berhasil ditambah!');
				document.location.href= '../list_siswa.php';
			</script>
		";
	}else{
		echo"Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo"<br><a href='../tambah_siswa.php'>Kembali Ke Form</a>";
	}
	}else{
		echo"Maaf, Terjadi gagal untuk di upload.";
		echo"<br><a href='../tambah_siswa.php'>Kembali Ke Form</a>";
	}
?>