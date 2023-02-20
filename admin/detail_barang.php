<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Dashboard SMKN5 BATAM</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

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
                            <span class="fw-semibold d-block">SMKN 5 BATAM</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>   
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
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
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Detail Barang</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <?php
                        if(isset($_GET['id_barang']))
                        {
                            $id_barang = mysqli_real_escape_string($con, $_GET['id_barang']);
                            $query = "SELECT * FROM tb_barang WHERE id_barang='$id_barang' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $barang = mysqli_fetch_array($query_run);
                                ?>
                        <div class="row">
                          <div class="mb-3 col-md-12">
                            <label for="id_barang_siswa" class="form-label">id_barang</label>
                              <p class="form-control"> <?=$barang['id_barang'];?></p>
                          </div> 
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="nama_siswa" class="form-label">Jenis Mobil</label>
                            <p class="form-control"> <?=$barang['jenis_mobil'];?></p>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="#" class="form-label">Merek Mobil</label>
                            <p class="form-control"> <?=$barang['merek_mobil'];?></p>
                          </div> 
                          <div class="mb-3 col-md-12">
                            <label for="nama_siswa" class="form-label">No Part</label>
                            <p class="form-control"> <?=$barang['no_part'];?></p>
                          <div class="mb-3 col-md-12">
                            <label for="nama_siswa" class="form-label">Jenis Barang</label>
                            <p class="form-control"> <?=$barang['jenis_barang'];?></p>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="nama_siswa" class="form-label">Nama Barang</label>
                            <p class="form-control"> <?=$barang['nama_barang'];?></p>
                          </div>      
                          <div class="mb-3 col-md-12">
                            <label for="#" class="form-label">Jumlah Barang</label>
                            <p class="form-control"> <?=$barang['jumlah_barang'];?></p>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="#" class="form-label">Harga Sales</label>
                            <p class="form-control"> <?=$barang['harga_sales'];?></p>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="#" class="form-label">Nama Sales</label>
                            <p class="form-control"> <?=$barang['nama_sales'];?></p>
                          </div>
                          
                          

                         <div class="mb-3 col-md-12">
                            <a href="edit_barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-info">Edit Data</a>
                            <a href="list_barang.php" class="btn btn-success">Kembali</a>
                          </div>
                        </div>
                         
                          
                      <?php
                            }
                            else
                            {
                                echo "<h4>No Such id_barang Found</h4>";
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
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</html>
