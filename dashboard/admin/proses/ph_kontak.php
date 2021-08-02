<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM kontak WHERE id='".$id."'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM kontak WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2);
if($sql2){
	echo " 
			<script>
				alert('Pesan berhasil dihapus!');
				document.location.href= '../kontak.php';
			</script>
			";
}else{
	echo " 
			<script>
				alert('Pesan gagal dihapus!');
				document.location.href= '../berita.php';
			</script>
		";
}
?>