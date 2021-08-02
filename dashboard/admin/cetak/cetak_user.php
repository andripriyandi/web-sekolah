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

	<br> <h2 align="center">LAPORAN DATA USER</h2> <br>
	<div class="container">
	<table border="2"  class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Foto</th>
		</tr>
		<?php 
		$id = 0;
		$sql = mysqli_query($koneksi,"select * from user order by nama asc");
		while($data = mysqli_fetch_array($sql)){
		$id++;
		?>
		<tr>
			<td><?php echo $id ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['username']; ?></td>
           	<td><?php echo $data['password']; ?></td>
            <td><?php echo $data['level']; ?></td>
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