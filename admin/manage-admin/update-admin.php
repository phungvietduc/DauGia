<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sửa Admin</title>
</head>

<body>
<?php include('../bridge/check-login-admin.php');?>
<?php
    include('../config/connect.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM qlytaikhoanadmin WHERE idad = $id";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        $row = mysqli_fetch_assoc($res);
        $hoten = $row['HoTen'];
        $tk= $row['TenDangNhap'];
        $mk = $row['MatKhau'];
        $lv = $row['adminlv'];
        $cv = $row['Work'];
    }
    ?>
    <div class="container-fluid">
        <div class="card">
            <div  class="card-header">
                <h2>Sửa thông tin</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="process-update-admin.php" method="POST">

                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input name="id" type="text" class="form-control" id="exampleInputName" value="<?php echo $_GET['id'] ?>" hidden>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ và tên</label>
                                <input name="hoten" type="text" class="form-control" id="exampleInputName" value="<?php echo $hoten ?>">
                                <div class="form-group">
                                    <label for="exampleInput">Tên đăng nhập</label>
                                    <input name="tk" type="text" class="form-control" id="exampleInput" value="<?php  echo $tk ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Mật Khẩu</label>
                                    <input name="pass" type="text" class="form-control" id="exampleInput" value="<?php echo $mk ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Admin level</label>
                                    <input name="lv" type="text" class="form-control" id="exampleInput" value="<?php echo $lv ?>">
                                </div>
                                <br>
                                <tr>
                                    <td class="form-group">Công Việc</td>
                                    <td>
                                        <select id="permission" name="cv">
                                            <option value=""><?php echo $cv ?></option>
                                            <option value="Admin quản lí sản phẩm">Admin quản lí sản phẩm</option>
                                            <option value="Admin quản lí người dùng">Admin quản lí người dùng</option>
                                            <option value="Admin quản lí phiên đấu giá">Admin quản lí phiên đấu giá</option>
                                            <option value="Admin quản lí hệ thống">Admin quản lí hệ thống</option>
                                        </select>
                                    </td>
                                </tr>
                                <br>
                                <br>
                                <button name="btsua" type="submit" class="btn btn-primary" style="margin-top:15px">Sửa</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>