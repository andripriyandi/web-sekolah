<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id='".$id."'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);

if(is_file("images/".$data['foto']))
unlink("images/".$data['foto']);
$query2 = "DELETE FROM user WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2);
if($sql2){

	header("location:../list_user.php");
}else{
	echo "Data gagal dihapus. <a href='../list_user.php'>Kembali</a>";
}
?>