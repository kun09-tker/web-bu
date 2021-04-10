<?php
    require "./xuly.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TYPING</title>
    <link rel="stylesheet" href="../css/dangky.css">
    <link rel="stylesheet" href="../css/thanh-menu.css">
</head>
<body>
    <div id="body">
        <div class="menu">
            <ul>
                <li><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></li>
                <li><a href="luyentapcoban.html">Cơ bản</a></li>
                <li><a href="nangcao.html">Nâng cao</a></li>
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
        
        <div class="container-tight py-6" id="register" style="height: auto !important;">
            <form class="card card-md" action="./dangky.php" method="post">
                <input type="hidden" name="csrfmiddlewaretoken" value="0mIYSKSmgKGfqN7oCb84PFcCFLcLo3FRj122ynEDVGovevY2TPt6CmwGJIabx2cy">
                <div class="card-body">
                    <h2 class="mb-5 text-center">Đăng ký</h2>
                    <?php
                        foreach($erro as $item){
                            echo "<p>$item</p>";
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Tên</label>
                                <input type="text" class="form-control" placeholder="Nhập tên của bạn" name="first_name" pattern="^[^0-9]+$" minlength="5" title="Tên không được chứa số và tối thiểu 5 kí tự" required value="<?php echo $lastname?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Họ</label>
                                <input type="text" class="form-control" placeholder="Nhập họ của bạn"  name="last_name" pattern="^[^0-9]+$" minlength="5" title="Họ không được chứa số và tối thiểu 5 kí tự" required value="<?php echo $firstname?>">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Nhập username của bạn"  name="username" pattern="[A-Za-z0-9]+" minlength="5" title="Username chỉ chứa kí tự, số và tối thiểu 5 kí tự" required value="<?php echo $username?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>                        
                        <input type="email" class="form-control" placeholder="Nhập email của bạn" name="email" value="<?php echo $email?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mật khẩu</label>    
                        <input type="password" class="form-control" placeholder="Nhập password của bạn" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Bao gồm chữ thường, chữ hoa và số ví dụ : Letanloc123 "  required value="<?php echo $password?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            Xác nhận mật khẩu
                        </label>    
                        <input type="password" class="form-control" placeholder="Nhập lại password của bản" name="re_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required value="<?php echo $re_password?>">
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block" name="dangky">Đăng ký</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted">
                Đã có tài khoản? <a href="./dangnhap.php">Đăng nhập</a>
            </div>
        </div>

    </div>
    
</body>
</html>