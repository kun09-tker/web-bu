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
    <title>TYPING</title>
    <link rel="stylesheet" href="../css/dangky.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
</head>

<body>
    <?php
    include './menu.php'
    ?>
    <div class="container-tight py-6" id="register" style="height: auto !important;">
        <form class="card card-md" action="./otp.php" method="post">
            <input type="hidden" name="csrfmiddlewaretoken" value="0mIYSKSmgKGfqN7oCb84PFcCFLcLo3FRj122ynEDVGovevY2TPt6CmwGJIabx2cy">
            <div class="card-body">
                <h2 class="mb-5 text-center">Đăng ký</h2>
                <div class="form-group">
                    <label class="form-label">Chúng tôi đã gửi mã OTP đến địa chỉ <?php echo $email ?>, hãy kiểm tra mail để kích hoạt tài khoản của bạn <br> Người gửi <strong>ah09program@gmail.com</strong></label>
                    <input type="number" class="form-control" placeholder="Nhập mã OTP của bạn" name="otp" minlength="6" title="Tối thiểu 6 số" required value="<?php echo $otp ?>">
                    <p><?php if (isset($erro['otp'])) echo $erro['otp'] ?></p>
                    <script>
                        console.log(<?php echo $code ?>);
                    </script>
                </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-block" name="active">Kích hoạt tài khoản</button>
            </div>
        </form>
    </div>
</body>