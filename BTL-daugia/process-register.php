<?php
include 'config/config.php';
if ( isset($_POST['submit']) && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '') {
    $uname = @$_POST['uname'];
    $username = @$_POST['username'];
    $email = @$_POST['email'];
    $password = @$_POST['password'];
    $repassword = @$_POST['repassword'];
    if ($password != $repassword) {
        echo '<script language="javascript">alert("Mật khẩu cần được nhập lại chính xác"); window.location="register.php";</script>';
    }
    $sql = "SELECT * FROM user WHERE username='$username' OR email = '$email' ";
    //$conn = mysqli_connect("localhost", "root", "", "vidu");
    $old = mysqli_query($conn, $sql);
    $password=md5($password);
    if (mysqli_num_rows($old) > 0) {
        echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.location="register.php";</script>';
    }
    $sql = "INSERT INTO user (HoTen,username,email,password) values ('$uname','$username','$email','$password')";
    mysqli_query($conn, $sql);
    echo '<script language="javascript">alert("Đăng ký thành công"); window.location="login.php";</script>';
} else {
    echo '<script language="javascript">alert("Vui lòng nhập thông tin của bạn"); window.location="register.php";</script>';
}
