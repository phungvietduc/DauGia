<?php

include '../config/config.php';
$pname    = $_POST['pname'];
$loaisp   = $_POST['loaisp'];
$gia      = $_POST['gia'];
$mota     = $_POST['mota'];

if (isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $file_name = '';
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'], 'img/' . $file_name);
}
$upp = "INSERT INTO phiendaugia (TenSP,TenLoaiSP,HinhAnh,GiaKĐ,MoTaSP) VALUES ('$pname','$loaisp','$file_name','$gia','$mota)";
$dm = mysqli_query($conn, $upp);
if($dm){
    echo "jas";
}else{
    echo "lỗi";
}
