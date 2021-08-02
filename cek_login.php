<?php
session_start();
include 'dashboard/conf/koneksi.php';
$username = $_POST ['username'];
$password = $_POST ['password'];
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username' and password='$password'");

$cek = mysqli_num_rows($login);
if($cek > 0){

	$data=mysqli_fetch_assoc($login);
	if($data['level']=="Admin"){
		$_SESSION['id'] = $data['id'];
		$_SESSION['foto'] = $data['foto'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] ="Admin";
		header("location: dashboard/admin/");
	}else if ($data['level']=="Guru"){
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "Guru";
		header("location: dashboard/guru/");
	}else if ($data['level']=="Siswa"){
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "Siswa";
		header("location: dashboard/siswa/");
	}else{
		header("location: index.php?pesan=gagal");
	}
}else{
	header("location: index.php?pesan=gagal");
	}
?>