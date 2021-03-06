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
    <link rel="stylesheet" href="../css/NutHangNC.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <?php echo time() ?>
</head>

<body>
    <?php
    include './menu.php'
    ?>
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
    <div class="hangpg">
        <div class="container">
            <h1>Viết hoa</h1>
            <!-- <a href="./training.php?*Shift" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">37</span>
                    <div class="content-title-nc">Shift Key Intro</div>
                </div>
            </a> -->
            <a href="./training.php?lesson=34" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">35</span>
                    <div class="content-title-nc">Viết hoa F & J</div>
                </div>
            </a>
            <a href="./training.php?lesson=35" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">36</span>
                    <div class="content-title-nc">Viết hoa D & K</div>
                </div>
            </a>

            <a href="./training.php?lesson=36" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">37</span>
                    <div class="content-title-nc">Viết hoa S & L</div>
                </div>
            </a>
            <a href="./training.php?lesson=37" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">38</span>
                    <div class="content-title-nc">Viết hoa A & :</div>
                </div>
            </a>
            <a href="./training.php?lesson=38" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">39</span>
                    <div class="content-title-nc">Ôn tập lại 8 kí tự hàng giữa</div>
                </div>
            </a>
            <a href="./training.php?lesson=39" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">40</span>
                    <div class="content-title-nc">Viết hoa G & H</div>
                </div>
            </a>
            <a href="./training.php?lesson=40" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">41</span>
                    <div class="content-title-nc">Ôn tập viết hoa hàng giữa</div>
                </div>
            </a>
            <h1>Viết hoa hàng trên</h1>
            <a href="./training.php?lesson=41" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">42</span>
                    <div class="content-title-nc">Viết hoa R & U</div>
                </div>
            </a>
            <a href="./training.php?lesson=42" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">43</span>
                    <div class="content-title-nc">Viết hoa E & I</div>
                </div>
            </a>
            <a href="./training.php?lesson=43" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">44</span>
                    <div class="content-title-nc">Viết hoa W & O</div>
                </div>
            </a>
            <a href="./training.php?lesson=44" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">45</span>
                    <div class="content-title-nc">Viết hoa Q & P</div>
                </div>
            </a>
            <a href="./training.php?lesson=45" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">46</span>
                    <div class="content-title-nc">Ôn lại 8 ký tự hàng trên</div>
                </div>
            </a>
            <a href="./training.php?lesson=46" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">47</span>
                    <div class="content-title-nc">Viết hoa T & Y</div>
                </div>
            </a>
            <a href="./training.php?lesson=47" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">48</span>
                    <adiv class="content-title-nc">Viết hoa hàng phím trên</adiv>
                </div>
            </a>
            <h1>Viết hoa hàng dưới</h1>
            <a href="./training.php?lesson=48" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">49</span>
                    <div class="content-title-nc">Viết hoa V & M</div>
                </div>
            </a>
            <a href="./training.php?lesson=49" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">50</span>
                    <div class="content-title-nc">Viết hoa C & < </div>
                    </div>
            </a> <a href="./training.php?lesson=50" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">51</span>
                    <div class="content-title-nc">Viết hoa X & ></div>
                </div>
            </a>
            <a href="./training.php?lesson=51" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">52</span>
                    <div class="content-title-nc">Viết hoa Z & ?</div>
                </div>
            </a>
            <a href="./training.php?lesson=52" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">53</span>
                    <div class="content-title-nc">Ôn tập lại 8 ký tự hàng dưới</div>
                </div>
            </a>
            <a href="./training.php?lesson=53" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">54</span>
                    <div class="content-title-nc">Viết hoa B & N</div>
                </div>
            </a>
            <a href="./training.php?lesson=54" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">55</span>
                    <div class="content-title-nc">Viết hoa hàng dưới</div>
                </div>
            </a>
            <h1>Các con số</h1>
            <a href="./training.php?lesson=55" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">56</span>
                    <div class="content-title-nc">Phím 4 & 7</div>
                </div>
            </a>

            <a href="./training.php?lesson=56" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">57</span>
                    <div class="content-title-nc">Phím 3 & 8</div>
                </div>
            </a>

            <a href="./training.php?lesson=57" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">58</span>
                    <div class="content-title-nc">Phím 2 & 9</div>
                </div>
            </a>

            <a href="./training.php?lesson=58" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">59</span>
                    <div class="content-title-nc">Phím 1 & 0</div>
                </div>
            </a>
            <a href="./training.php?lesson=59" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">60</span>
                    <div class="content-title-nc">Tay trái với số</div>
                </div>
            </a>
            <a href="./training.php?lesson=60" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">61</span>
                    <div class="content-title-nc">Tay phải với số</div>
                </div>
            </a>
            <a href="./training.php?lesson=61" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">62</span>
                    <div class="content-title-nc">Ôn tập 8 phím</div>
                </div>
            </a>
            <a href="./training.php?lesson=62" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">63</span>
                    <div class="content-title-nc">Phím 5 & 6</div>
                </div>
            </a>
            <a href="./training.php?lesson=63" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">64</span>
                    <div class="content-title-nc">Trò chơi: All Numbers</div>
                </div>
            </a>
            <h1>Các ký tự đặc biệt</h1>
            <a href="./training.php?lesson=64" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">65</span>
                    <div class="content-title-nc">$ và &</div>
                </div>
            </a>
            <a href="./training.php?lesson=65" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">66</span>
                    <div class="content-title-nc"># và *</div>
                </div>
            </a>
            <a href="./training.php?lesson=66" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">67</span>
                    <div class="content-title-nc">@ và (</div>
                </div>
            </a>
            <a href="./training.php?lesson=67" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">68</span>
                    <div class="content-title-nc">! và )</div>
                </div>
            </a>
            <a href="./training.php?lesson=68" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">69</span>
                    <div class="content-title-nc">Ôn tập 8 phím đã học</div>
                </div>
            </a>
            <a href="./training.php?lesson=69" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">70</span>
                    <div class="content-title-nc">% và ^</div>
                </div>
            </a>
            <a href="./training.php?lesson=70" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">71</span>
                    <div class="content-title-nc">Ôn tập các kí tự đặc biệt</div>
                </div>
            </a>
            <a href="./training.php?lesson=71" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number-nc">72</span>
                    <div class="content-title-nc">Tổng kết: Ôn tấp tất cả</div>
                </div>
            </a>
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
                            <h4>Thông tin Developers</h4>
                            <p><span class="link-menu">Lê Tấn Lộc</span></p>
                            <p><span>Huỳnh Mẫn Đạt</span></p>
                            <p><span>Lê Văn Trung</span></p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 help footer-column">
                            <h4>CONTACTS US</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6528258849626!2d106.681468153168!3d10.761217042784601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fb4502ebd044212!2sHo%20Chi%20Minh%20City%20University%20of%20Education!5e0!3m2!1sen!2s!4v1621691175436!5m2!1sen!2s" width="280" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
<script src='../js/jquery.js?v=<?php echo time() ?>'></script>
<script src="../js/acceptLessonNC.js?v=<?php echo time() ?>"></script>

</html>