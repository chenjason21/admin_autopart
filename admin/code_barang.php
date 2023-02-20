<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_barang']))
{
    $id_barang = mysqli_real_escape_string($con, $_POST['delete_barang']);

    $query = "DELETE FROM tb_barang WHERE id_barang='$id_barang' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: list_barang.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Deleted Unsuccessfully";
        header("Location: list_barang.php");
        exit(0);
    }
}

if(isset($_POST['update_barang']))
{
    $id_barang = mysqli_real_escape_string($con, $_POST['id_barang']);
    $jenis_mobil = mysqli_real_escape_string($con, $_POST['jenis_mobil']);
    $merek_mobil = mysqli_real_escape_string($con, $_POST['merek_mobil']);
    $no_part = mysqli_real_escape_string($con, $_POST['no_part']);
    $jenis_barang = mysqli_real_escape_string($con, $_POST['jenis_barang']);
    $nama_barang = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $jumlah_barang = mysqli_real_escape_string($con, $_POST['jumlah_barang']);
    $harga_sales = mysqli_real_escape_string($con, $_POST['harga_sales']);
    $harga_jual = mysqli_real_escape_string($con, $_POST['harga_jual']);
    $nama_sales = mysqli_real_escape_string($con, $_POST['nama_sales']);
    $query = "UPDATE tb_barang SET jenis_mobil='$jenis_mobil',merek_mobil='$merek_mobil',no_part='$no_part',jenis_barang='$jenis_barang', nama_barang='$nama_barang',jumlah_barang='$jumlah_barang',harga_sales='$harga_sales',harga_jual='$harga_jual',nama_sales='$nama_sales' WHERE id_barang='$id_barang' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Updated Successfully";
        header("Location: list_barang.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Unsuccessfully";
        header("Location: list_barang.php");
        exit(0);
    }

}


if(isset($_POST['tambah_barang']))
{
    $jenis_mobil = mysqli_real_escape_string($con, $_POST['jenis_mobil']);
    $merek_mobil = mysqli_real_escape_string($con, $_POST['merek_mobil']);
    $no_part = mysqli_real_escape_string($con, $_POST['no_part']);
    $jenis_barang = mysqli_real_escape_string($con, $_POST['jenis_barang']);
    $nama_barang = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $jumlah_barang = mysqli_real_escape_string($con, $_POST['jumlah_barang']);
    $harga_sales = mysqli_real_escape_string($con, $_POST['harga_sales']);
    $harga_jual = mysqli_real_escape_string($con, $_POST['harga_jual']);
    $nama_sales = mysqli_real_escape_string($con, $_POST['nama_sales']);


    $query = "INSERT INTO tb_barang(jenis_mobil,merek_mobil,no_part,jenis_barang,nama_barang,jumlah_barang,harga_sales,harga_jual,nama_sales) 
    VALUES 
    ('$jenis_mobil','$merek_mobil','$no_part','$jenis_barang','$nama_barang','$jumlah_barang','$harga_sales','$harga_jual','$nama_sales')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Barang Berhasil Di Tambahkan";
        header("Location: list_barang.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Barang Tidak Berhasil Di tambahkan";
        header("Location: list_barang.php");
        exit(0);
    }



}

?>