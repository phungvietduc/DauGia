<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đăng nhập </title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login">
        <h3>Welcome to Chợ Trời</h3>
        <form action="process-login.php" method="POST">
            <input type="text" placeholder="username" name="username">
            <br>
            <input type="password" placeholder="password" name="password">
            <br>
            <div class="check">
                <input type="checkbox">
                Nhớ tài khoản
            </div>
            <br>
            <button type="submit" name="submit" style="background-color: blue;">Đăng nhập</button>
            <a href="#">
                Quên mật khẩu?
            </a>
            <br>
            <a></a>
            <br>
            <hr  width="80%" size="3px" align="center" color="grey"/>
        </form>
        <form action="register.php" method="POST" >
            <button type="submit" name="submit" style="background-color: blue;">Tạo tài khoản</button>
        </form>
    </div>

</body>

</html>