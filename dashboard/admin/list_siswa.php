<?php $page = "ListSiswa"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php"; ?>
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Data Siswa<small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-th"></i> Home</a></li>
            <li class="active"> List Siswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">
                  <a href="tambah_siswa.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span> Tambah</a>
                  <a href="cetak/cetak_siswa.php" class="btn btn-success pull-right" target="_blank">
                    <span class="glyphicon glyphicon-print"></span> Cetak Semua</a>
                </div>
                 <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../conf/koneksi.php';
                      $sql = mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY nama ASC");
                      $id = 0;
                      while($data = mysqli_fetch_array($sql))
                      {
                        $id++;
                      ?>
                      <tr>
                        <td><?= $id ?></td>
                        <td><?= $data['nis']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['jurusan']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><img src="proses/images/<?= $data['foto']; ?>" width="80"></td>
                        <td>
                          <a href="fu_siswa.php?id=<?= $data['id']; ?>" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a>
                         <a href="proses/ph_siswa.php?id=<?= $data['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                         <a href="cetak/siswa.php?id=<?= $data['id']; ?>" class="btn btn-primary" target="_blank"><i class="glyphicon glyphicon-print"></i></a>
                        </td>
                      <?php } ?>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
     <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>