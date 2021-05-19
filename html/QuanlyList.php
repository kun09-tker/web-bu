<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Typing_Web-bu</title>
    <link rel="stylesheet" type="text/css" href="../css/thanh-menu.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="../css/QuanlyList.css?v=<?php echo time() ?>">
</head>

<body>
    <div class="menu">
        <ul>
            <li>
                <a href="./Trangchu.php"><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></a>
            </li>
            <li><a class="none" href="./Quanly.php">Quản lý người dùng</a></li>
            <li><a class="none" href="./QuanlyList.php">Quản lý bài đóng góp</a></li>
        </ul>
    </div>

    <div class="ranking">
        <div class="search"><label>Tìm kiếm: </label><input class="wordSearch" type="text" style="margin-top: -5px; margin-left: 10px;" placeholder="Nhập thông tin (id_user, tên bài, 1 phần nội dung) " size="40"><button class="btn-search">Tìm</button></div>
        <div class="quiz-window-header">
            <div class="quiz-window-title">Danh sách đóng góp</div>
        </div>
        <div class="quiz-window-body">
            <div class="gui-window-awards">
            </div>
        </div>
    </div>
</body>
<script>
    let menu = document.querySelectorAll('.none');
    for (let i = 0; i < menu.length; i++) {
        if (i != 1) {
            menu[i].classList.add('none');
            menu[i].classList.remove('active');
        } else {
            menu[i].classList.add('active');
            menu[i].classList.remove('none');
        }
    }
</script>
<script src='../js/jquery.js?v=<?php echo time() ?>'></script>
<script src='../js/QuanlyList.js?v=<?php echo time() ?>'></script>

</html>