<?php
  session_start();
  require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Dashbord</title>
    <img src="assets/img/avatars/1.png">
    <!-- Favicon -->

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
<body onload="print()">
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST "></form>

     <center><h2>DAFTAR BARANG</h2> <hr><br></center>



<table class="table my-0">
  <thead>
    <tr>
        <th>ID</th>
        <th>Jenis Mobil</th>
        <th>Merek Mobil</th>
        <th>No Part</th>
        <th>Jenis Barang</th>
        <th>Jumlah</th>
        <th>Sales</th>
        <th>Harga Sales</th>
        <th>Harga Jual</th>
    </tr>
  </thead>
  <tbody>
   <?php 
    $data = mysqli_query($con, "select * from tb_barang"); 
    while($d = mysqli_fetch_array($data)){ 

      ?>
      <tr>
        <td><?php echo $d['id_barang']; ?></td>
        <td><?php echo $d['jenis_mobil']; ?></td>
        <td><?php echo $d['merek_mobil']; ?></td>
        <td><?php echo $d['jenis_barang']; ?></td>
        <td><?php echo $d['nama_barang']; ?></td>
        <td><?php echo $d['jumlah_barang']; ?></td>
        <td><?php echo $d['nama_sales']; ?></td>
        <td>Rp. <?php echo number_format($d['harga_sales'],0, ",", ".");?></td>
        <td>Rp. <?php echo number_format($d['harga_jual'],0, ",", ".");?></td>
      </tr>
       <?php } ?>
                                
      

    

  </tbody>
</table>
    <script>
        window.print();
    </script>    

</body>
</html>

 


 


