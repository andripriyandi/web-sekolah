<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>


<?php
    include "../conf/koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM siswa WHERE id ='".$id."' ";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
?>
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Ubah Siswa <small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-th"></i> Home</a></li>
            <li class="active">Data Siswa</li>
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
                  <h3 class="box-title"><a href="list_siswa.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="proses/pu_siswa.php?id= <?php echo $data['id'] ?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>NIS*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="nis" value="<?php echo $data['nis']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Nama*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Jurusan*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <select class="form-control" name="jurusan">
                        <option select="selected"><?php echo $data['jurusan']; ?></option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Audio Vidio">Teknik Audio Vidio</option>
                        <option value="Teknik Gambar Bangunan">Teknik Gambar Bangunan</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Alamat*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <textarea class="form-control" name="alamat"><?php echo $data['alamat']; ?></textarea>
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
