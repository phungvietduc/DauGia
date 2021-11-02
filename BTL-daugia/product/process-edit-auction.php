<?php

include '../config/config.php';
    $id       = @$_POST['id'];
    $pname    = $_POST['pname'];
    $loaisp   = $_POST['loaisp'];
    $gia      = $_POST['gia'];
    $mota     = $_POST['mota'];
    $maphien  = $_POST['maphien'];
    $target_dir = "../img/sanpham/";
    $target_file = '';
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (isset($_POST["submit"])) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $edit = "UPDATE phiendaugia, loaihang SET TenSP = '$pname' , MaLoaiSP = '$loaisp' , HinhAnh = '$target_file' , GiaKĐ = '$gia' , MoTaSP = '$mota' WHERE phiendaugia.MaLoaiSP = loaihang.MaLoaiSP and MaPhien='$maphien' ";
        $sss = mysqli_query($conn, $edit);
        if ($sss) {
           // echo '<script language="javascript">alert("Thêm thành công"); window.location="auction.php";</script>';
            echo "y";
        } else {
            echo "Error: " . $edit . "<br>" . mysqli_error($conn);

            // echo '<script language="javascript">alert("lỗi sml"); window.location="auction.php";</script>';
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }