<?php
session_start();
//session_destroy();
require "../php/xuly.php";
?>
<div class="menu">
    <ul>
        <li><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></li>
        <li><a class="none" href="luyentapcoban.php">Cơ bản</a></li>
        <li><a class="none" href="nangcao.php">Nâng cao</a></li>
        <li><a class="none" href="kiemtratocdo.php">Kiểm tra tốc độ</a></li>
        <li><a class="none" href="trochoi.php">Trò chơi</a></li>
        <li>
            <div class="Account">
                <div class="Account_btn">Tài khoản</div>
                <div class="Account_dropdown">
                    <div class="box notUser" style="display:block"><a href="dangnhap.php"><img src="../public/sign-in.png">&nbsp Đăng nhập</a></div>
                    <div class="box notUser" style="display:block"><a href="dangky.php"><img src="../public/add_profile_user_icon_148635.png">&nbsp Đăng ký</a></div>
                    <div class="box User " style="display:none"><a href="profile.php"><img src="../public/home.png">&nbsp Trang cá nhân</a></div>
                    <div class="box User" style="display:none">
                        <a type="submit" class="SignOut" href="./out.php"><img src="../public/signout.png">&nbsp Đăng xuất</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<?php
if (isset($_SESSION["userInWeb"])) {
    $id = $_SESSION["userInWeb"];
    $user = $con->query("SELECT username From user where id = '$id'");
    $user = mysqli_fetch_assoc($user);
?>
    <p class="username" style="display:block"><?php echo $user["username"] ?></p>
<?php
    echo
    '
    <script>
        document.querySelectorAll(".User")[0].style.display = "flex";
        document.querySelectorAll(".notUser")[0].style.display = "none";
        document.querySelectorAll(".User")[1].style.display = "flex";
        document.querySelectorAll(".notUser")[1].style.display = "none";
        document.querySelector(".Account_btn").innerHTML = document.querySelector(".username").textContent;
    </script>
    ';
}
?>