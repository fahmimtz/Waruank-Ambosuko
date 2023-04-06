<body id="page-top">
  <div id="wrapper">

    <!-- Awal Sidebar -->
    <ul class="navbar-nav bg-gradient-success text-dark sidebar accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <i class="fas fa-store text-dark"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-dark">Admin</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('admin/dashboard_admin') ?>">
          <strong><span>Halaman Admin</span></strong></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('admin/tambah_menu') ?>">
          <strong><span>Tambah Menu</span></strong></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('admin/invoice') ?>">
          <strong><span>Invoice</span></strong></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('admin/data_pelanggan') ?>">
          <strong><span>Data Pelanggan</span></strong></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- Akhir Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
     
      <!-- Awal Topbar -->
      <nav class="navbar navbar-expand navbar-dan bg-success topbar mb-4 static-top shadow">

          <ul class="navbar-nav ml-auto">
            <div class="navbar">
              <div class="topbar-divider d-none d-sm-block"></div>
              
              <!-- teks selamat datang -->
              <ul class="na navbar-nav navbar-right text-dark">
              <?php if($this->session->userdata('nama')) { ?>
                <li><div><strong>Selamat Datang <?php echo $this->session->userdata('nama')?></strong></div></li>
              </ul>

              <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Halaman Login -->
            <ul class="na navbar-nav navbar-right">
                <li class="btn btn-light btn-outline-danger"><?php echo anchor('auth/logout','Logout') ?></li>
              <?php } else { ?>
                <li class="btn btn-light btn-outline-danger"><?php echo anchor('auth/login', 'Login'); ?></li>

              <?php } ?>
            </ul>

            </div>


          </ul>

        </nav>
        <!-- Akhir Topbar -->