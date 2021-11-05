<?php
include '../config/config.php';
$loaih = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP";
$aa = mysqli_query($conn, "SELECT * FROM loaisp");
$bb = mysqli_query($conn, "SELECT * FROM phiendaugia");
?>
<div class="container menu">
    <ul class="list-menu">
        <?php
        while($row_danhmuc = mysqli_fetch_array($aa)){
            ?>
            <li  style="display: inline-block ;"><a href="category.php?danhmucsanpham&id=<?php echo $row_danhmuc['MaLoaiSP'] ?>"><?php echo $row_danhmuc['TenLoaiSP'] ?></a></li>
            <?php
        }
        ?>
    </ul>
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
</div>
