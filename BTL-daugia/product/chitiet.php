<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <?php
  include('../config/session.php');
  include '../config/start.php';
  include '../config/config.php';
  include '../config/header.php';
  include '../config/menu.php';

  $id = $_GET['id'];

  $sql = "SELECT * FROM phiendaugia WHERE MaPhien = $id";

  $res = mysqli_query($conn, $sql);
  if ($res) {
    $row = mysqli_fetch_assoc($res);
    $tensp = $row['TenSP'];
    $img = $row['HinhAnh'];
    $gia = $row['GiaKĐ'];
    $loai = $row['MoTaSP'];
  }
  ?>
  <div class="container" style="padding:60px">
    <div class="name">
      <h2>Chi tiết sản phẩm</h2>
    </div>
    <div class="row">
      <div class="col-md-5">
        <tr>
          <td><img src="<?php echo $value['HinhAnh'] ?>" alt="" width="100px"></td>

      </div>
      <div class="col-md-7">
        <h1> Tên sản phẩm</h1>
        <div class="form-group" style="width: 400px">
          <label for="exampleInputEmail1">Giá khởi điểm</label>
          <input name="datgia" type="text" class="form-control" value="<?php echo $gia ?>">
        </div>
        <div class="form-group" style="width: 400px; ">
          <label for="exampleInputEmail1">Đặt giá</label>
          <input name="datgia" type="text" class="form-control">
        </div><br>
        <button style="background-color:#1ab7ea; width:150px; height:50px ">Đấu giá sản phẩm</button>
      </div>
    </div>
    <div class="class-product-mota" style='padding:50px'>
      <div class="mota-header">
        <h4>Mô tả sản phẩm</h4>
      </div>
      <div class="mota-body">
        <p><?php echo $loai ?></p>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>