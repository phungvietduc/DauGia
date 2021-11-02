<?php
session_start();
include 'config/config.php';
if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $user = mysqli_query($conn, $sql);
    if(mysqli_num_rows($user)>0){
        $_SESSION["user"] = $username;
        header("location:hienthi/index.php");
    }else{
        echo '<script language="javascript">alert("Tài khoản hoặc mật khẩu không chính sác"); window.location="register.php";</script>';
    }
}else{
    header("location:login.php");
}
?>