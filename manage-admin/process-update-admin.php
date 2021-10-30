<?php
if(isset($_POST['btsua'])){
   
    include('../config/connect.php');
    $id=$_POST['id'];
    $hoten=$_POST['hoten'];
    $tk=$_POST['tk'];
    $pass=$_POST['pass'];
    $lv=$_POST['lv'];
    $cv=$_POST['cv'];

    $sql = "UPDATE qlytaikhoanadmin SET HoTen='$hoten',TenDangNhap='$tk',MatKhau='$pass',adminlv='$lv',Work='$cv' WHERE idad='$id'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    header("Location:index.php");
    mysqli_close($conn);
}