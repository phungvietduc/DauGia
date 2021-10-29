<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <title>Quản lí ADMIN</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .them a {
        border: 1px solid red;
        margin: 15px;
        padding: 15px;
        text-decoration: none;
    }

    .add {
        margin-top: 40px;
    }
</style>

<body>
    <div class="container">
        <div class="row add">
            <div class="col-md-10"></div>
            <div class="col-md-2 them">
                <a href="addmember.php"><i class="bi bi-person-plus-fill"></i>Thêm</a>
            </div>

        </div>
        <tr>
            <td colspan="2">
                <h3>Thông tin người dùng</h3>
                <input type="hidden" name="id" value="">
            </td>
        </tr>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>ID </th>
                        <th>Họ và Tên</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Số cmnd</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    <?php
                    include('../config/connect.php');
                    $sql = "SELECT * FROM nguoidung";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>' . $row["Id"] . '</td>';
                            echo '<td>' . $row["HoTen"] . '</td>';
                            echo '<td>' . $row["DiaChi"] . '</td>';
                            echo '<td>' . $row["Email"] . '</td>';
                            echo '<td>' . $row["Sdt"] . '</td>';
                            echo '<td>' . $row["cmnd"] . '</td>';
                            echo '<td>' . $row["TenDangNhap"] . '</td>';
                            echo '<td>' . $row["MatKhau"] . '</td>';
                            echo '<td><a href="updatemember.php?id=' . $row["Id"] . '" ><i class="bi bi-pencil-square"></i>Sửa</a></td>';
                            echo '<td><a href="deletemember.php?id=' . $row["Id"] . '" ><i class="bi bi-trash-fill"></i>Xóa</a></td>';
                            echo '</tr>';
                            echo '<br>';
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
                </table>
            </div>
        </div>
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