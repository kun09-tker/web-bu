<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing_Web-bu</title>
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/kiemtratocdo.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time() ?>">
</head>

<body>
    <header id="body">
        <?php
        include './menu.php'
        ?>
        <script>
            let menu = document.querySelectorAll('.none');
            for (let i = 0; i < menu.length; i++) {
                if (i != 2) {
                    menu[i].classList.add('none');
                    menu[i].classList.remove('active');
                } else {
                    menu[i].classList.add('active');
                    menu[i].classList.remove('none');
                }
            }
        </script>
        <div class="hangpg">
            <p class="saveName" style="display: none;"><?php if (isset($_SESSION["saveName"])) {
                                                            echo $_SESSION["saveName"];
                                                        } else {
                                                            echo "DF";
                                                        } ?></p>
            <div class="container">
                <h1>Kiểm tra tốc độ đánh máy </h1>
                <button class="type-btn" id="data">Bộ test</button>
                <div class="data" style="margin-left: 0.25rem;">Bộ test đang dùng: <?php if (isset($_SESSION["saveName"])) {
                                                                                        echo $_SESSION["saveName"];
                                                                                    } else {
                                                                                        echo "DF";
                                                                                    } ?></div>
                <div class="card">
                    <div class="card-body">
                        <section id="word-section">
                        </section>
                    </div>
                </div>
                <label>Xuất hiện chữ ngẫu nhiên</label>
                <label class="switch">
                    <input class="check" type="checkbox" <?php if (isset($_SESSION["saveOnlyTest"]) && $_SESSION["saveOnlyTest"] == "true") echo "checked" ?>>
                    <span class="slider"></span>
                </label>
                <section id="type-section">
                    <input id="typebox" name="typebox" type="text" tabindex="1" autofocus="" onkeydown="beepOne.play()">
                    <div id="timer" class="type-btn"><span>01:00</span></div>
                    <button id="restart" class="type-btn" tabindex="2">
                        <span id="restart-symbol">↻</span>
                    </button>
                </section>
                <div class="Result">
                    <div id="auswertung-result" class="hide">
                        <h3>
                            Result
                        </h3>
                        <table class="table table-striped" id="result-table">
                            <tbody>
                                <tr>
                                    <td id="wpm" class="name" colspan="2" title="Words per Minute: 1 word equals 5 keystrokes">
                                        <strong class="strong1">72 WPM</strong>
                                        <small>(words per minute)</small>
                                    </td>
                                </tr>
                                <tr id="keystrokes">
                                    <td class="name">Keystrokes</td>
                                    <td class="value"><small>(<span class="correct1"></span> | <span class="wrong"></span>)</small><span class="total"></span></td>
                                </tr>
                                <tr id="accuracy">
                                    <td class="name">Accuracy</td>
                                    <td class="value"> <strong class="strong2"></strong></td>
                                </tr>
                                <tr id="correct">
                                    <td class="name">Correct words</td>
                                    <td class="value"> <strong class="strong3"></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer" class="codecamp-footer">
            <div class=" main-footer">
                <div class="container-footer">
                    <div class="row">
                        <div class="col-md-6 introduction footer-column">
                            <!-- <div class="logo-typing">
                                <img src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"
                                    alt="TYPING">
                            </div> -->
                            <p>
                                TYPING là nền tảng tương tác trực tuyến hỗ trợ người dùng học đánh máy
                                và đánh giá kỹ năng đánh máy một cách nhanh chóng và chính xác.
                            </p>
                            <a href="https://www.facebook.com/Web-bu-104521588410916" title="Facebook" target="_blank" class="social-button">
                                <i class="fab fa-facebook-square icon_social"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCpt3dSDGk5fC7uU9OeFG5ig" title="Youtube" target="_blank" class="social-button">
                                <i class="fab fa-youtube-square icon_social"></i>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 links footer-column">
                            <h4>Liên kết</h4>
                            <p><a href="./luyentapcoban.php" class="link-menu" title="Học tập">Cơ bản</a></p>
                            <p><a href="./nangcao.php" class="link-menu" title="Luyện tập">Nâng cao</a></p>
                            <p><a href="./kiemtratocdo.php" class="link-menu" title="Cuộc thi">Kiểm tra tốc độ</a></p>
                            <p><a href="./trochoi.php" class="link-menu" title="Trò chơi">Trò chơi</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 right-reserved">
                <span class="powerby">
                    <img src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png" alt="FPT Software" class="fpt-logo">
                    Cung cấp bởi WEB-BU
                </span>
                <span class="copyright">© 2021</span>
            </div>
        </footer>
    </header>
    <script src='../js/jquery.js?v=<?php echo time() ?>'></script>
    <script src="../js/kiemtratocdo.js?v=<?php echo time() ?>"></script>
    <script>
        document.onclick = (e) => {
            var find = e.target;
            while (find.nodeName != "HEADER") {
                find = find.parentElement;
            }
            if (find.id == "body") {
                document.querySelector('.container_list').style.display = 'none';
                window.location.reload();
            }
        }
    </script>
</body>

</html>