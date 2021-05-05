<?php
if (isset($_SESSION["userInWeb"])) session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TYPING</title>
    <link rel="stylesheet" type="text/css" href="../css/thanh-menu.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="../css/NutHang.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css?v=<?php echo time() ?>">
</head>

<body>
    <div id="body">
        <?php
        include './menu.php'
        ?>
        <script>
            let menu = document.querySelectorAll('.none');
            for (let i = 0; i < menu.length; i++) {
                if (i != 0) {
                    menu[i].classList.add('none');
                    menu[i].classList.remove('active');
                } else {
                    menu[i].classList.add('active');
                    menu[i].classList.remove('none');
                }
            }
        </script>
        <div class="hangpg">
            <div class="container">
                <h1>Hàng phím giữa</h1>
                <!-- <a href="training.php?*intro" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">1</span>
                        <div class="content-title">
                            <p>Giới thiệu</p>
                        </div>
                    </div>
                </a> -->
                <a href="training.php?lesson=0" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">1</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím f & j</p>
                            <p1 style="margin: unset ;">Dùng ngón trỏ trái và phải
                            </p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=1" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">2</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Space Bar</p>
                            <p1 style="margin: unset ;">Dùng ngón cái</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=2" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">3</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím d & k</p>
                            <p1 style="margin: unset ;">Dùng ngón giữa trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=3" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">4</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím s & l</p>
                            <p1 style="margin: unset ;">Dùng ngón áp út trái, phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=4" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">5</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím a & ;</p>
                            <p1 style="margin: unset ;">Dùng ngón út trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=5" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">6</span>
                        <div class="content-title">
                            <p style="margin: unset ;">8 phím đầu tiên</p>
                            <p1 style="margin: unset ;">Ôn tập 8 phím đã học</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=6" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">7</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Hàng phím giữa: Tay trái</p>
                            <p1 style="margin: unset ;">Chỉ dùng tay trái gõ phím</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=7" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">8</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Hàng phím giữa: Tay phải</p>
                            <p1 style="margin: unset ;">Chỉ dùng tay phải gõ phím</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=8" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">9</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím g & h</p>
                            <p1 style="margin: unset ;">Dùng ngón trỏ trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=9" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">10</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Ôn tập hàng phím giữa</p>
                            <p1 style="margin: unset ;">Ôn tập các phím đã học</p1>
                        </div>
                    </div>
                </a>
                <!-- <a href="training.php?*home" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">12</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Sweet Home</p>
                            <p1 style="margin: unset ;"></p1>
                        </div>
                    </div>
                </a> -->

                <h1>Hàng phím trên</h1>
                <a href="training.php?lesson=10" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">11</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím r & u</p>
                            <p1 style="margin: unset ;">Dùng ngón trỏ trái và phải
                            </p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=11" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">12</span>
                        <div class="content-title">
                            <p style="margin: unset ;">phím e & i</p>
                            <p1 style="margin: unset ;">Dùng ngón giữa trái và phải
                            </p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=12" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">13</span>
                        <div class="content-title">
                            <p style="margin: unset ;">phím w & o</p>
                            <p1 style="margin: unset ;">Dùng ngón áp út trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=13" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">14</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím q & p</p>
                            <p1 style="margin: unset ;">Dùng ngón út trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=14" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">15</span>
                        <div class="content-title">
                            <p style="margin: unset ;">8 phím hàng trên</p>
                            <p1 style="margin: unset ;">Ôn tập: q w e r u i o p</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=15" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">16</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Hàng phím trên tay trái</p>
                            <p1 style="margin: unset ;">Chỉ dùng tay trái để gõ</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=16" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">17</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Hàng phím trên tay phải</p>
                            <p1 style="margin: unset ;">Chỉ dùng tay phải để gõ phím</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=17" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">18</span>
                        <div class="content-title">
                            <p style="margin: unset ;">phím t & y</p>
                            <p1 style="margin: unset ;">Dùng ngón trỏ trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=18" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">19</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Ôn tập hàng phím trên</p>
                            <p1 style="margin: unset ;">Ôn tập các phím đã học</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=19" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">20</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Tay trái</p>
                            <p1 style="margin: unset ;">Hàng trên và hàng giữa</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=20" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">21</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Tay phải</p>
                            <p1 style="margin: unset ;">Hàng trên và hàng giữa</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=21" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">22</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Ôn tập tổng hợp</p>
                            <p1 style="margin: unset ;">Hàng trên và hang dưới</p1>
                        </div>
                    </div>
                </a>
                <h1>Hàng phím dưới</h1>
                <a href="training.php?lesson=22" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">23</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím v & m</p>
                            <p1 style="margin: unset ;">Dùng ngón trỏ trái và phải
                            </p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=23" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">24</span>
                        <div class="content-title">
                            <p style="margin: unset ;">phím c & ,</p>
                            <p1 style="margin: unset ;">Dùng ngón giữa trái và phải
                            </p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=24" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">25</span>
                        <div class="content-title">
                            <p style="margin: unset ;">phím x & .</p>
                            <p1 style="margin: unset ;">Dùng ngón áp út trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=25" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">26</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Phím z & /</p>
                            <p1 style="margin: unset ;">Dùng ngón út trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=26" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">27</span>
                        <div class="content-title">
                            <p style="margin: unset ;">8 phím hàng dưới</p>
                            <p1 style="margin: unset ;">Ôn tập: z x c v m , . /</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=27" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">28</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Hàng phím trên tay trái</p>
                            <p1 style="margin: unset ;">Chỉ dùng tay trái để gõ</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=28" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">29</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Hàng phím trên tay phải</p>
                            <p1 style="margin: unset ;">Chỉ dùng tay phải để gõ phím</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=29" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">30</span>
                        <div class="content-title">
                            <p style="margin: unset ;">phím b & n</p>
                            <p1 style="margin: unset ;">Dùng ngón trỏ trái và phải</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=30" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">31</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Ôn tập hàng phím dưới</p>
                            <p1 style="margin: unset ;"></p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=31" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">32</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Tay trái</p>
                            <p1 style="margin: unset ;">Hàng trên, hàng giữa và hàng dưới</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=32" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">33</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Tay phải</p>
                            <p1 style="margin: unset ;">Hàng trên, hàng giữa và hàng dưới</p1>
                        </div>
                    </div>
                </a>
                <a href="training.php?lesson=33" class="hangpg__card btn btn-white btn-animated">
                    <div class="hangpg__card-content">
                        <span class="content-number">34</span>
                        <div class="content-title">
                            <p style="margin: unset ;">Ôn tập tổng hợp</p>
                            <p1 style="margin: unset ;">Hàng trên, hàng giữa và hàng dưới</p1>
                        </div>
                    </div>
                </a>
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
                    <img src="../public/614d9ae7c9d44f89ab228c8ae55d3e92.png" alt="FPT Software" class="fpt-logo">
                    Cung cấp bởi WEB-BU
                </span>
                <span class="copyright">© 2021</span>
            </div>
        </footer>

    </div>
</body>

</html>