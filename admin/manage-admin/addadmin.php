<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Thêm</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="process-addadmin.php" method="POST">
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Id admin</label>
                        <input name="id" type="number" class="form-control" id="exampleInputName">
                    </div> -->
                    <tr>
                            <td colspan="2">
                                <h3>Thêm Admin</h3>
                                <input type="hidden" name="id" value="">
                            </td>
                        </tr>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Họ và Tên</label>
                        <input name="hoten" type="text" class="form-control" id="exampleInputName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Tên đăng nhập</label>
                        <input name="tk" type="text" class="form-control" id="exampleInput">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Mật khẩu</label>
                        <input name="pass" type="text" class="form-control" id="exampleInput">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Admin level</label>
                        <input name="lv" type="number" class="form-control" id="exampleInput">
                    </div>
                    <br>
                    <tr>
                        <td class="form-group">Công Việc</td>
                        <td>
                            <select id="permission" name="cv">
                                <option value="-1"></option>
                                <option value="Admin quản lí sản phẩm">Admin quản lí sản phẩm</option>
                                <option value="Admin quản lí người dùng">Admin quản lí người dùng</option>
                                <option value="Admin quản lí phiên đấu giá">Admin quản lí phiên đấu giá</option>
                            </select>
                        </td>
                    </tr>
                    <br>
                    <br>
                    <button name="btthem" type="submit" class="btn btn-primary" style="margin-top:15px">Thêm</button>
                </form>
            </div>

        </div>
        <div class="col-md-3"></div>
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