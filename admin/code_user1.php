<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_user']))
{
    $id_user = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM tb_user WHERE id_user='$id_user' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: list_user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Deleted Unsuccessfully";
        header("Location: list_user.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $id_user = mysqli_real_escape_string($con, $_POST['id_user']);
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password_user = mysqli_real_escape_string($con, $_POST['password_user']);
    $level_user = mysqli_real_escape_string($con, $_POST['level_user']);
    $query = "UPDATE tb_user SET user_name = '$user_name', password_user='$password_user', level_user='$level_user' WHERE id_user='$id_user' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Updated Successfully";
        header("Location: list_user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Unsuccessfully";
        header("Location: list_user.php");
        exit(0);
    }

}



if(isset($_POST['tambah_user']))
{
    $id_user = mysqli_real_escape_string($con, $_POST['id_user']);
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password_user = mysqli_real_escape_string($con, $_POST['password_user']);
    $level_user = mysqli_real_escape_string($con, $_POST['level_user']);
    $query = "INSERT INTO tb_user(id_user,user_name,password_user,level_user) 
    VALUES 
    ('$id_user','$user_name','$password_user','$level_user')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "User Berhasil Di Tambahkan";
        header("Location: list_user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Tidak Berhasil Di tambahkan";
        header("Location: list_user.php");
        exit(0);
    }



}

?>