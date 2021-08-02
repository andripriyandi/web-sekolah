<?php $page = "Berita"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php"; ?>
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Berita<small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-th"></i> Home</a></li>
            <li class="active"> Berita</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">
                  <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal">
                    <span class="glyphicon glyphicon-plus"></span> Tambah</a>
                </div>

                <div class="box-body table-responsive">
                  <table id="berita" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Isi</th>
                        <th>Penulis</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../conf/koneksi.php';
                      $sql = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY tanggal DESC");
                      $id = 0;
                      while($data = mysqli_fetch_array($sql))
                      {
                        $id++;
                      ?>
                      <tr>
                        <td><?= $id ?></td>
                        <td><?= $data['judul']; ?></td>
                        <td><?= $data['tanggal']; ?></td>
                        <td><?= $data['isi']; ?></td>
                        <td><?= $data['penulis']; ?></td>
                        <td><img src="proses/images/<?= $data['foto']; ?>" width="80"></td>
                        <td>
                          <a href="fu_berita.php?id=<?= $data['id']; ?>" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a>
                          <a href="proses/ph_berita.php?id=<?= $data['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                        <?php } ?>
                      </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Isi</th>
                        <th>Penulis</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                      </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade" id="MyModal">
            <div class="modal-dialog" style="width: 55%;">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"> Tambah Berita</h4>
                  </div>
                    <div class="modal-body">
                      
                <!-- form start -->
                <form role="form" action="proses/pt_berita.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>ID *</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="id" placeholder="ID diisi oleh sistem" readonly>
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Judul *</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" placeholder="Masukan Judul" name="judul">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Tanggal *</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="date" name="tanggal" class="form-control">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Isi *</label>
                      <div class="input">
                      <textarea class="tinymce" name="isi"></textarea>
                    </div>
                    </div>


                    <div class="form-group">
                      <label>Penulis *</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" placeholder="Nama Penulis" name="penulis">
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Foto</label>
                      <input type="file" name="foto">
                      <p class="help-block">Silahkan Masukan Foto Berita.</p>
                    </div>
                  </div><!-- /.box-body -->

                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Tutup</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
     <script>
        $(document).ready(function(){
        $('#berita').DataTable();
        });
    </script>

  </body>
</html>