<?php
include '../config/header.php';
include '../config/config.php';
include '../config/start.php';
include '../config/menu.php';
$query = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP ";
$result = mysqli_query($conn, $query);
$loaih = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP order by phiendaugia.MaPhien desc limit 0,5";
$aa = mysqli_query($conn, "SELECT * FROM loaisp");
$bb = mysqli_query($conn, "SELECT * FROM phiendaugia");
?>

<body style="background-color: aquamarine;">
  <h1 style="text-align:center; margin-top: 20px ; margin-bottom:20px">Sản phẩm đang đấu giá</h1>
  <div class="row">
    <?php
    foreach ($bb as $item) {
      echo '
    <div class="col-md-3 col-6" style = "border: 1px">
      <img src=" ' . $item['HinhAnh'] . ' " alt="" style="width:80% ; height:300px; text-align: center; margin-left: 30px">
      <p style="text-align:center">Sản phẩm: ' . $item['TenSP'] . '</p>
      <p style="text-align:center">Khởi điểm: ' . number_format($item['GiaKĐ']) . ',000 VND</p>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <a style="text-align:center; color:red; border: 5px ">Sắp hết giờ !!!</a>
        </div>
        <div class="col-md-4">
            <a style=" text-decoration: none ; color: white;" href="chitiet.php?id='. $item['MaPhien'] .'">
              <button style="background-color:blue; border-radius: 5px;color: white"> Đấu giá</button>
            </a>
          </div>
        <div class="col-md-2"></div>
      </div>
    </div>';
    }
    
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>