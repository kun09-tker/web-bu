<?php
    use function PHPSTORM_META\type;
    $con = mysqli_connect("localhost","root","","typing");
    if (isset($_GET["lesson"]) && $_GET["lesson"] >=0 && $_GET["lesson"] < 72) {
        $lesson = "";
        $lesson = $_GET['lesson'];
        $content = $con->query("SELECT content from lesson where id= $lesson");
        $row = $content->fetch_assoc();
        $tent = $row["content"];
    } else {
        header("Location: Trangchu.html");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/training.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time()?>">
    <title>Document</title>
</head>

<body>
    <div class="menu">
        <ul>
            <li><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></li>
            <li class="active">
                <div><a href="luyentapcoban.html">Cơ bản</a></div>
            </li>
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
    <div id="shap" class="shap" >
        <div class="content">
            <div class="content__text "></div>
            <img class="content__img"></img>
            <div class="erro">Số lần gõ sai: 0</div>
            <p id='lesson' style="display:none" ><?php echo $tent ?></p>
        </div>
    </div>
    <script src='../js/jquery.js'></script>
    <script src='../js/training.js?'></script>
</body>
</html>