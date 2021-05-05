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
    <title>TYPING</title>
    <link rel="stylesheet" href="../css/dangky.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
</head>

<body>
    <?php
    include './menu.php'
    ?>
    <div class="container-tight py-6" id="register" style="height: auto !important;">
        <form class="card card-md" action="./dangky.php" method="post">
            <input type="hidden" name="csrfmiddlewaretoken" value="0mIYSKSmgKGfqN7oCb84PFcCFLcLo3FRj122ynEDVGovevY2TPt6CmwGJIabx2cy">
            <div class="card-body">
                <h2 class="mb-5 text-center">Đăng ký</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tên</label>
                            <input type="text" class="form-control" placeholder="Nhập tên của bạn" name="first_name" pattern="^[^0-9]+$" minlength="1" title="Tên không được chứa số và tối thiểu 1 kí tự" required value="<?php echo $firstname ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Họ</label>
                            <input type="text" class="form-control" placeholder="Nhập họ của bạn" name="last_name" pattern="^[^0-9]+$" minlength="1" title="Họ không được chứa số và tối thiểu 1 kí tự" required value="<?php echo $lastname ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Nhập username của bạn" name="username" pattern="[\w,./_=?-]+" minlength="5" maxlength="20" title="Username không có khoảng trắng và tối thiểu 5 kí tự tối đa 20 kí tự" required value="<?php echo $username ?>">
                    <p><?php if (isset($erro['user'])) echo $erro['user'] ?></p>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Nhập email của bạn" name="email" value="<?php echo $email ?>">
                    <p><?php if (isset($erro['email'])) echo $erro['email'] ?></p>
                </div>
                <div class="form-group">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Nhập password của bạn" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Bao gồm chữ thường, chữ hoa và số, ít nhất 8 kí tự ví dụ : Letanloc123 " required value="<?php echo $password ?>">
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Xác nhận mật khẩu
                    </label>
                    <input type="password" class="form-control" placeholder="Nhập lại password của bản" name="re_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required value="<?php echo $re_password ?>">
                    <p><?php if (isset($erro['re_password'])) echo $erro['re_password'] ?></p>
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

</body>

</html>