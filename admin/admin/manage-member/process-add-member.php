<?php
if(isset($_POST['btthem']))
{
    // $id=$_POST['id'];
    $hoten=$_POST['hoten'];

    $email=$_POST['email'];


    $tk=$_POST['tk'];

    include('../config/connect.php');
    
    $sql = "INSERT INTO nguoidung(HoTen,Email,TenDangNhap)
    VALUES ('$hoten','$email','$tk')";

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