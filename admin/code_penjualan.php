<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_jurnal_penjualan']))
{
    $id_jurnal_penjualan  = mysqli_real_escape_string($con, $_POST['delete_jurnal_penjualan']);

    $query = "DELETE FROM tb_jurnal_penjualan WHERE id_jurnal_penjualan ='$id_jurnal_penjualan'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: list_jurnal_penjualan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Deleted Unsuccessfully";
        header("Location: list_jurnal_penjualan.php");
        exit(0);
    }
}

if(isset($_POST['update_jurnal_penjualan']))
{
    $id_jurnal_penjualan  = mysqli_real_escape_string($con, $_POST['id_jurnal_penjualan']);
    $tanggal_penjualan = mysqli_real_escape_string($con, $_POST['tanggal_penjualan']);
    $nama_customer  = mysqli_real_escape_string($con, $_POST['nama_customer']);
    $nama_barang  = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $jumlah_barang  = mysqli_real_escape_string($con, $_POST['jumlah_barang']);
    $harga_satuan = mysqli_real_escape_string($con, $_POST['harga_satuan']);
    $total_penjualan = mysqli_real_escape_string($con, $_POST['total_penjualan']);

    $query = "UPDATE tb_jurnal_penjualan SET tanggal_penjualan='$tanggal_penjualan',nama_customer ='$nama_customer',nama_barang ='$nama_barang',jumlah_barang ='$jumlah_barang',harga_satuan ='$harga_satuan',total_penjualan ='$total_penjualan' WHERE id_jurnal_penjualan ='$id_jurnal_penjualan'";
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

if(isset($_POST['tambah_jurnal_penjualan']))
{
    $id_jurnal_penjualan  = mysqli_real_escape_string($con, $_POST['id_jurnal_penjualan ']);
    $tanggal_penjualan = mysqli_real_escape_string($con, $_POST['tanggal_penjualan']);
    $nama_customer  = mysqli_real_escape_string($con, $_POST['nama_customer']);
    $nama_barang = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $jumlah_barang1   = mysqli_real_escape_string($con, $_POST['jumlah_barang1']);
    $harga_satuan1 = mysqli_real_escape_string($con, $_POST['harga_satuan1']);
    $total_penjualan = mysqli_real_escape_string($con, $_POST['total_penjualan']);

    $query = "INSERT INTO tb_jurnal_penjualan (id_jurnal_penjualan ,tanggal_penjualan,nama_customer,nama_barang,jumlah_barang,harga_satuan,total_penjualan) 
    VALUES 
    ('$id_jurnal_penjualan','$tanggal_penjualan','$nama_customer','$nama_barang','$jumlah_barang1','$harga_satuan1','$total_penjualan')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Jurnal Berhasil Di Tambahkan";
        header("Location: list_jurnal_penjualan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Jurnal Tidak Berhasil Di tambahkan";
        header("Location: list_jurnal_penjualan.php");
        exit(0);
    }



}

?>