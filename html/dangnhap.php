<?php
session_start();
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
			<form class="card card-md" method="post" action="">
				<div class="card-body">
					<h2 class="mb-5 text-center">Đăng nhập</h2>
					<input type="hidden" name="csrfmiddlewaretoken" value="KZrfyg04UeX67NXeVTjIWJ0YVF38lRp73ELjeTMlzaFmVvOScxEKJqk2ZC1yuQWO">
					<div class="form-group">
						<label class="form-label">Email hoặc Username</label>
						<input type="text" class="form-control" placeholder="Nhập email hoặc username" name="emailOrUser" id="emailOrUser">
					</div>
					<div class="form-group">
						<label class="form-label nav">
							Mật khẩu
							<a href="./forgot-password.php" class="float-right small">Quên mật khẩu?</a>
						</label>
						<input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password" id="password">
						<div class="erro">
							Thông tin đăng nhập không chính xác
						</div>
						<?php
						if (!$check) echo
						"<script>
							document.querySelector('.erro').style.display = 'flex';
						</script>";
						?>
					</div>
					<div class="form-footer">
						<button type="submit" class="btn btn-primary btn-block" name="dangnhap">Đăng nhập</button>

					</div>
				</div>
			</form>
			<div class="text-center text-muted">
				Chưa có tài khoản?
				<a href="./dangky.php">Đăng ký</a>
			</div>
		</div>
	</div>
</body>

</html>