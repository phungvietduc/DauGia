<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Chỉnh sửa sản phẩm</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <?php
    include('../config/connect.php');
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Chỉnh sửa sản phẩm</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="process-update-items.php" method="POST">
                            <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Id admin</label>
                        <input name="id" type="number" class="form-control" id="exampleInputName">
                    </div> -->
                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input name="id" type="text" class="form-control" id="exampleInputName" value="<?php echo $_GET['id'] ?>" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input name="name" type="text" class="form-control" id="exampleInputName">
                            </div><br>
                            <div class="form-group">
                                <label for="">Ảnh sản phẩm: </label><br>
                                <input name="diachi" type="file">
                            </div><br>
                            <div class="form-group">
                                <label for="exampleInput">Giá sản phẩm</label>
                                <input name="gia" type="text" class="form-control" id="exampleInput">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Thông tin sản phẩm</label>
                                <input name="ttsp" type="text" class="form-control" id="exampleInput">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Số lượng</label>
                                <input name="sl" type="int" class="form-control" id="exampleInput">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Loại sản phẩm</label>
                                <select class="form-select" name="loaisp">
                                    <option value="NULL">Không thuộc loại nào</option>
                                    <?php
                                    $sql = "SELECT * FROM loaisp";
                                    $res = mysqli_query($conn, $sql);
                                    $count = mysqli_num_rows($res);

                                    if ($count > 0) {
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            $madv = $row['MaLoaiSP'];
                                            $tendv = $row['TenLoaiSP'];
                                    ?>
                                            <option value="<?= $madv ?>"><?= $tendv ?></option>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <option value="0">No Found</option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div><br>
                            <button name="btsua" type="submit" class="btn btn-primary" style="margin-top:15px">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>

</html>