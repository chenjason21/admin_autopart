<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_jurnal_pembelian']))
{
    $id_jurnal_pembelian  = mysqli_real_escape_string($con, $_POST['delete_jurnal_pembelian']);

    $query = "DELETE FROM tb_jurnal_pembelian WHERE id_jurnal_pembelian ='$id_jurnal_pembelian'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: list_jurnal_pembelian.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Deleted Unsuccessfully";
        header("Location: list_jurnal_pembelian.php");
        exit(0);
    }
}

if(isset($_POST['update_jurnal_pembelian']))
{
    $id_jurnal_pembelian  = mysqli_real_escape_string($con, $_POST['id_jurnal_pembelian']);
    $tanggal_pembelian = mysqli_real_escape_string($con, $_POST['tanggal_pembelian']);
    $nama_sales  = mysqli_real_escape_string($con, $_POST['nama_sales']);
    $nama_barang  = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $jumlah_barang = mysqli_real_escape_string($con, $_POST['jumlah_barang']);
    $harga_satuan = mysqli_real_escape_string($con, $_POST['harga_satuan']);
    $jumlah_pembelian = mysqli_real_escape_string($con, $_POST['jumlah_pembelian']);

    $query = "UPDATE tb_jurnal_pembelian SET tanggal_pembelian='$tanggal_pembelian',nama_sales ='$nama_sales',nama_barang='$nama_barang',jumlah_barang ='$jumlah_barang',harga_satuan ='$harga_satuan',jumlah_pembelian ='$jumlah_pembelian' WHERE id_jurnal_pembelian ='$id_jurnal_pembelian'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Updated Successfully";
        header("Location: list_jurnal_pembelian.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Unsuccessfully";
        header("Location: list_jurnal_pembelian.php");
        exit(0);
    }

}

if(isset($_POST['tambah_jurnal_pembelian']))
{
    $id_jurnal_pembelian  = mysqli_real_escape_string($con, $_POST['id_jurnal_pembelian ']);
    $tanggal_pembelian = mysqli_real_escape_string($con, $_POST['tanggal_pembelian']);
    $nama_sales  = mysqli_real_escape_string($con, $_POST['nama_sales']);
    $nama_barang = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $jumlah_barang   = mysqli_real_escape_string($con, $_POST['jumlah_barang']);
    $harga_satuan = mysqli_real_escape_string($con, $_POST['harga_satuan']);
    $jumlah_pembelian = mysqli_real_escape_string($con, $_POST['jumlah_pembelian']);

    $query = "INSERT INTO tb_jurnal_pembelian (id_jurnal_pembelian ,tanggal_pembelian,nama_sales,nama_barang,jumlah_barang,harga_satuan,jumlah_pembelian) 
    VALUES 
    ('$id_jurnal_pembelian','$tanggal_pembelian','$nama_sales','$nama_barang','$jumlah_barang','$harga_satuan','$jumlah_pembelian')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Jurnal Berhasil Di Tambahkan";
        header("Location: list_jurnal_pembelian.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Jurnal Tidak Berhasil Di tambahkan";
        header("Location: list_jurnal_pembelian.php");
        exit(0);
    }



}

?>