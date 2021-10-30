<?php
if(isset($_POST['btthem']))
{
    // $id=$_POST['id'];
    $hoten=$_POST['name'];
    $image=$_POST['diachi'];
    $gias=$_POST['gia'];
    $cv=$_POST['ttsp'];
    $lv=$_POST['sl'];
    $loai=$_POST['loaisp'];
    $sl=$_POST['loaisp'];
    include('../config/connect.php');
    
    $sql = "INSERT INTO sanpham(TenSP,image,ThongTinSP,GiaSP,SoLuong,MaLoaiSP)
    VALUES ( '$hoten','$image','$cv','$gias','$lv','$sl')";

    if (mysqli_query($conn, $sql)) 
    {
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location:index.php");
    mysqli_close($conn);
}
?>