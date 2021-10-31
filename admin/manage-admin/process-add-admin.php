<?php
if(isset($_POST['btthem']))
{
    // $id=$_POST['id'];
    $hoten=$_POST['hoten'];
    $tk=$_POST['tk'];
    $pass=$_POST['pass'];
    $cv=$_POST['cv'];
    $lv=$_POST['lv'];
    include('../config/connect.php');
    
    $sql = "INSERT INTO qlytaikhoanadmin(HoTen,TenDangNhap,MatKhau,adminlv,Work)
    VALUES ( '$hoten','$tk','$pass','$lv','$cv')";

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