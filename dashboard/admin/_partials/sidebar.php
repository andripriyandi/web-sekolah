<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="proses/images/<?= $data['foto']; ?>" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p><?php echo $data['nama']; ?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu</li>
      <li class=" <?php if($page == 'Home'){ echo 'active'; } ?>">
        <a href="index.php">
          <i class="fa fa-th"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="<?php if($page == 'EditHome' || $page == 'EditSP' || $page == 'EditPS' || $page == 'EditAbout' || $page == 'Kontak' ){ echo 'active'; } ?>">
        <a href="#">
          <i class="fa fa-university"></i>
          <span>Info Sekolah</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($page == 'EditHome'){ echo 'active'; } ?>"><a href="home.php"><i class="fa fa-circle-o"></i>Home</a></li>
          <li class="<?php if($page == 'EditSP'){ echo 'active'; } ?>"><a href="sp.php"><i class="fa fa-circle-o"></i>Selayang Pandang</a></li>
          <li class="<?php if($page == 'EditPS'){ echo 'active'; } ?>"><a href="profil_sekolah.php"><i class="fa fa-circle-o"></i>Profil sekolah</a></li>
          <li class="<?php if($page == 'EditAbout'){ echo 'active'; } ?>"><a href="about.php"><i class="fa fa-circle-o"></i>About</a></li>
          <li class="<?php if($page == 'Kontak'){ echo 'active'; } ?>"><a href="kontak.php"><i class="fa fa-circle-o"></i>Kontak</a></li>
        </ul>
      </li>

      <li class="<?php if($page == 'Berita' || $page == 'TampilanBerita' ){ echo 'active'; } ?>">
        <a href="#">
          <i class="fa fa-newspaper-o"></i> <span>Berita</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($page == 'Berita'){ echo 'active'; } ?>"><a href="berita.php"><i class="fa fa-circle-o"></i>Daftar Berita</a></li>
          <li class="<?php if($page == 'TampilanBerita'){ echo 'active'; } ?>"><a href="TampilanBerita.php"><i class="fa fa-circle-o"></i>Tampilan Berita</a></li>
        </ul>
      </li>


      <li class=" <?php if($page == 'TambahSiswa' || $page == 'ListSiswa' ){ echo 'active'; } ?>">
        <a href="#">
          <i class="fa fa-mortar-board"></i>
          <span>Data Siswa</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li  class="<?php if($page == 'TambahSiswa'){ echo 'active'; } ?>"><a href="tambah_siswa.php"><i class="fa fa-circle-o"></i>Tambah Siswa</a></li>
          <li  class="<?php if($page == 'ListSiswa'){ echo 'active'; } ?>"><a href="list_siswa.php"><i class="fa fa-circle-o"></i>List Siswa</a></li>
        </ul>
      </li>

      <li class="<?php if($page == 'TambahGuru' || $page == 'ListGuru' ){ echo 'active'; } ?>">
        <a href="#">
          <i class="fa fa-group"></i> <span>Data Guru</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($page == 'TambahGuru'){ echo 'active'; } ?>" ><a href="tambah_guru.php"><i class="fa fa-circle-o"></i>Tambah Guru</a></li>
          <li class="<?php if($page == 'ListGuru'){ echo 'active'; } ?>"><a href="list_guru.php"><i class="fa fa-circle-o"></i>List Guru</a></li>
        </ul>
      </li>

      <li class="<?php if($page == 'TambahUser' || $page == 'ListUser' ){ echo 'active'; } ?>">
        <a href="#">
          <i class="fa fa-user"></i> <span>Data User</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($page == 'TambahUser'){ echo 'active'; } ?>"><a href="tambah_user.php"><i class="fa fa-circle-o"></i>Tambah User</a></li>
          <li class="<?php if($page == 'ListUser'){ echo 'active'; } ?>"><a href="list_user.php"><i class="fa fa-circle-o"></i>List User</a></li>
        </ul>
      </li>
      
  </section>

  <!-- /.sidebar -->
</aside>
