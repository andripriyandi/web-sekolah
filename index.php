<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SMKN 7 BALEENDAH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shorcut icon" href="images/logo.png">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">SMKN 7 BE</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#selayang-section" class="nav-link">Selayang Pandang</a></li>
                <li><a href="#profil-section" class="nav-link">Profil Sekolah</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#berita-section" class="nav-link">Berita</a></li>
                <li><a href="#kontak-section" class="nav-link">Kontak</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/6.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                   <?php
                      include 'dashboard/conf/koneksi.php';
                      $sql = mysqli_query($koneksi,"select * from home");
                      while($data = mysqli_fetch_array($sql))
                      {
                    ?>
                  <h1  data-aos="fade-up" data-aos-delay="100"><?= $data['judul']; ?></h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"><?= $data['alamat']; ?>.</p>
                  <?php } ?>
                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="cek_login.php" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4" align="center">LOGIN</h3>
                    <?php 
                        if (isset($_GET['pesan'])) {
                          if ($_GET['pesan']=="gagal") {
                            echo "<div class='alert alert-danger'><b><i>ERROR</i></b> Username dan Password Salah!</div>";
                          }else{
                            echo "<div class='alert alert-primary'><b>ERROR</b> Anda Belum Login</div>";
                          }
                        }
                     ?>
                    <div class="form-group">
                      <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Login">
                      <input type="reset" class="btn btn-danger" value="Reset">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section courses-title" id="selayang-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Selayang Pandang</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div>
            <div class="course bg-white h-100 align-self-stretch">
              <div class="course-inner-text py-4 px-4">
                <?php
                      include 'dashboard/conf/koneksi.php';
                      $sql = mysqli_query($koneksi,"select * from sp");
                      while($data = mysqli_fetch_array($sql))
                      {
                ?>
                <h2 align="center"><?= $data['judul']; ?></h2>
                <p><?= $data['deskripsi'] ?></p>

                <?php } ?>
              </div>      
        </div>
      </div>
    </div>
  </div>

    <div class="site-section" id="profil-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <?php
                include 'dashboard/conf/koneksi.php';
                $sql = mysqli_query($koneksi,"select * from profil_sekolah");
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <h2 class="section-title">Profil Sekolah</h2>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="dashboard/admin/proses/images/<?= $data['foto']; ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-5"><?= $data['judul']; ?></h2>
            <table>
              <tr>
                <td>Nama Sekolah</td>
                <td width="50px" align="center"> : </td>
                <td><?= $data['nama_sekolah'];  ?></td>
              </tr>
              <tr>
                <td>NPSN</td>
                <td width="50px" align="center"> : </td>
                <td><?= $data['npsn'];  ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td width="50px" align="center"> : </td>
                <td><?= $data['alamat']; ?></td>
              </tr>
              <tr>
                <td>Kelurahan</td>
                <td width="50px" align="center">:</td>
                <td><?= $data['kelurahan']; ?></td>
              </tr>
              <tr>
                <td>Kecamatan</td>
                <td width="50px" align="center">:</td>
                <td><?= $data['kecamatan']; ?></td>
              </tr>
              <tr>
                <td>Kabupaten</td>
                <td width="50px" align="center">:</td>
                <td><?= $data['kabupaten']; ?></td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td width="50px" align="center"> : </td>
                <td><?= $data['telp']; ?></td>
              </tr>
              
            </table> <br>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">5 Jurusan</h3></div>
            </div>
          <?php } ?>
      </div>
    </div>
  </div>
    
    <div class="site-section" id="about-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-10 mb-5 text-left"  data-aos="fade-up" data-aos-delay="">
            <?php
              include 'dashboard/conf/koneksi.php';
              $sql = mysqli_query($koneksi,"select * from about");
              while($data = mysqli_fetch_array($sql))
              {
            ?>
            <h2 class="section-title" align="center">About</h2>
            <p class="mb-5"><?= $data['deskripsi']; ?>
          </p>
          <?php } ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/user.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Agus Priyatmono Nugroho</h3>
                <p class="position">Kepala Sekolah</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/user.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Agus Supriyatna</h3>
                <p class="position">Wakil Kepala Sekolah Kesiswaan</p>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/user.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Tatang Tarmana</h3>
                <p class="position">Komite Sekolah</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/user.png" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Andri Priyandi</h3>
            <blockquote>
              <p>&ldquo; SMK 7 BISA!!! &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">1,300 Murid</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Sekolah Terbaik</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Guru Terbaik</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Sekolah Nyaman</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Fasilitas Lengkap</h3></div>
              </div>
            </div>

          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="images/7.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="site-section courses-title" id="berita-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Berita</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">
             <?php
              include 'dashboard/conf/koneksi.php';
              $sql = mysqli_query($koneksi,"select * from berita ORDER BY tanggal desc");
              while($data = mysqli_fetch_array($sql))
              {
             ?>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="berita.php?id=<?= $data['id']; ?>"><img src="dashboard/admin/proses/images/<?= $data['foto']; ?>" alt="Image" class="img-fluid" style="height: 200px; width: 450px;"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <div class="meta"><span class="icon-clock-o"></span><?= $data['tanggal']; ?></div>
                <h3><?= $data['judul']; ?></h3>
                <p><a href="berita.php?id=<?= $data['id']; ?>"> Lihat selengkapnya </a></p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-user"></span> <?= $data['penulis']; ?></div>
                <div class="py-3 px-4 w-20 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
        
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-secondary m-1">Prev</button>
            <button class="customNextBtn btn btn-secondary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="kontak-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">

            <h2 class="section-title mb-3">Hubungi Kami</h2>
            <p class="mb-5">Isikan informasi Anda disini untuk mengajukan pertanyaan atau bila ingin menghubungi kami selaku pengurus website ini.</p>
          
            <form method="post" data-aos="fade" action="pt_kontak.php">
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="ID" name="id" readonly>
                </div>
              </div> 

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Subjek" name="subjek">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10" placeholder="Tulis Pesan Disini." name="pesan"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" class="btn btn-secondary" value="Kirim Pesan">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About SMKN 7 Baleendah</h3>
            <p>SMKN 7 Baleendah merupakan sekolah yang unggul dalam prestasi dan mampu bersaing di era global ini. </p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Selayang Pandang</a></li>
              <li><a href="#">Profil Sekolah</a></li>
              <li><a href="#">Berita</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-secondary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script>  by <a href="#" target="_blank" > Andri Priyandi</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>