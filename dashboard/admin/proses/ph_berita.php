<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM berita WHERE id='$id'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);

if(is_file("images/".$data['foto']))
unlink("images/".$data['foto']);
$query2 = "DELETE FROM berita WHERE id='$id'";
$sql2 = mysqli_query($koneksi, $query2);
if($sql2){
	echo " 
				<script>
					alert('Berita Berhasil dihapus!');
					document.location.href= '../berita.php';
				</script>
			";
}else{
	echo " 
				<script>
					alert('Maaf, berita gagal untuk dihapus :( ');
					document.location.href= '../berita.php';
				</script>
			";
}
?>