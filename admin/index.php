<?php
  session_start();
  require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Dashboard Autopart</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/admin.png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,1200;0,700;1,300;1,400;1,500;1,1200;1,700&display=swap"
      rel="stylesheet"/>
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css"/>
    <link rel="stylesheet" href="assets/css/demo.css" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                 <img src="assets/img/favicon/admin.png"> 
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">AutoPart</span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item active">
                <a href="index.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>
               <!-- User -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">User</span></li>
                <li class="menu-item">
                  <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Basic">Manajemen User</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="list_user.php" class="menu-link">
                        <div data-i18n="Basic Inputs">List User</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="tambah_user.php" class="menu-link">
                        <div data-i18n="Basic groups">Tambah User</div>
                      </a>
                    </li>
                  </ul>
                </li> 
              <!-- Barang -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Barang</span></li>
                <li class="menu-item">
                  <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-component"></i>
                    <div data-i18n="Basic">Manajemen Barang</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="list_barang.php" class="menu-link">
                        <div data-i18n="Basic Inputs">List Barang</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="tambah_barang.php" class="menu-link">
                        <div data-i18n="Basic groups">Tambah Barang</div>
                      </a>
                    </li>
                  </ul>
                </li> 
              <!-- Supplier -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Sales</span></li>
                <li class="menu-item">
                  <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Basic">Manajemen Sales</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="list_sales.php" class="menu-link">
                        <div data-i18n="Basic Inputs">List Sales</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="tambah_sales.php" class="menu-link">
                        <div data-i18n="Basic groups">Tambah Data Sales</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Customer -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Customer</span></li>
                  <li class="menu-item">
                    <a href="#" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-user"></i>
                      <div data-i18n="Basic">Manajemen Customer</div>
                    </a>
                    <ul class="menu-sub">
                      <ul class="menu-item">
                        <a href="list_customer.php" class="menu-link">
                          <div data-i18n="Basic Inputs">List Customer</div>    
                        </a>
                      </ul>
                      <li class="menu-item">
                        <a href="tambah_customer.php" class="menu-link">
                          <div data-i18n="Basic groups">Tambah Customer</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                <!-- Jurnal -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Jurnal</span></li>
                  <li class="menu-item">
                    <a href="#" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-receipt"></i>
                      <div data-i18n="Basic">Manajemen Jurnal</div>
                    </a>
                    <ul class="menu-sub">
                      <ul class="menu-item">
                        <a href="list_jurnal_pembelian.php" class="menu-link">
                          <div data-i18n="Basic Inputs">List Jurnal Pembelian</div>    
                        </a>
                      </ul>
                      <li class="menu-item">
                        <a href="list_jurnal_penjualan.php" class="menu-link">
                          <div data-i18n="Basic groups">List Jurnal Penjualan </div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="tambah_jurnal_pembelian.php" class="menu-link">
                          <div data-i18n="Basic groups">Tambah Jurnal Pembelian</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="tambah_jurnal_penjualan.php" class="menu-link">
                          <div data-i18n="Basic groups">Tambah Jurnal Penjualan</div>
                        </a>
                      </li>
                    </ul>
                  </li>
        </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <p><?php echo $_SESSION['user_name'];?></p>
                            <span class="fw-semibold d-block">AutoPart</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>          
                    <li>
                      <a class="dropdown-item" href="../index.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->
                  <?php 
                    include "koneksi.php";
                    $sql="select * from tb_user";
                    $data_user = mysqli_query($con,$sql);
                    $jumlah_user = mysqli_num_rows($data_user);
                  ?>
                  <?php 
                    include "koneksi.php";
                    $sql1="select * from tb_barang";
                    $data_barang = mysqli_query($con,$sql1);
                    $jumlah_barang = mysqli_num_rows($data_barang);
                  ?>
                  <?php 
                    include "koneksi.php";
                    $sql2="select * from tb_customer";
                    $data_customer = mysqli_query($con,$sql2);
                    $jumlah_customer = mysqli_num_rows($data_customer);
                  ?>
                  <?php 
                    include "koneksi.php";
                    $sql3="select * from tb_sales";
                    $data_sales = mysqli_query($con,$sql3);
                    $jumlah_sales = mysqli_num_rows($data_sales);
                  ?>
                  <?php 
                    include "koneksi.php";
                    $sql4="select * from tb_jurnal_pembelian";
                    $data_jurnal_pembelian = mysqli_query($con,$sql4);
                    $jumlah_jurnal_pembelian = mysqli_num_rows($data_jurnal_pembelian);
                  ?>
                  <?php 
                    include "koneksi.php";
                    $sql5="select * from tb_jurnal_penjualan";
                    $data_jurnal_penjualan = mysqli_query($con,$sql5);
                    $jumlah_jurnal_penjualan = mysqli_num_rows($data_jurnal_penjualan);
                  ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-6 mb-3">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User Yang Terdaftar</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_user?> </div>
                        </div>
                          <div class="col-auto">
                          <i class="bx bx-user bx-lg"></i>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 mb-3">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang Yang Terdaftar</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_barang?> </div>
                        </div>
                          <div class="col-auto">
                          <i class="bx bxs-component bx-lg"></i>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-6 mb-3">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Customer Yang Terdaftar</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_customer?> </div>
                        </div>
                          <div class="col-auto">
                          <i class="bx bx-user bx-lg"></i>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 mb-3">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Sales Yang Terdaftar</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_sales?> </div>
                        </div>
                          <div class="col-auto">
                          <i class="bx bx-user bx-lg"></i>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-6 mb-3">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Jurnal Pembelian Yang Terdaftar</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_jurnal_pembelian?> </div>
                        </div>
                          <div class="col-auto">
                          <i class="bx bx-receipt bx-lg"></i>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 mb-3">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Jurnal Penjualan Yang Terdaftar</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $jumlah_jurnal_penjualan?> </div>
                        </div>
                          <div class="col-auto">
                          <i class="bx bx-receipt bx-lg"></i>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>
          <!-- Content wrapper -->
      <div class="content-backdrop fade"></div>
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    
  </body>
  <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

</html>
