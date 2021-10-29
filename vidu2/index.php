<?php
session_start();
if( !isset($_SESSION["user"])){
     header("location:login.php");
}
?>
<h1>đăng nhập đi dcm</h1>