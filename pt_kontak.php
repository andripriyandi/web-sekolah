<?php
include "dashboard/conf/koneksi.php";

$id = $_POST['id'];
$namaLengkap = $_POST['namaLengkap'];
$subjek = $_POST['subjek'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

	$query="INSERT INTO kontak VALUES('".$id."','".$namaLengkap."','".$subjek."','".$email."','".$pesan."')";
	$sql=mysqli_query($koneksi,$query);
	if($sql){
		echo " 
				<script>
					alert('Pesan Berhasil dikirim!');
					document.location.href= 'index.php#kontak-section';
				</script>
			";
	}else{
		echo " 
				<script>
					alert('Pesan gagal dikirim! :( ');
					document.location.href= 'index.php#kontak-section';
				</script>
			";	
	}
?>