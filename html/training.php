<?php

use function PHPSTORM_META\type;
$lesson = ["fj","f j","dk","sl","a;","a sdfjkl;","asdf","jkl;","hg","a sdfghjkl;","ru","ei","wo","qp","q weruiop","qwer","uiop","ty","q wertyuiop","q werasdftg","y uiophjkl;","q wertyuiopasdfghjkl;","vm","c,","x.","z/","z xcvm,./","zxcv","m,./","bn","z xcvbnm,./","q wertasdfghzxcvb","y uiophjkl;nm,./","q wertyuiopasdfghjkl;zxcvbnm,./",
"*Shift","FJjf","DKkd","SLsl","A:a;","A SDFJKL:asdfjkl;",
"GHgh","A SDFGHJKL:asdfghjkl;","RUru","EIei","WOwo","QPqp","Q WERUIOPqweruiop",
"TYty","Q WERTYUIOPqwertyuiop","VMvm","C<,c","X>x.","Z?z/",
"Z XCVM<>?zxcvm,./","BNbn","Z XCVMBN<>?zxbncvm,./","47","38",
"29","10","12","32","45","56","1 234567890","$&47","#*38","@(29",
"!)10","! @#$&*()12347890","%^56","! @#$%^&*()1234567890",
"1 234567890!@#$%^&*()qwertyuiopQWERTYUIOPasdfghjkl;ASDFGHJKL:zxcvbnm,./ZXCVBNM<>?"]; 
if (isset($_GET["lesson"]) && $lesson[$_GET["lesson"]]!=null) {
    $type = $lesson[$_GET["lesson"]];
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
<input type="hidden" id="lesson" value="<?php echo $type; ?>">
    <div class="menu">
        <ul>
            <li><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></li>
            <li class="active">
                <div><a href="luyentapcoban.html">Cơ bản</a></div>
            </li>
            <li><a href="nangcao.html">Nâng cao</a></li>
            <li><a href="kiemtratocdo.html">Kiểm tra tốc độ</a></li>
            <li><a href="">Trò chơi</a></li>
            <li>
                <div class="Account">
                    <div class="Account_btn">Tài khoản</div>
                    <div class="Account_dropdown">
                        <div class="box"><a href="dangnhap.html"><img src="../public/sign-in.png">&nbsp Đăng nhập</a></div>
                        <div class="box"><a href="dangky.html"><img src="../public/add_profile_user_icon_148635.png">&nbsp Đăng ký</a></div>
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
        </div>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/training.js?v=<?php echo time()?>" ></script>
</body>

</html>