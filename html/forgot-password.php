<?php
session_start();
error_reporting(0);
require "../php/xuly.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
	<link rel="stylesheet" href="../css/dangnhap.css?v=<?php echo time() ?>">
	<title>TYPING</title>
</head>

<body>
	<div id="body">
		<?php
		include './menu.php'
		?>

		<div class="container-tight py-6">
			<form class="card card-md" method="post" action="./otp-forgot.php">
				<div class="card-body">
					<h2 class="mb-5 text-center">Báo quên mật khẩu</h2>
					<input type="hidden" name="csrfmiddlewaretoken" value="KZrfyg04UeX67NXeVTjIWJ0YVF38lRp73ELjeTMlzaFmVvOScxEKJqk2ZC1yuQWO">
					<div class="form-group">
						<p style="color: gray;">Vui lòng nhập email của bạn để chúng tôi gửi lại thông tin khôi phục mật khẩu qua email.</p>
						<label class="form-label">Email </label>
						<input type="text" class="form-control" placeholder="Nhập email" name="Email" id="Email">
					</div>
					<div class="form-footer">
						<button type="submit" class="btn btn-primary btn-block" name="forgotPassword">Gửi yêu cầu</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>