<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí thành viên</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="register">
        <h3>Đăng kí đi dm</h3>
        <form action="process-register.php" method="post">
            <input type="text" name="username" placeholder="Tên đăng nhập">
            <br>
            <input type="email" name="email" placeholder="Nhập email của bạn">
            <br>
            <input type="password" name="password" placeholder="Nhập mật khẩu của bạn">
            <br>
            <input type="password" name="repassword" placeholder="Nhập lại mật khẩu">
            <br>
            <div class="div_left">
                <button type="submit" name="submit">Đăng kí</button>
            </div>
        </form>
        <div class="div_right">
            <a href="login.php">
                <button type="submit" name="submit">Quay lại</button>
            </a>
        </div>
        <br>
        <br>
        <p>
            Bằng việc đăng kí, bạn đã đồng ý với chúng tôi về
            <a href="#">Điều khoản và dịch vụ</a> & <a href="#">Chính sách bảo mật</a>
        </p>


    </div>
    <!-- <h1>Đăng kí ngay!!</h1>
    <form action="process-register.php" method="POST">
        <table>
            <tr>
                <td>Tên đăng nhâp</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu</td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Đăng kí</button>
                </td>
            </tr>
        </table>

    </form> -->
</body>

</html>