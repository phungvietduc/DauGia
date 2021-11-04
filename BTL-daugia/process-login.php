<?php
session_start();
include 'config/config.php';
if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM nguoidung WHERE TenDangNhap = '$username' AND MatKhau = '$password' ";
    $user = mysqli_query($conn, $sql);
    if(mysqli_num_rows($user)>0){
        $_SESSION['username'] = $username;
        header("location:hienthi/index.php");
    }else{
        echo '<script language="javascript">alert("Tài khoản hoặc mật khẩu không chính xác"); window.location="login.php";</script>';
    }
}else{
    header("location:login.php");
}
?>