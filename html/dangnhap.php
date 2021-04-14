<?php
	require "../php/xuly.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/thanh-menu.css">
    <link rel="stylesheet" href="../css/dangnhap.css">
    <title>TYPING</title>
</head>
<body>
    <div id="body">
        <div class="menu">
            <ul>
                <li><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></li>
                <li><a href="luyentapcoban.php">Cơ bản</a></li>
                <li><a href="nangcao.php">Nâng cao</a></li>
                <li><a href="./kiemtratocdo.php">Kiểm tra tốc độ</a></li>
                <li><a href="">Trò chơi</a></li>
                <li>
                    <div class="Account">
                        <div class="Account_btn">Tài khoản</div>
                        <div class="Account_dropdown">
                            <div class="box"><a href="dangnhap.php"><img src="../public/sign-in.png">&nbsp Đăng nhập</a></div>
                            <div class="box"><a href="dangky.php"><img src="../public/add_profile_user_icon_148635.png">&nbsp Đăng ký</a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container-tight py-6">
			<form class="card card-md" method="post">
				<div class="card-body">
					<h2 class="mb-5 text-center">Đăng nhập</h2>
					
					<div class="form-group">
						<label class="form-label">Email hoặc Username</label>
						<input type="text" class="form-control" placeholder="Nhập email hoặc username" name="email_or_user"  value="<?php echo $email_or_username?>"> 
					</div>
					<div class="form-group">
						<label class="form-label nav">
							Mật khẩu
							<a href="/user/forgot-password/" class="float-right small">Quên mật khẩu?</a>
						</label>
						<input type="password" class="form-control" placeholder="Password" autocomplete="off"
							   name="password" value="<?php echo $password ?>">
					</div>
					<div class="form-group">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="remember">
							<span class="custom-control-label">Ghi nhớ đăng nhập</span>
						</label>
					</div>
					
					<div class="form-footer">
						<button type="submit" class="btn btn-primary btn-block" name="dangnhap">Đăng nhập</button>
					</div>
				</div>
			</form>
			<div class="text-center text-muted">
				Chưa có tài khoản? <a href="./dangky.php">Đăng ký</a>
			</div>
		</div>
    </div>
</body>
</html>