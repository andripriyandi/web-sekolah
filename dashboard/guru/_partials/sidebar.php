<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../admin/proses/images/<?= $data['foto']  ?>" class="img-circle" alt="User Image" />
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
      <li class="<?php if($page == 'Home'){ echo 'active'; } ?>">
        <a href="index.php">
          <i class="fa fa-th"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="<?php if($page == 'DataSiswa'){ echo 'active'; } ?>">
        <a href="list_siswa.php">
          <i class="fa fa-mortar-board"></i>
          <span>Data Siswa</span>
        </a>
      </li>
      <li class="<?php if($page == 'DataGuru'){ echo 'active'; } ?>">
        <a href="list_guru.php">
          <i class="fa fa-group"></i> <span>Data Guru</span>
        </a>
      </li>
  </section>

  <!-- /.sidebar -->
</aside>
