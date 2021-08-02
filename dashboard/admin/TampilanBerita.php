<?php $page = "TampilanBerita"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>
<style type="text/css">
  /* tinggi card */
.post-body {
    height: 215px;
    position: relative;
    padding: 20px 15px 0;
}

/* untuk menghilangkan padding pada .panel-heading */
.post-thumb {
    padding: 0
}

/* mengatur font dan link judul artikel*/
.post-title a {
    color: rgba(0,0,0,0.7);
    font-weight: 700;
    font-size: 15px;
    line-height: 1.5em;
    letter-spacing: 0.01rem;
}
.post-title a:hover { text-decoration: none }

/* posisi author selalu di bawah */
.post-author {
    position: absolute;
    bottom: 15px;
    left: 15px;
    font-size: 13px;
}

.post-author .author-photo {
    margin-right: 10px;
    border-radius: 50%;
}

</style>

    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Berita <small>Preview</small></h1> 
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
                  <h3 class="box-title">Hot News <i class="fa fa-fire" style="color: #fa7334;"></i> </h3>
                </div>
                <div class="box-body">

                  <div class="row">
                     <?php
                        include '../conf/koneksi.php';
                        $sql = mysqli_query($koneksi,"select * from berita ORDER BY tanggal desc ");
                        while($data = mysqli_fetch_array($sql))
                        {
                      ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <!-- komponen panel di sini  -->
                      <div class="panel panel-default">
                        <div class="panel-heading post-thumb">
                          <img class="img img-responsive" src="proses/images/<?php echo $data['foto']; ?>" style="height: 150px; width: 400px;" />
                        </div>

                     <div class="panel-body post-body">
                        <a class="label label-default" href="#"><?php echo $data['tanggal']; ?></a>
                        <h3 class="post-title">
                          <a href="ViewBerita.php?id=<?php echo $data['id']; ?>"><?php echo $data['judul']; ?></a><br>
                          <a href="ViewBerita.php?id=<?php echo $data['id']; ?>" style="color: #2bd5ff; font-size: 13px;">Lihat selengkapnya <i class="fa fa-arrow-right"></i></a>
                        </h3>
                        <div class="post-author">
                            <img class="author-photo" height="32" src="../../images/user.png" width="32">
                            <a href="#"><?php echo $data['penulis'] ?></a>
                        </div>
        
                    </div>

                  </div>
                </div>
              <?php } ?>
                  
                </div>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->


       



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>
  </body>
</html>
