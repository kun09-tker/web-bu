<?php
session_start();
error_reporting(0);
require "../php/EditProfile.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing_Web-bu</title>
    <link rel="stylesheet" href="../css/dangky.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
</head>

<body>
    <?php
    include './menu.php'
    ?>
    <div class="container-tight py-6" id="register" style="height: auto !important;">
        <form class="card card-md" method="post">
            <input type="hidden" name="csrfmiddlewaretoken" value="0mIYSKSmgKGfqN7oCb84PFcCFLcLo3FRj122ynEDVGovevY2TPt6CmwGJIabx2cy">
            <div class="card-body">
                <h2 class="mb-5 text-center">Chỉnh sửa thông tin cá nhân</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tên</label>
                            <input type="text" class="form-control" placeholder="Nhập tên của bạn" name="first_name" pattern="^[^0-9]+$" title="Tên không được chứa số và tối thiểu 1 kí tự" required value="<?php echo $first_name ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Họ</label>
                            <input type="text" class="form-control" placeholder="Nhập họ của bạn" name="last_name" pattern="^[^0-9]+$" title="Họ không được chứa số và tối thiểu 1 kí tự" required value="<?php echo $last_name ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" pattern="[0-9]{10}" name="tel" title="Số điện thoại phải 10 số" required value="<?php echo $tel ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Năm sinh</label>
                            <input type="date" class="form-control" placeholder="01/01/1991" name="bir" pattern="^[^0-9]+$" title="Họ không được chứa số và tối thiểu 1 kí tự" required value="<?php echo $bir ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" placeholder="Nhập địa chỉ của bạn" name="address" value="<?php echo $address ?>">
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" name="edit">Lưu thông tin</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>