<?php
 	session_start();
	//Gọi file connection.php ở bài trước
	require_once("config/connect.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btnlogin"])) {
		// lấy thông tin người dùng
		$username = $_POST["adname"];
		$password = $_POST["pass"];
		// làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		// mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from qlytaikhoanadmin where TenDangNhap = '$username' and MatKhau = '$password' ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
  			// output data of each row
  			$row = mysqli_fetch_assoc($result);
			  if($row['adminlv'] == 4){
				$_SESSION['adname'] = $username;
				header('Location:index.php');
			  }elseif($row['adminlv'] == 3){
				$_SESSION['adname'] = $username;
				header('Location:manage-items/index.php');
			  }elseif($row['adminlv'] == 2){
				$_SESSION['adname'] = $username;
				header('Location:manage-member/index.php');
			  }elseif($row['adminlv'] == 1){
				$_SESSION['adname'] = $username;
				header('Location:manage-auction/index.php');
			  }
			  
			} else {
  			header("location:login-admin.php");
			}

				mysqli_close($conn);
                
		}
	}
