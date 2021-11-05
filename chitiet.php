<?php
include '../config/session.php';
include '../config/start.php';
include '../config/config.php';
include '../config/header.php';
include '../config/menu.php';
$id=$_GET['id'];
$queryzi = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP and MaPhien=$id";
$result = mysqli_query($conn, $queryzi);
$loaih = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP order by phiendaugia.MaPhien desc limit 0,5";
$users  = "SELECT * from user";
$cc= mysqli_query($conn,$users);
$aa = mysqli_query($conn, "SELECT * FROM loaisp");
$bb = mysqli_query($conn, "SELECT * FROM phiendaugia");
?>
<div class="dev">
<div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td>Tên sản phẩm</td>
                                    <td>Loại sản phẩm</td>
                                    <td>Hình ảnh</td>
                                    <td>Giá khởi điểm</td>
                                    <td>Mô tả</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $value['TenSP'] ?></td>
                                        <td><?php echo $value['TenLoaiSP'] ?></td>
                                        <td><img src="<?php echo $value['HinhAnh'] ?>" alt="" width="50px"></td>
                                        <td><?php echo $value['GiaKĐ'] ?></td>
                                        <td><?php echo $value['MoTaSP'] ?></td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
</div>

