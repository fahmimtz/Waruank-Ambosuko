<body id="page-top">
  <div id="wrapper">

    <!-- Awal Sidebar -->
    <ul class="navbar-nav bg-gradient-success text-dark sidebar accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <i class="fas fa-utensils text-dark"></i></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-dark">Waruank Ambo Suko</div>
      </a>

      <hr class="sidebar-divider my-0">

      <!-- Link Halaman Utama -->
      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('dashboard') ?>">
          <strong>Halaman Utama</strong></a>
      </li>

      <hr class="sidebar-divider">

      <!-- kategori -->
      <div class="sidebar-heading">
        <h6><strong>KATEGORI</strong></h6>
      </div>
      <!-- Link kategori -->
      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('kategori/paket') ?>">
          <strong>Paket Hemat</strong></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('kategori/makan') ?>">
          <strong>Makan</strong></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link bg-info text-dark" href="<?php echo base_url('kategori/minum') ?>">
          <strong>Minum</strong></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- Akhir Sidebar -->

  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">

      <!-- Awal Topbar -->
        <nav class="navbar navbar-expand navbar-dan bg-success topbar mb-4 static-top shadow">
          
          <!-- Keranjang belanja -->
          <ul class="navbar-nav ml-auto">
            <div class="navbar">
              <ul class="nav navbar-nav navbar-right btn btn-light btn-outline-warning">
                <li class="text-center">
                  <?php 
                  $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). 'items' 
                  ?>
                  <?php echo anchor('dashboard/detail_keranjang', $keranjang ) ?>
                </li>
              </ul>

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