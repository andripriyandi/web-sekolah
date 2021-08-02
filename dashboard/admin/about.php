<?php $page = "EditAbout"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>

    <?php 
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan']=="berhasil") {
            echo "<script>
                    swal('Berhasil', 'Data Berhasil di Update!', 'success',);
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
          <h1>About <small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-th"></i> Home</a></li>
            <li class="active">About</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Ubah About</h1>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <?php
                  include "../conf/koneksi.php";
                  $query = "SELECT * FROM about";
                  $sql = mysqli_query($koneksi, $query);
                  $data = mysqli_fetch_array($sql);
              ?>
              <form method="post" action="proses/pu_about.php?id=<?= $data['id']; ?>" enctype="multipart/form-data">
                <div class="box-body">

                    <div class="form-group">
                      <label>Deskripsi*</label>
                      <div class="input">
                      <textarea class="tinymce" rows="20" name="deskripsi"> <?php echo $data['deskripsi']; ?></textarea>
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
