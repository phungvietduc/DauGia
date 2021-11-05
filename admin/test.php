<?php
include 'config/connect.php';
// include '../config/start.php';
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $bb = "SELECT * from loaisp where MaLoaiSP = " . $id;
    $aaa = mysqli_query($conn, $bb);
    if($aaa !=  null){
        $aab = $aaa['TenLoaiSP'];
    }
} ?>
<h1><?=$aaa['TenLoaiSP']?></h1>