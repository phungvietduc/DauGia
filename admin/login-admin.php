<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/regis.css">
    <title>Đăng Nhập</title>
</head>

<body>
    <?php
    include('config/connect.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <form method="POST" action="process-login-admin.php">
                            <tr>
                                <td colspan="2">
                                    <h3>Đăng Nhập</h3>
                                </td>
                            </tr>
                            <div class="form-floating mb-3">
                                <input type="text" name="adname" class="form-control" id="floatingInput" placeholder="text">
                                <label for="floatingInput">Tài khoản</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="pass" class="form-control" id="floatingInput" placeholder="Password">
                                <label for="floatingInput">Mật khẩu</label>
                            </div>
                            <!-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    Remember password
                                </label>
                            </div> -->
                            <div class="d-grid mb-3">
                                <input name="btnlogin" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="submit" value="Đăng Nhập">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>