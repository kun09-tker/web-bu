<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra tốc độ</title>
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../css/kiemtratocdo.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css?v=<?php echo time()?>">
</head>

<body>
    <div id="body">
        <div class="menu">
            <ul>
                <li><img id="logo" src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png"></li>
                <li><a href="luyentapcoban.html">Cơ bản</a></li>
                <li><a href="nangcao.html">Nâng cao</a></li>
                <li class="active">
                    <div><a href="./kiemtratocdo.php">Kiểm tra tốc độ</a></div>
                </li>
                <li><a href="">Trò chơi</a></li>
                <li>
                    <div class="Account">
                        <div class="Account_btn">Tài khoản</div>
                        <div class="Account_dropdown">
                            <div class="box"><a href="./dangnhap.php"><img src="../public/sign-in.png">&nbsp Đăng nhập</a></div>
                            <div class="box"><a href="./dangky.php"><img src="../public/add_profile_user_icon_148635.png">&nbsp Đăng
                                    ký</a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="hangpg">
            <div class="container">
                <h1>Kiểm tra tốc độ đánh máy</h1>
                <div class="card">
                    <div class="card-body">
                        <section id="word-section">

                        </section>
                    </div>
                </div>
                <section id="type-section">
                    <input id="typebox" name="typebox" type="text" tabindex="1" autofocus="">
                    <div id="timer" class="type-btn"><span>01:00</span></div>
                    <button id="restart" class="type-btn" tabindex="2">
                        <span id="restart-symbol">↻</span>
                    </button>
                </section>
                <div id="auswertung-result" class="hide" style="display: block;">
                    <h3>
                        Result
                    </h3>
                    <table class="table table-striped" id="result-table">
                        <tbody>
                            <tr>
                                <td id="wpm" class="name" colspan="2"
                                    title="Words per Minute: 1 word equals 5 keystrokes">
                                    <strong class="strong1">72 WPM</strong>
                                    <small>(words per minute)</small>
                                </td>
                            </tr>
                            <tr id="keystrokes">
                                <td class="name">Keystrokes</td>
                                <td class="value"><small>(<span class="correct1">360</span> | <span
                                            class="wrong">10</span>)</small><span class="total">&nbsp;370</span></td>
                            </tr>
                            <tr id="accuracy">
                                <td class="name">Accuracy</td>
                                <td class="value"> <strong class="strong2">91.6%</strong></td>
                            </tr>
                            <tr id="correct">
                                <td class="name">Correct words</td>
                                <td class="value"> <strong class="strong3">69</strong></td>
                            </tr>
                        </tbody>
                    </table>
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
                            <a href="https://www.facebook.com/Web-bu-104521588410916" title="Facebook" target="_blank"
                                class="social-button">                    
                                <i class="fab fa-facebook-square icon_social"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCpt3dSDGk5fC7uU9OeFG5ig" title="Youtube"
                                target="_blank" class="social-button">
                                <i class="fab fa-youtube-square icon_social"></i>                                
                            </a>                        
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 links footer-column">
                            <h4>Liên kết</h4>
                            <p><a href="./luyentapcoban.html" class="link-menu" title="Học tập">Cơ bản</a></p> 
                            <p><a href="./nangcao.html" class="link-menu" title="Luyện tập">Nâng cao</a></p> 
                            <p><a href="./kiemtratocdo.html" class="link-menu" title="Cuộc thi">Kiểm tra tốc độ</a></p> 
                            <p><a href="" class="link-menu" title="Trò chơi">Trò chơi</a></p> 
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 about footer-column">
                            <h4>Thông tin</h4>
                            <p><a href="/sharing" class="link-menu" title="Chia sẻ">Chia sẻ</a></p>
                            <p><a href="/aboutus" title="Về chúng tôi">Về chúng tôi</a></p>
                            <p><a href="/terms" title="Điều khoản sử dụng">Điều khoản sử dụng</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 help footer-column">
                            <h4>Trợ giúp</h4>
                            <p><a href="/help" title="Hỗ trợ">Hỗ trợ</a></p>
                            <p><a href="/discussion" title="Thảo luận">Thảo luận</a></p>
                            <p><a href="mailto:support@codelearn.io" title="Liên hệ với chúng tôi">Liên hệ với chúng
                                    tôi</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 right-reserved">
                <span class="powerby">
                    <img src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png" alt="FPT Software"
                        class="fpt-logo">
                    Cung cấp bởi WEB-BU
                </span>
                <span class="copyright">© 2021</span>
            </div>
        </footer>

    </div>
    <script src="../js/kiemtratocdo.js"></script>
</body>

</html>