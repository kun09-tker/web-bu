<?php
require "../php/xuly.php";
?>
<div class="menu">
    <ul>
        <li>
            <a href=<?php if (isset($_SESSION["userInWeb"]) && ($_SESSION["userInWeb"] == 42 || $_SESSION["userInWeb"] == 48)) echo "./Quanly.php";
                    else echo "./Trangchu.php" ?>><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></a>
        </li>
        <li><a class="none" href="luyentapcoban.php">Cơ bản</a></li>
        <li><a class="none" href="nangcao.php">Nâng cao</a></li>
        <li><a class="none" href="kiemtratocdo.php">Kiểm tra tốc độ</a></li>
        <li><a class="none" href="trochoi.php">Trò chơi</a></li>
        <li>
            <div class="Account">
                <div class="Account_btn"><img src="../public/avt/0.jpg" class="avt"><label class="UserName" style="margin-left: 2px;"> Tài khoản</label></div>
                <div class="Account_dropdown">
                    <a class="account_dropdown-item box notUser" href="./dangnhap.php">
                        <div class="item__icon">
                            <img src="../public/sign-in.png">
                        </div>
                        <div class="item__title">
                            <label>Đăng nhập</label>
                        </div>
                    </a>
                    <a class="account_dropdown-item box notUser" href="./dangky.php">
                        <div class="item__icon">
                            <img src="../public/add_profile_user_icon_148635.png">
                        </div>
                        <div class="item__title">
                            <label>Đăng ký</label>
                        </div>
                    </a>
                    <a class="account_dropdown-item box User" style="display:none" href="./profile2.php">
                        <div class="item__icon">
                            <img src="../public/home.png">
                        </div>
                        <div class="item__title">
                            <label>Trang cá nhân</label>
                        </div>
                    </a>
                    <a class="account_dropdown-item box User" style="display:none" href="./out.php">
                        <div class="item__icon">
                            <img src="../public/signout.png">
                        </div>
                        <div class="item__title">
                            <label>Đăng xuất</label>
                        </div>
                    </a>



                    <!-- <div class="box notUser" ><a href="dangnhap.php"><img src="../public/sign-in.png">&nbsp Đăng nhập</a></div>
                    <div class="box notUser" ><a href="dangky.php"><img src="../public/add_profile_user_icon_148635.png">&nbsp Đăng ký</a></div>
                    <div class="box User " style="display:none"><a href="profile.php"><img src="../public/home.png">&nbsp Trang cá nhân</a></div>
                    <div class="box User" style="display:none">
                        <a type="submit" class="SignOut" href="./out.php"><img src="../public/signout.png">&nbsp Đăng xuất</a>
                    </div> -->
                </div>
            </div>
        </li>
    </ul>
</div>
<?php
if (isset($_SESSION["userInWeb"])) {
    $id = $_SESSION["userInWeb"];
    $user = $con->query("SELECT* From user where id = '$id'");
    $user = mysqli_fetch_assoc($user);
    $myfile = fopen($user["avt"], "r") or die("Unable to open file!");
?>
    <p class="username" style="display: none;"><?php echo $user["username"] ?></p>
    <p class="userAvt" style="display: none;"><?php echo fread($myfile, filesize($user["avt"])) ?></p>
<?php
    fclose($myfile);
    echo
    '
    <script>
        document.querySelectorAll(".User")[0].style.display = "flex";
        document.querySelectorAll(".notUser")[0].style.display = "none";
        document.querySelectorAll(".User")[1].style.display = "flex";
        document.querySelectorAll(".notUser")[1].style.display = "none";
        document.querySelector(".UserName").innerHTML = document.querySelector(".username").textContent;
        document.querySelector(".avt").setAttribute("src",document.querySelector(".userAvt").textContent);
    </script>
    ';
}
?>