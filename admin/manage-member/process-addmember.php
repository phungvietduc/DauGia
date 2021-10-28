<?php
if(isset($_POST['btthem']))
{
    // $id=$_POST['id'];
    $hoten=$_POST['hoten'];
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $cmnd=$_POST['cmnd'];
    $tk=$_POST['tk'];
    $pass=$_POST['pass'];
    include('../config/connect.php');
    
    $sql = "INSERT INTO nguoidung(HoTen,DiaChi,Email,Sdt,cmnd,TenDangNhap,MatKhau)
    VALUES ('$hoten','$diachi','$email','$sdt','$cmnd','$tk','$pass')";

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