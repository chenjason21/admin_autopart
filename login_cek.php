<?php
if (isset($_POST['submit'])){
        session_start();
        require_once("koneksi.php");

        $user_name=$_POST['user_name'];
        $password_user=$_POST['password_user'];
        $user_name=mysqli_real_escape_string($con,$user_name);
        $password_user=mysqli_real_escape_string($con,$password_user);

        $query="SELECT user_name, password_user  FROM tb_user WHERE user_name ='".$user_name."' AND password_user='".$password_user."'";
        $result=mysqli_query($con, $query);
        $rowcount=mysqli_num_rows($result);

            if ($rowcount>0){
                        $row=mysqli_fetch_assoc($result);
                        if ($row['user_name']=="1"){
                            $_SESSION["user_name"]=$user_name;
                            $_SESSION["password_user"]=$password_user;

                            $login=mysqli_query($con, $query);
                            header("location:admin/index.php");
                        }
                        elseif ($row['']==""){
                            $_SESSION["user_name"]=$user_name;
                            $_SESSION["password_user"]=$password_user;
                            
                            $login=mysqli_query($con, $query);
                            header("location:admin/index.php");
                        }

            }
            else {
                echo "invalid password_user and user_name";}

}//from isset(submit)
?>