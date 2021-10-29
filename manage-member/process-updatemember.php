<?php
if(isset($_POST['btsua'])){
   
    include('../config/connect.php');
    $hoten=$_POST['hoten'];
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $cmnd=$_POST['cmnd'];
    $tk=$_POST['tk'];
    $pass=$_POST['pass'];
    $id=$_POST['id'];
    $sql = "UPDATE nguoidung SET HoTen='$hoten',DiaChi='$diachi',Email='$email',Sdt='$sdt',cmnd='$cmnd',TenDangNhap='$tk',MatKhau='$pass' WHERE Id='$id'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    header("Location:index.php");
    mysqli_close($conn);
}