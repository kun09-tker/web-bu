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
	<title>Typing_Web-bu</title>
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
						<p style="color: gray;">Vui lòng kiểm tra email của bạn để nhận mã OTP để kích hoạt tài khoản.</p>
						<label class="form-label">OTP </label>
						<input type="number" class="form-control" placeholder="Nhập OTP" name="OTP" id="OTP">
						<p style="color:red"><?php if (isset($erro['otp'])) echo $erro['otp'] ?></p>
						<script>
							console.log(<?php echo $code ?>);
						</script>
					</div>
					<div class="form-footer">
						<button type="submit" class="btn btn-primary btn-block" name="forgotOTP">Xác nhận</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>