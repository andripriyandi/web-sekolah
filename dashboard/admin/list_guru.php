<?php $page = "ListGuru"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php"; ?>
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Data Guru<small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-th"></i> Home</a></li>
            <li class="active"> List Guru</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">
                  <a href="tambah_guru.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span> Tambah</a>
                  <a href="cetak/cetak_guru.php" class="btn btn-success pull-right" target="_blank">
                    <span class="glyphicon glyphicon-print"></span> Cetak Semua</a>
                </div>
                <div class="box-body table-responsive">
                  <table id="guru" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../conf/koneksi.php';
                      $sql = mysqli_query($koneksi,"SELECT * FROM guru ORDER BY nama ASC");
                      $id = 0;
                      while($data = mysqli_fetch_array($sql))
                      {
                        $id++;
                      ?>
                      <tr>
                          <td><?= $id ?></td>
                          <td><?= $data['nip']; ?></td>
                          <td><?= $data['nama']; ?></td>
                          <td><?= $data['mataPelajaran']; ?></td>
                          <td><?= $data['alamat']; ?></td>
                          <td><img src="proses/images/<?= $data['foto']; ?>" width="80"></td>
                          <td>
                            <a href="fu_guru.php?id=<?= $data['id']; ?>" class="btn btn-success"><i     class="glyphicon glyphicon-edit"></i></a>
                            <a href="proses/ph_guru.php?id=<?= $data['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                            <a href="cetak/guru.php?id=<?= $data['id']; ?>" class="btn btn-primary" target="_blank"><i class="glyphicon glyphicon-print"></i></a>
                          </td>
                          <?php } ?>
                      </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>#</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
     <script>
        $(document).ready(function(){
        $('#guru').DataTable();
        });
    </script>

  </body>
</html>