<?php
include '../config/config.php';

$loaih = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP and loaisp.MaLoaiSP= '$_GET[id]' ";
$aa = mysqli_query($conn, "SELECT * FROM loaisp");
$bb = mysqli_query($conn, "SELECT * FROM phiendaugia");
?>
<ul>
    <?php
    while ($loaih = mysqli_fetch_array($aa)){
    ?>
    <li>
        <a href="">
            <img src="../img/sanpham/Koala.jpg " alt="" style="width:25% ; height:100px">
            <p style="text-align:center">Sản phẩm'</p>
            <p style="text-align:center">Khởi điểm: 8,000 VND</p>
        </a>
    </li>
    <?php
    }
    ?>
</ul>