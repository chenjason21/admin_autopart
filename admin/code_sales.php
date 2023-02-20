<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_sales']))
{
    $id_sales = mysqli_real_escape_string($con, $_POST['delete_sales']);

    $query = "DELETE FROM tb_sales WHERE id_sales='$id_sales' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: list_sales.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Deleted Unsuccessfully";
        header("Location: list_sales.php");
        exit(0);
    }
}

if(isset($_POST['update_sales']))
{
    $id_sales = mysqli_real_escape_string($con, $_POST['id_sales']);
    $nama_sales = mysqli_real_escape_string($con, $_POST['nama_sales']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $alamat_sales = mysqli_real_escape_string($con, $_POST['alamat_sales']);
    
    $query = "UPDATE tb_sales SET nama_sales='$nama_sales',no_hp='$no_hp',alamat_sales='$alamat_sales' WHERE id_sales='$id_sales' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Updated Successfully";
        header("Location: list_sales.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Unsuccessfully";
        header("Location: list_sales.php");
        exit(0);
    }

}


if(isset($_POST['tambah_sales']))
{
    $id_sales = mysqli_real_escape_string($con, $_POST['id_sales']);
    $nama_sales = mysqli_real_escape_string($con, $_POST['nama_sales']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $alamat_sales = mysqli_real_escape_string($con, $_POST['alamat_sales']);



    $query = "INSERT INTO tb_sales(id_sales,nama_sales,no_hp,alamat_sales) 
    VALUES 
    ('$id_sales','$nama_sales','$no_hp','$alamat_sales')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "sales Berhasil Di Tambahkan";
        header("Location: list_sales.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "sales Tidak Berhasil Di tambahkan";
        header("Location: list_sales.php");
        exit(0);
    }



}

?>