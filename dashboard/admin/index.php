<?php $page = "Home"; ?>
<?php include "_partials/meta.php"; ?>
<?php include "_partials/head.php"; ?>
<?php include "_partials/sidebar.php";?>


    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>WELCOME <small><?php echo $_SESSION['nama']; ?></small></h1> 
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-th"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
        
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">data siswa</span>
                  <span class="info-box-number">
                    <?php 
                        $sql = "SELECT * FROM siswa";
                        $query = mysqli_query($koneksi, $sql);
                        $count = mysqli_num_rows($query);
                        echo "$count";
                     ?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">data guru</span>
                  <span class="info-box-number">
                    <?php 
                        $sql = "SELECT * FROM guru";
                        $query = mysqli_query($koneksi, $sql);
                        $count = mysqli_num_rows($query);
                        echo "$count";
                     ?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">User</span>
                  <span class="info-box-number">
                    <?php 
                        $sql = "SELECT * FROM user";
                        $query = mysqli_query($koneksi, $sql);
                        $count = mysqli_num_rows($query);
                        echo "$count";
                     ?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">SMKN 7 BALEENDAH</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        
        <div class="box-body">
          <div class="callout callout-info">
            <h3 align="center">SELAMAT DATANG DI HALAMAN ADMIN</h3>
            <br/>
            <p class="pull-right">
              <b id="tanggal"></b> &nbsp;
              <b id="jam"></b>
            </p>
            <br>
            <div class="ajax-content">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Terima Kasih <i class="fa fa-leaf" style="color: green;"></i>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->


    <script type="text/javascript">
        // 1 detik = 1000
        window.setTimeout("waktu()",1000);  
        function waktu() {   
        var tanggal = new Date();  
        setTimeout("waktu()",1000);  
        document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
        }
    </script>
     
    <script type="text/javascript">
      var tanggallengkap = new String();
      var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
      namahari = namahari.split(" ");
      var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
      namabulan = namabulan.split(" ");
      var tgl = new Date();
      var hari = tgl.getDay();
      var tanggal = tgl.getDate();
      var bulan = tgl.getMonth();
      var tahun = tgl.getFullYear();
      document.getElementById("tanggal").innerHTML = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
    </script>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "_partials/footer.php"; ?>
    </div><!-- ./wrapper -->
    <?php include "_partials/js.php"; ?>

  </body>
</html> 
