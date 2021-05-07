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
            <form class="card card-md" method="post" action="./changePassword.php">
                <div class="card-body">
                    <h2 class="mb-5 text-center">Báo quên mật khẩu</h2>
                    <input type="hidden" name="csrfmiddlewaretoken" value="KZrfyg04UeX67NXeVTjIWJ0YVF38lRp73ELjeTMlzaFmVvOScxEKJqk2ZC1yuQWO">
                    <div class="form-group">
                        <label class="form-label">Mật khẩu mới</label>
                        <input type="password" class="form-control" placeholder="Nhập password của bạn" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Bao gồm chữ thường, chữ hoa và số, ít nhất 8 kí tự ví dụ : Letanloc123 " required value="<?php echo $password ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            Xác nhận mật khẩu mới
                        </label>
                        <input type="password" class="form-control" placeholder="Nhập lại password của bản" name="re_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required value="<?php echo $re_password ?>">
                        <p><?php if (isset($erro['re_password'])) echo $erro['re_password'] ?></p>
                    </div <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" name="changePassword">Cập nhật lại mật khẩu</button>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>