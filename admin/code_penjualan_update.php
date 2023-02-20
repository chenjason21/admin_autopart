<?php
session_start();
require 'koneksi.php';
if(isset($_POST['update_jurnal_penjualan']))
{
    $id_jurnal_penjualan  = mysqli_real_escape_string($con, $_POST['id_jurnal_penjualan']);
    $tanggal_penjualan = mysqli_real_escape_string($con, $_POST['tanggal_penjualan']);
    $nama_customer = mysqli_real_escape_string($con, $_POST['nama_customer']);
    $nama_barang = mysqli_real_escape_string($con, $_POST['nama_barang']);

    $query = "UPDATE tb_jurnal_penjualan SET tanggal_penjualan='$tanggal_penjualan',nama_customer='$nama_customer',nama_barang='$nama_barang' WHERE id_jurnal_penjualan='$id_jurnal_penjualan'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Updated Successfully";
        header("Location: list_jurnal_penjualan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Unsuccessfully";
        header("Location: list_jurnal_penjualan.php");
        exit(0);
    }

}
?>