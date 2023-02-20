<?php
session_start();
require 'koneksi.php';
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Dashboard SMKN5 BATAM</title>
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
              <!-- Search -->
              <div class="navbar-nav align-items-center"> 
                <div class="nav-item d-flex align-items-center">
                </div>
             </div>
              <!-- /Search -->
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
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
                            <span class="fw-semibold d-block">Autopart</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>   
                    <li>
                      <a class="dropdown-item" href="index.php">
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
                            if(isset($_GET['id_jurnal_penjualan']))
                            {
                                $id_jurnal_penjualan = mysqli_real_escape_string($con, $_GET['id_jurnal_penjualan']);
                                $query = "SELECT * FROM tb_jurnal_penjualan WHERE id_jurnal_penjualan='$id_jurnal_penjualan' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $jurnal_penjualan = mysqli_fetch_array($query_run);
                            ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Perubahan Data</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <form action="code_penjualan.php" method="POST">
                        <input type="hidden" name="id_jurnal_penjualan" value="<?= $jurnal_penjualan['id_jurnal_penjualan']; ?>">
                              <div class="row">
                                <div class="mb-3 col-md-12">
                                  
                                  <input type="hidden" name="id_jurnal_penjualan" value="<?=$jurnal_penjualan['id_jurnal_penjualan'];?>" class="form-control">
                                </div>
                                </div> 
                                <div class="mb-3 col-md-12">
                                  <label class="form-label">ID</label>
                                  <input type="text" name="id_jurnal_penjualan" value="<?=$jurnal_penjualan['id_jurnal_penjualan'];?>" class="form-control">
                                </div> 
                                <div class="mb-3 col-md-12">
                                  <label class="form-label">Tanggal Jurnal Penjualan</label>
                                  <input type="date" name="tanggal_penjualan" value="<?=$jurnal_penjualan['tanggal_penjualan'];?>" class="form-control">
                                </div>
                                <div class="mb-3 col-md-12">
                                  <label class="form-label">Nama Customer</label>
                                  <div class="col-md-10">
                                    <select class="form-control" name="nama_customer">
                                    <option disabled selected > <?=$jurnal_penjualan['nama_customer'];?></option>
                                        <?php
                                        include 'koneksi.php'; 
                                         $connect = mysqli_connect("localhost","root","","db_autopart");
                                         $query = "SELECT * FROM `tb_customer`";
                                         $result1 = mysqli_query($connect, $query);
                                        while($row1 = mysqli_fetch_array($result1)):;?>
                                        <option value="<?php echo $row1['nama_customer'];?>"><?php echo $row1['nama_customer'];?></option>
                                        <?php endwhile;?>
                                    </select>
                                  </div>
                                  </div>

                                <div class="mb-3 col-md-12">
                                  <label class="form-label">Nama Barang</label>
                                  <input type="text" name="nama_barang" value="<?=$jurnal_penjualan['nama_barang'];?>" class="form-control">
                                </div>
                                
                                <div class="mb-3 col-md-12">
                                  <label class="form-label">Jumlah Barang</label>
                                  <input type="text" name="jumlah_barang" value="<?=$jurnal_penjualan['jumlah_barang'];?>" class="form-control"  >
                                </div>
                                  <div class="mb-3 col-md-12">
                                  <label class="form-label">Harga Satuan</label>
                                    <div class="input-group">
                                   <span class="input-group-text" id="basic-addon11">Rp</span>
                                  <input type="text" name="harga_satuan" value="<?= number_format($jurnal_penjualan['harga_satuan'],0, ",", ".") ?>" class="form-control"   >
                                  </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                  <label class="form-label">Total Penjualan </label>
                                  <div class="input-group">
                                  <span class="input-group-text" id="basic-addon11">Rp</span>
                                  <input type="text" name="total_penjualan" value="<?= number_format($jurnal_penjualan['total_penjualan'],0, ",", ".") ?>" class="form-control">
                                  </div>
                                </div>                               
                                <div class="mb-3 col-md-12">
                                  <button type="submit" name="update_jurnal_penjualan" class="btn btn-primary">Update 
                                  </button>
                                  <a href="list_jurnal_penjualan.php" class="btn btn-success">Kembali</a>
                                </div>   
                                </div>
                              </div>
                                
                              </div>                                            
                      </form>
                      <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                    <!-- /Account -->
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
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/js/main.js"></script>
</html>
