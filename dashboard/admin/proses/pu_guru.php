<?php
include "../../conf/koneksi.php";

$id = $_GET['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$mataPelajaran = $_POST['mataPelajaran'];
$alamat = $_POST['alamat'];

if(isset($_POST['ubah_foto'])) {

	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "images/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM guru WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);
		$data = mysqli_fetch_array($sql);

		if(is_file("images/".$data['foto']))
			unlink("images/".$data['foto']);

		$query = " UPDATE guru SET nip='".$nip."',nama='".$nama."',mataPelajaran ='".$mataPelajaran."',alamat='".$alamat."', foto='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			echo "
					<script>
						alert('Data Berhasil diubah!');
						document.location.href= '../list_guru.php';
					</script>
				";
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo"<br><a href='../fu_guru.php'>Kembali Ke Form</a>";
		}
		}else{
			echo "Maaf, Gambar gagal untuk diupload.";
			echo"<br><a href='../fu_guru.php'>Kembali Ke Form</a>";
		}
		}else{

		$query = "UPDATE guru SET id='".$id."',nip='".$nip."',nama='".$nama."',mataPelajaran='".$mataPelajaran."',alamat='".$alamat."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi,$query);

		if($sql){
			echo "
					<script>
						alert('Data Berhasil diubah!');
						document.location.href= '../list_guru.php';
					</script>
				";
		}else{
			echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
			echo "<br><a href='../fu_guru.php'>Kembali Ke form </a>";

		}
	}
	?>