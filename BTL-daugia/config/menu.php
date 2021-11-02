<?php
include 'config.php';
$loaih = "SELECT * from phiendaugia,loaisp where phiendaugia.MaLoaiSP = loaisp.MaLoaiSP order by phiendaugia.updated_at desc limit 0,5";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MIMI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../hienthi/proauction.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../product/auction.php">Đấu giá của tôi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Giỏ hàng</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" data-toggle="dropdown">
              Tôi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Cá nhân</a></li>
              <li><a class="dropdown-item" href="#">Ví</a></li>
              <li><a class="dropdown-item" href="#">Đơn hàng của tôi</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="bg-dark" style="margin-top: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php
          foreach ($aa as $item) {
            echo '<li class="nav-item " style="display: inline-block ;"><a class="nav-link text-light" href="category.php?id=' . $item['MaLoaiSP'] . '">' . $item['TenLoaiSP'] . '</a></li>';
          } ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>