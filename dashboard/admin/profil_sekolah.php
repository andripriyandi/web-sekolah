<?php $page = "EditPS"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>
    
   <?php 
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan']=="berhasil") {
            echo "<script>
                    swal('Berhasil', 'Profil Anda Berhasil di Update!', 'success',);
                  </script>
            ";
          }else if ($_GET['pesan']=="ErrorFoto") {
            echo "<script>
                    swal({
                        title: 'Foto Gagal di Update',
                        text: 'Silahkan Coba Ganti Foto Anda!',
                        type: 'warning',
                    });
                  </script>
            ";
          }else{
            echo "<script>
                    swal({
                        title: 'OOPSS',
                        text: 'Silahkan Coba Update Kembali!',
                        type: 'warning',
                    });
                  </script>
            ";
          }
        }
        
      ?>
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Profil Sekolah <small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-th"></i> Home</a></li>
            <li class="active">Profil Sekolah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Ubah Profil Sekolah</h1>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <?php
                  include "../conf/koneksi.php";
                  $query = "SELECT * FROM profil_sekolah";
                  $sql = mysqli_query($koneksi, $query);
                  $data = mysqli_fetch_array($sql);
              ?>
              <form method="post" action="proses/pu_profil_sekolah.php?id=<?= $data['id']; ?>" enctype="multipart/form-data">
                <div class="box-body">

                    <div class="form-group">
                      <label>Judul*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Nama Sekolah*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $data['nama_sekolah']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>NPSN*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="npsn" value="<?php echo $data['npsn']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Alamat*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Kelurahan*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="kelurahan" value="<?php echo $data['kelurahan']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Kecamatan*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="kecamatan" value="<?php echo $data['kecamatan']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Kabupaten*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="kabupaten" value="<?php echo $data['kabupaten']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Telepon*</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-link"></i>
                      </div>
                      <input type="text" class="form-control" name="telp" value="<?php echo $data['telp']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Foto*</label>
                      <input type="file" name="foto">
                      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                    </div>
                  </div>
            
            </div><!-- /.box-body -->
            <div class="box-footer">
             <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div><!-- /.box-footer-->
          </div><!-- /.box -->
        </form>
        
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
  </body>
</html>
