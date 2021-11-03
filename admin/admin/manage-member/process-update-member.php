<?php
if(isset($_POST['btsua'])){
   
    include('../config/connect.php');
    $hoten=$_POST['hoten'];
    $email=$_POST['email'];
    $tk=$_POST['tk'];
    $id=$_POST['id'];
    $sql = "UPDATE nguoidung SET HoTen='$hoten',Email='$email',TenDangNhap='$tk' WHERE Id='$id'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    header("Location:index.php");
    mysqli_close($conn);
}