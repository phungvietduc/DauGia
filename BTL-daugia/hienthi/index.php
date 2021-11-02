<?php
include '../config/config.php';
include '../config/start.php';
include '../config/menu.php';
$query = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP ";
$result = mysqli_query($conn, $query);
$loaih = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP order by phiendaugia.updated_at desc limit 0,5";
$aa = mysqli_query($conn, "SELECT * FROM loaisp");
$bb = mysqli_query($conn, "SELECT * FROM phiendaugia");
?>
?>
<h1 style="text-align:center; margin-top: 20px ; margin-bottom:20px">Sản phẩm đang đấu giá</h1>
  <div class="row" style="border: 1px solid grey;">
    <?php
    foreach ($bb as $item) {
      echo '
    <div class="col-md-3 col-6">
    <img src=" ' . $item['HinhAnh'] . ' " alt="" style="width:100% ; height:300px">
    <p style="text-align:center">' . $item['TenSP'] . '</p>
    <p style="text-align:center">' . number_format($item['GiaKĐ']) . ' VND</p>
    </div>';
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

