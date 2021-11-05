<?php
include '../config/session.php';
include '../config/start.php';
include '../config/config.php';
include '../config/header.php';
include '../config/menu.php';
$id = $_GET['id'];
$queryzi = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP and MaPhien=$id";
$result = mysqli_query($conn, $queryzi);
$loaih = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP order by phiendaugia.MaPhien desc limit 0,5";
$users  = "SELECT * from user";
$cc = mysqli_query($conn, $users);
$aa = mysqli_query($conn, "SELECT * FROM loaisp");
$bb = mysqli_query($conn, "SELECT * FROM phiendaugia");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/countdown.css">
</head>

<body>
    <div class="chitiet" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                    <?php foreach ($result as $key => $value) { ?>
                        <br><br>
                        <p style="text-algin: center; margin-top: 20px"><img src="<?php echo $value['HinhAnh'] ?>" alt="" width="80%" ; height="200px"></p>
                        <hr>
                        <h5 style="color: rgb(0, 110, 255);">Mô tả sản phẩm</h5>
                        <hr>
                        <p><?php echo $value['MoTaSP'] ?></p>
                    <?php }
                    ?>
                </div>
                <div class="col-md-8">
                    <h3 style="text-align: center; color: rgb(0, 110, 255)">Chi tiết sản phẩm: <?php echo $value['TenSP'] ?></h3>
                    <h4 style="margin-top: 30px;">Giá khởi điểm: <?php echo number_format($value['GiaKĐ']) ?> VND</h4>
                    <h4 style="margin-top: 30px;">Thời gian còn lại</h4>
                    <br>
                    <p>
                        <div id="countdown">
                            <div id='tiles'></div>
                                <div class="labels">
                                    <li>Days</li>
                                    <li>Hours</li>
                                    <li>Mins</li>
                                    <li>Secs</li>
                                </div>
                            </div>      
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <hr style="height: 3px;" />
    </div>
    <?php
    echo "tên user ". $_SESSION["user"]. ".";
    ?>
    <script src="./countdown.js"></script>
</body>

</html>