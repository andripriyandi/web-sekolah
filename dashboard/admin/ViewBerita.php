<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>

<div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>BERITA <small>Preview</small></h1> 
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-th"></i> Home</a></li>
            <li class="active">Berita</li>
          </ol>
        </section>

         <?php
            include "../conf/koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM berita WHERE id ='".$id."' ";
            $sql = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_array($sql);
          ?>

        <!-- Main content -->
        <section class="content">
        	 <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title"><a href="TampilanBerita.php" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
                </div><!-- /.box-header -->
                  <div class="box-body">
                    <h2 align="center"><b><?php echo $data['judul']; ?></b></h2><br> 
                    <center> 
                        <img src="proses/images/<?php echo $data['foto']; ?>" style="width: 500px;">  
                    </center>
                    <h4><b> Deskripsi Berita </b><small><?php echo $data['tanggal'] ?></small></h4>
                    <p><?php echo $data['isi'] ?></p>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    
                  </div>
                </form>
                
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
  </body>
</html>