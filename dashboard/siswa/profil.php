<?php include "_partials/meta.php"; ?>
<link rel="stylesheet" type="text/css" href="../assets/sweetalert/sweetalert2.min.css">
<script type="text/javascript" src="../assets/sweetalert/sweetalert2.all.min.js"></script>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php"; ?>
  
  <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
      include "../conf/koneksi.php";
      $id = $_SESSION['id'];
      $query = "SELECT * FROM user WHERE id ='".$id."' ";
      $sql = mysqli_query($koneksi, $query);
      $data = mysqli_fetch_array($sql);
    ?>
    	     
	 <section class="content-header">
      <h1>Profile User<small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Profil User</a></li>
      </ol>
    </section>

    <section class="content">
      <?php 
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan']=="berhasil") {
            echo "<script>
                    swal('Berhasil', 'Profil Anda Berhasil di Update!', 'success');
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

      <div class="row">
        <div class="col-md-12">

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Silahkan mengubah profil anda . . .</h3>
            </div>

             <form class="form-horizontal" action="uProfil.php?id=<?= $data['id'] ?>" enctype="multipart/form-data" method="POST">

                <input type="hidden" name="uId" value="5">

                <div class="box-body">

                  <div class="col-md-3">
                    <div class="box box-success">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="../admin/proses/images/<?= $data['foto']; ?>" alt="User profile picture">

                      <h3 class="profile-username text-center"><?php echo $data['nama']; ?></h3>
                      <p class="text-muted text-center">guru</p>

                      <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>Username</b> <a class="pull-right"><?= $data['username']; ?></a>
                        </li>
                      </ul>

                      <a href="index.php" class="btn btn-primary btn-block"><b>Home</b></a>

                    </div>
                    </div>
                  </div>

                  <div class="col-md-9">
                  <hr>

                  <div class="form-group">
                    <label for="uNama" class="col-sm-2 control-label">Foto Profile</label>
                    <div class="col-sm-10">
                      <label for="exampleInputFile">Upload File . . .</label>
                      <input type="file" name="foto">
                      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="uNama" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama"  placeholder="Nama User" value="<?= $data['nama']; ?>"  required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username"  placeholder="Nama User" value="<?= $data['username']; ?>"  required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="uPassword" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password"  placeholder="Masukkan password baru anda" value="<?= $data['password']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Level</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="level">
                        <option select="selected"><?php echo $data['level']; ?></option>
                        <option value="Siswa">Siswa</option>
                      </select>
                    </div>
                  </div>

                  </div>

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-info pull-right btn-block"><i class="fa fa-save"></i> Update Profil</button>
                  </div>

                </div>
             </form>

          </div>
          
        </div>
      </div>
    </section>    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
  </body>
</html>