<?php
include 'config/config.php';
if ( isset($_POST['submit']) && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($password != $repassword) {
        header("location:register.php");
    }
    $sql = "SELECT * FROM user WHERE username='$username' OR email = '$email' ";
    //$conn = mysqli_connect("localhost", "root", "", "vidu");
    $old = mysqli_query($conn, $sql);
    if (mysqli_num_rows($old) > 0) {
        header("location:register.php");
    }
    $sql = "INSERT INTO user (username,email,password) values ('$username','$email','$password')";
    mysqli_query($conn, $sql);
    echo '<script language="javascript">alert("Đăng ký thành công"); window.location="login.php";</script>';
} else {
    echo '<script language="javascript">alert("Có lỗi trong đăng kí"); window.location="register.php";</script>';;
}
