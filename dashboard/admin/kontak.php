<?php $page = "Kontak"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php"; ?>
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Kontak<small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-th"></i> Home</a></li>
            <li class="active"> Kontak</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-body table-responsive">
                  <table id="kontak" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Subjek</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../conf/koneksi.php';
                      $id = 0;
                      $sql = mysqli_query($koneksi,"select * from kontak");
                      while($data = mysqli_fetch_array($sql))
                      {
                        $id++;
                      ?>
                      <tr>
                        <td><?= $id ?></td>
                        <td><?= $data['namaLengkap']; ?></td>
                        <td><?= $data['subjek']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['pesan']; ?></td>
                        <td>
                          <a href="proses/ph_kontak.php?id=<?= $data['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                        <?php } ?>
                      </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Nama Lengkap</th>
                          <th>Subjek</th>
                          <th>Email</th>
                          <th>Pesan</th>
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
        $('#kontak').DataTable();
        });
    </script>

  </body>
</html>