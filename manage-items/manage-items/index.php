<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Danh sách sản phẩm</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách sản phẩm</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>STT</th>
                            <th>Mã SP</th>
                            <th>Tên SP</th>
                            <th>Hình ảnh SP</th>
                            <th>Thông tin SP</th>
                            <th>Giá SP</th>
                            <th>Số Lượng</th>
                            <th>Loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../config/connect.php');
                        $sql = "SELECT * FROM sanpham inner join loaisp on sanpham.MaLoaiSP = loaisp.MaLoaiSP";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['MaSP'] ?></td>
                                    <td><?php echo $row['TenSP'] ?></td>
                                    <td><img style="width: 100px" src="../../img/<?php echo $row['image'] ?>"></td>
                                    <td><?php echo $row['ThongTinSP'] ?></td>
                                    <td><?php echo $row['GiaSP'] ?></td>
                                    <td><?php echo $row['SoLuong'] ?></td>
                                    <td><?php echo $row['TenLoaiSP'] ?></td>
                                    <td><a style="text-decoration: none" href="update-items.php?id=<?php echo $row['MaSP'];?>"><i class="bi bi-pencil-square"></i>Sửa</a></td>
                                    <td><a onclick="return Del('<?php echo $row['TenSP'];?>')" style="text-decoration: none" href="delete-items.php?id=<?php echo $row['MaSP'];?>"><i class="bi bi-trash-fill"></i>Xóa</a></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "0 results";
                        }

                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="add-items.php">Thêm mới</a>
            </div>
        </div>
    </div>
    <script>
        function Del(name){
            return confirm("Bạn có chắc muốn xóa sản phẩm: "+ name +" ?")
        }
    </script>
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