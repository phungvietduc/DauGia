<?php

include '../config/config.php';
if (isset($_POST['submit']) && $_POST['pname'] != '' &&   $_POST['loaisp'] != '' && $_POST['gia'] != '' && $_POST['mota'] != '' && $_FILES['image'] != '') {
    $pname    = $_POST['pname'];
    $loaisp   = $_POST['loaisp'];
    $gia      = $_POST['gia'];
    $mota     = $_POST['mota'];
    $maphien  = $_POST['maphien'];
    $target_dir = "../img/sanpham/";
    $target_file = '';
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $add = "INSERT INTO phiendaugia (TenSP,MaLoaiSP,HinhAnh,GiaKĐ,MoTaSP) VALUES ('$pname','$loaisp','$target_file','$gia','$mota')";
        $sss = mysqli_query($conn, $add);
        if ($sss) {
            echo '<script language="javascript">alert("Thêm thành công"); window.location="auction.php";</script>';
        } else {
            echo "Error: " . $add . "<br>" . mysqli_error($conn);

            // echo '<script language="javascript">alert("lỗi sml"); window.location="auction.php";</script>';
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}else{
    echo '<script language="javascript">alert("Thêm  không thành công"); window.location="auction.php";</script>';
}
