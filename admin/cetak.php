<?php
  session_start();
  require_once("koneksi.php");
  //Var
  $awal = $_GET['awal'];
  $akhir = $_GET['akhir'];

    $tglawal    =isset($_GET['awal']) ? $_GET['awal']: "01-".date('m-Y');
    $tglakhir   =isset($_GET['akhir']) ? $_GET['akhir']: date('m-Y');
    $sqlperiode =" where A.tglpesanan BETWEEN '.$awal.' AND '.$akhir'";

function inggristgl($tanggal)
{
  $tgl =substr($tanggal,0,2);
  $bln =substr($tanggal,3,2);
  $thn =substr($tanggal,6,4);
  $awal="$thn-$bln-$tgl";
  return $awal;
}
 function indonesiatgl($tanggal)
{
  $tgl =substr($tanggal,8,2);
  $bln =substr($tanggal,5,2);
  $thn =substr($tanggal,0,4);
  $awal="$tgl-$bln-$thn";
  return $awal;
}
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
  <?php
  if (!empty('tglawal')) { ?>   
     <center><h2>DAFTAR LAPORAN PEMBELIAN BARANG</h2> <hr><br> PERIODE PESANAN <b> <?php echo indonesiatgl($awal); ?> S/D <?php echo indonesiatgl($akhir); ?> </b></center>
<?php } else { ?> 
<center><h2>DAFTAR LAPORAN</h2></center> 
<?php  } ?>

<table class="table my-0">
  <thead>
    <tr>
        <th>ID</th>
        <th>Tanggal</th>
        <th>Nama Sales</th>
        <th>Jumlah</th>
        <th>Harga Satuan</th>
        <th>Total Harga</th>
    </tr>
  </thead>
  <tbody>
   <?php 
    //jika tanggal dari dan tanggal ke ada maka
    if(isset($_GET['awal']) && isset($_GET['akhir'])){
    // tampilkan data yang sesuai dengan range tanggal yang dicari 
    $data = mysqli_query($con, "SELECT * FROM tb_jurnal_pembelian WHERE tanggal_pembelian BETWEEN '".$_GET['awal']."' and '".$_GET['akhir']."'");
      }

      else{
     //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
    $data = mysqli_query($con, "select * from tb_jurnal_pembelian");   
                            }
      // $no digunakan sebagai penomoran 
           $jumlahbayar=0;                 
     // while digunakan sebagai perulangan data 
    while($d = mysqli_fetch_array($data)){
      $jumlah[] =$d['jumlah_barang'];
      $jumlah_barang=array_sum($jumlah);
      $jumlah1[] =$d['jumlah_pembelian'];
      $jumlah_pembelian=array_sum($jumlah1);

                        ?>
      <tr>
        <td><?php echo $d['id_jurnal_pembelian']; ?></td>
        <td><?php echo $d['tanggal_pembelian']; ?></td>
        <td><?php echo $d['nama_sales']; ?></td>
        <td><?php echo $d['jumlah_barang']; ?></td>
        <td>Rp. <?php echo number_format($d['harga_satuan'],0, ",", ".");?></td>
        <td>Rp. <?php echo number_format($d['jumlah_pembelian'],0, ",", ".");?></td>
      </tr>
       <?php } ?>
                                
      

    

  </tbody>
  <tr>
  <th align="center"> </th>
     <th><strong></strong></th> 
      <th><strong>TOTAL JUMLAH BARANG</strong></th> 
      <th align="right"><?php echo $jumlah_barang; ?></th>
 </tr>
 <th align="center"> </th>
     <th><strong></strong></th> 
     <th><strong></strong></th> 
     <th><strong></strong></th> 
      <th><strong>TOTAL JUMLAH HARGA</strong></th> 
      <th align="right">Rp. <?php echo number_format($jumlah_pembelian) ; ?></th>
 </tr>
</table>
    <script>
        window.print();
    </script>    

</body>
</html>

 


 


