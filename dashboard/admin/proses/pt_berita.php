<?php
include "../../conf/koneksi.php";
$id = $_POST['id'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;
if(move_uploaded_file($tmp,$path)){

	$query = "INSERT INTO berita VALUES('$id','$judul','$tanggal','$isi','$penulis','$fotobaru')";
	$sql = mysqli_query($koneksi, $query);
	if($sql){
		echo " 
				<script>
					alert('Berita Berhasil ditambah!');
					document.location.href= '../berita.php';
				</script>
			";
	}else{
		echo " 
				<script>
					alert('Berita gagal ditambah! :( ');
					document.location.href= '../berita.php';
				</script>
			";
	}
	}else{
		echo " 
				<script>
					alert('Maaf, berita gagal untuk diupload :( ');
					document.location.href= '../berita.php';
				</script>
			";
	}
?>