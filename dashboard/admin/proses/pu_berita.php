<?php
include "../../conf/koneksi.php";

$id = $_GET['id'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];

if(isset($_POST['ubah_foto'])) {

	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "images/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM berita WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);
		$data = mysqli_fetch_array($sql);

		if(is_file("images/".$data['foto']))
			unlink("images/".$data['foto']);

		$query = " UPDATE berita SET judul='".$judul."', tanggal='".$tanggal."', isi='".$isi."', penulis='".$penulis."', foto='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			echo " 
				<script>
					alert('Berita Berhasil diubah!');
					document.location.href= '../berita.php';
				</script>
			";
		}else{
			echo " 
				<script>
					alert('Maaf, Terjadi kesalahan saat menyimpan data ke database!');
					document.location.href= '../fu_berita.php';
				</script>
			";
		}
		}else{
			echo " 
				<script>
					alert('Maaf gambar gagal diupload!');
					document.location.href= '../fu_berita.php';
				</script>
			";
		}
		}else{

		$query = "UPDATE berita SET id='".$id."', judul='".$judul."', tanggal='".$tanggal."', isi='".$isi."', penulis='".$penulis."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);

		if($sql){
			echo " 
				<script>
					alert('Berita Berhasil diubah!');
					document.location.href= '../berita.php';
				</script>
			";
		}else{
			echo " 
				<script>
					alert('Maaf, terjadi kesalahan saat menyimpan data ke database!');
					document.location.href= '../fu_berita.php';
				</script>
			";
		}
	}
	?>