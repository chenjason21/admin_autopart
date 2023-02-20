<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_customer']))
{
    $id_customer = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM tb_customer WHERE id_customer='$id_customer' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: list_customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Deleted Unsuccessfully";
        header("Location: list_customer.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
    $id_customer = mysqli_real_escape_string($con, $_POST['id_customer']);
    $nama_customer = mysqli_real_escape_string($con, $_POST['nama_customer']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $alamat_customer = mysqli_real_escape_string($con, $_POST['alamat_customer']);
    
    $query = "UPDATE tb_customer SET nama_customer='$nama_customer',no_hp='$no_hp',alamat_customer='$alamat_customer' WHERE id_customer='$id_customer' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Updated Successfully";
        header("Location: list_customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Unsuccessfully";
        header("Location: list_customer.php");
        exit(0);
    }

}


if(isset($_POST['tambah_customer']))
{
    $id_customer = mysqli_real_escape_string($con, $_POST['id_customer']);
    $nama_customer = mysqli_real_escape_string($con, $_POST['nama_customer']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $alamat_customer = mysqli_real_escape_string($con, $_POST['alamat_customer']);



    $query = "INSERT INTO tb_customer(id_customer,nama_customer,no_hp,alamat_customer) 
    VALUES 
    ('$id_customer','$nama_customer','$no_hp','$alamat_customer')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "customer Berhasil Di Tambahkan";
        header("Location: list_customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "customer Tidak Berhasil Di tambahkan";
        header("Location: list_customer.php");
        exit(0);
    }



}

?>