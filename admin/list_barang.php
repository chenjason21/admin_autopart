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
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,1200;0,700;1,300;1,400;1,500;1,1200;1,700&display=swap"
      rel="stylesheet"
    />
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
              <li class="menu-item ">
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
                <li class="menu-item active">
                  <a href="#" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-component"></i>
                    <div data-i18n="Basic">Manajemen Barang</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item active">
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

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row align-items-center">
                <div class="col-xl-12">
                  <div class="card">
                    <h5 class="card-header">List Barang</h5>

                    <div class="card-body">
                     <div class="table-responsive text-nowrap">
                     <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="margin-bottom: 20px;border: 3px solid #30262621;display: block;padding: 5px;border-radius: 10px;margin-left: 5px;width: 20%; margin-top: 10px">
                      <table class="table table-bordered">
                       
                      <thead>
                                <tr>
                                    <th>Merek Mobil</th>
                                    <th>No Part</th>
                                    <th>Jenis Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga Sales</th>
                                    <th>Harga Jual</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php 
                                    include ('message.php');
                                    $query = "SELECT * FROM tb_barang";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $barang)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $barang['merek_mobil']; ?></td>
                                                <td><?= $barang['no_part']; ?></td>
                                                <td><?= $barang['jenis_barang']; ?></td>
                                                <td><?= $barang['nama_barang']; ?></td>
                                                <td><?= $barang['jumlah_barang']; ?></td>
                                                <td>Rp. <?= number_format($barang['harga_sales'],0, ",", ".");?></td>
                                                <td>Rp. <?= number_format($barang['harga_jual'],0, ",", ".");?></td>
                                                <td>
                                                    <a href="detail_barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-info btn-sm">Detail</a>

                                                    <form action="code_barang.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_barang" value="<?=$barang['id_barang'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        <a class="btn btn-primary" href="cetak_barang.php" role="button" target="_blank" style="margin-top: 20px"> CETAK </a>

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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 
</html>
