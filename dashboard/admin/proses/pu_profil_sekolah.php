<?php
include "../../conf/koneksi.php";

$id = $_GET['id'];
$judul = $_POST['judul'];
$npsn = $_POST['npsn'];
$alamat = $_POST['alamat'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$telp = $_POST['telp'];

if(isset($_POST['ubah_foto'])) {

	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path = "images/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM profil_sekolah WHERE id='$id'";
		$sql = mysqli_query($koneksi,$query);
		$data = mysqli_fetch_array($sql);

		if(is_file("images/".$data['foto']))
			unlink("images/".$data['foto']);

		$query = " UPDATE profil_sekolah SET judul='$judul',npsn='$npsn',alamat ='$alamat',kelurahan='$kelurahan', kecamatan = '$kecamatan',kabupaten='$kabupaten',telp='$telp', foto='$fotobaru' WHERE id='$id'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
			header("location: ../profil_sekolah.php?pesan=berhasil");
		}else{
			header("location: ../profil_sekolah.php?pesan=");
		}
		}else{
			header("location: ../profil_sekolah.php?pesan=ErrorFoto");
		}
		}else{

		$query = "UPDATE profil_sekolah SET id='$id',judul='$judul',npsn='$npsn',alamat='$alamat',kelurahan='$kelurahan', kecamatan='$kecamatan', kabupaten ='$kabupaten', telp ='$telp' WHERE id='$id'";
		$sql = mysqli_query($koneksi,$query);

		if($sql){
			header("location: ../profil_sekolah.php?pesan=berhasil");
		}else{
			header("location: ../profil_sekolah.php?pesan=");

		}
	}
	?>