<?php
if(isset($_POST['btsua'])){
   
    include('../config/connect.php');
    $id=$_POST['id'];
    $hoten=$_POST['name'];
    $image=$_POST['image'];
    $gias=$_POST['gia'];
    $cv=$_POST['ttsp'];
    $loai=$_POST['loaisp'];
    $sql = "UPDATE sanpham SET TenSP='$hoten',image='$image',ThongTinSP='$cv',GiaSP='$gias',LoaiSP='$loai' WHERE MaSP='$id'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    header("Location:index.php");
    mysqli_close($conn);
}