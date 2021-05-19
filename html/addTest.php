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
        <form class="card card-md" action="" method="post">
            <input type="hidden" name="csrfmiddlewaretoken" value="0mIYSKSmgKGfqN7oCb84PFcCFLcLo3FRj122ynEDVGovevY2TPt6CmwGJIabx2cy">
            <div class="card-body">
                <h2 class="mb-5 text-center">Đóng góp bài tập</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tên bài tập</label>
                            <input type="text" class="form-control" placeholder="Nhập tên bài tập" name="name" pattern="^[^0-9]+$" minlength="1" maxlength="10" title="Tên không được chứa số và tối thiểu 1 kí tự" required value="<?php echo $firstname ?>">
                            <p style="color: red;"><?php if (isset($erro['name'])) echo $erro['name'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Nội dung</label>
                    <textarea class="content" name="content" cols="52" rows="5" style="padding: 10px 10px 10px 10px;overflow-y: scroll;" minlength="100" maxlength="5000" title="Nội dụng phải có số lượng kí tự trong khoảng (100 - 5000) bao gồm cả 'dấu cách' " required value="<?php echo $lastname ?>"></textarea>
                    <p style="color: red;"><?php if (isset($erro['content'])) echo $erro['content'] ?></p>
                    <label>Tổng số kí tự: <label class="size">0</label>/5000</label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" name="dong_gop">Đóng góp</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    const Content = document.querySelector(".content");
    Content.oninput = () => {
        var count = Content.value.length;
        const size = document.querySelector(".size").innerHTML = count;
    }
</script>

</html>