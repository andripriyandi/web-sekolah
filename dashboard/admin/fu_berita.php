<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>


<?php
    include "../conf/koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM berita WHERE id ='".$id."' ";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
?>
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Ubah Berita <small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li class="active">Berita</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title"><a href="berita.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="proses/pu_berita.php?id= <?php echo $data['id'] ?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Judul *</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Tanggal *</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Isi *</label>
                      <div class="input">
                      <textarea class="tinymce" name="isi"><?php echo $data['isi']; ?></textarea>
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Penulis *</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" name="penulis" class="form-control" value="<?php echo $data['penulis']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" name="foto">
                      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" value="simpan"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
  </body>
</html>
