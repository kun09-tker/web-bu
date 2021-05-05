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
    <link rel="stylesheet" type="text/css" href="../css/style.css?v=<?php echo time() ?>">
    <title>TYPING</title>
</head>

<body>
    <header>
        <div class="logo-box">
            <img src="" class="logo" alt="logo">
        </div>
        <div class="text-box">
            <h3 class="heading-primary">
                <span class="heading-primary-main">TYPING</span>
                <span class="heading-primary-sub">Nơi bạn trau dồi kỹ năng gõ phím</span>
            </h3>
            <a href="luyentapcoban.php" class="btn btn-white btn-animated">Bắt Đầu</a>
        </div>
    </header>
</body>
<script>
    <?php
    $count = $_SESSION["count"];
    $_SESSION["count"] = NULL;
    if ($count > 4) {
    ?>
        alert("Mã OTP đã hết hạn !");
    <?php
    }
    ?>
</script>

</html>