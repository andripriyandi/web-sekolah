<?php $page = "TambahSiswa"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>

    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Tambah Siswa <small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-th"></i> Home</a></li>
            <li class="active">Tambah Siswa</li>
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
                <form role="form" action="proses/pt_siswa.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>ID*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="id" placeholder="ID diisi oleh sistem" readonly="">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>NIS*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="nis" placeholder="Masukan Nis">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Nama*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Jurusan*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <select class="form-control" name="jurusan">
                        <option value="">- Pilih Jurusan -</option>
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
                      <textarea placeholder="Masukan Alamat" class="form-control" name="alamat"></textarea>
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Foto</label>
                      <input type="file" name="foto">
                      <p class="help-block">Silahkan Masukan Foto Anda.</p>
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
