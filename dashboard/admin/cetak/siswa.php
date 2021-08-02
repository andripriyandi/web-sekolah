<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Siswa</title>
	<link rel="shorcut icon" href="../../../images/logo.png">
	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<page backtop='32mm' backbottom='10mm' backleft='2mm' backright='5mm'>
		<page_header>
			<table style='width: 100%; border: solid 0px black;'>
				<tr>
					<td style="width: 15%; text-align: center;"><img src="../../../images/logo.png" style='height:90px;'></td>
					<td style='width: 85%;'>
						<h3><b>SMKN 7 Baleendah</b></h3>
						<b>'Indonesia Berkarya'</b><br>
						Alamat : Jalan Siliwangi KM 15, Kel. Manggahang, Kec. Baleendah, Kab. Bandung. <br>
						Telp. 022-87799654 | Email : smkn7baleendah@yahoo.com
					</td>
				</tr>
			</table>
			<hr>
		</page_header>

	<?php 
	include '../../conf/koneksi.php';
	?>

	<br> <h2 align="center">LAPORAN DATA SISWA</h2> <br>
	<div class="container">
	<table border="2"  class="table table-bordered table-striped">
		<tr>
			<th>NIS</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Foto</th>
		</tr>
			<?php 
			$id = $_GET['id'];
			$sql = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id ='".$id."'");
			while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
           	<td><?php echo $data['jurusan']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><img src="../proses/images/<?php echo $data['foto']; ?>" width="80"></td>
		</tr>
		<?php } ?>
	</table>
	</div>
	

	<script>
		window.print();
	</script>

</body>
</html>