<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing_Web-bu</title>
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/profile2.css?v=<?php echo time() ?>">
</head>

<body>
    <?php
    include './menu.php'
    ?>
    <main id="layout-main" class="group">
        <div id="layout-content" class="group">
            <div id="content" class="group">
                <div id="zone zone-content">
                    <div id="my-cv" class="container user-cv">
                        <div id="cv-left" class="col-md-3 col-sm-12 white">
                            <div id="user-profile">
                                <div class="user-avatar">
                                    <img id="img-user" alt="../public/avt/0.jpg" src="../public/avt/0.jpg">
                                </div>
                                <input type="file" class="inputAvt">
                                <p class="idUser" style="display: none;"><?php if (isset($_SESSION["userInWeb"])) echo $_SESSION["userInWeb"]; ?></p>
                                <span id="user-name" title="KevinHuynh">KevinHuynh</span>
                                <div>
                                    <span id="number-coin"></span>
                                    <span class="user-level"><span id="level"></span></span>
                                    <div style="text-align: center">
                                        <span class="total-xp-label">Tiến độ học tập</span>
                                    </div>
                                </div>
                                <div class="level-progress">
                                    <div class="current-progress">
                                        <div class="standard-progress-bar" style="position: relative; overflow: hidden;">
                                            <div class="background" style="overflow: hidden; width: 0%; position: absolute; left: 0px; top: 0px; height: 100%;">
                                                <div class="background-render" style="background: rgba(16, 215, 131, 1);height: 100%; width: 100%;">
                                                </div>
                                            </div> <span class="text" style="z-index: 1;">0/71</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="break-line"></div>
                            <div id="container-user-achievement">
                                <h3>
                                    Thành tích luyện tập
                                </h3>
                                <h4 class="wpm">
                                    0 WPM
                                </h4>
                                <h5 class="acc">
                                    Accuracy: 0%
                                </h5>
                                <ul id="user-achievement"></ul>
                            </div>
                            <div class="break-line"></div>
                            <div id="infomation">
                                <h3>
                                    Thông tin
                                    <i data-toggle="modal" data-target="#modal-edit-achievement" id="edit-achievement" class="cl-icon-pen pull-right" style="margin-right:12px;">
                                        <a href="./EditProfile.php"><svg class="Edit" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg></a>
                                    </i>
                                </h3>

                                <ul id="user-info-section">
                                    <li><span><i href="../html/kiemtratocdo.php" class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg></i></span>
                                        <span class="name">Huỳnh Mẫn Đạt</span><span class="pull-right"><i class="cl-icon-lock-alt"></i><i class="cl-icon-angle-down"></i></span>
                                    </li>
                                    <li><span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg></i></span>
                                        <span class="email">boy.cool46@yahoo.com</span><span class="pull-right"><i class="cl-icon-lock-alt"></i><i class="cl-icon-angle-down"></i></span>
                                    </li>
                                    <li><span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg></i></span> <span class="tel">-</span><span class="pull-right"><i class="cl-icon-lock-alt"></i><i class="cl-icon-angle-down"></i></span>
                                    </li>
                                    <li><span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg></i></span> <span class="address">-</span><span class="pull-right"><i class="cl-icon-internet"></i><i class="cl-icon-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg></i>
                                        </span>
                                        <span class="bir">-</span>
                                        <span class="pull-right"><i class="cl-icon-internet"></i><i class="cl-icon-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="cv-center" class="col-md-9 col-sm-12">
                            <div id="section-course" class="center-section">
                                <h7>Hoạt động</h7>
                                <div class="Luyentap">
                                    <h6>Luyện tập</h6>
                                    <table class="LuyenTapTable" style="width: 709px; height: 383px">
                                        <thead>
                                            <tr class="LuyenTaptr">
                                                <?php
                                                echo '<td class="LuyenTaptd">';
                                                echo "Mon";
                                                echo '<td class="LuyenTaptd">';
                                                echo "Tue";
                                                echo '<td class="LuyenTaptd">';
                                                echo "Wed";
                                                echo '<td class="LuyenTaptd">';
                                                echo "Thu";
                                                echo '<td class="LuyenTaptd">';
                                                echo "Fri";
                                                echo '<td class="LuyenTaptd">';
                                                echo "Sat";
                                                echo '<td class="LuyenTaptd">';
                                                echo "Sun";
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody class="LuyenTapTbody">
                                            <?php
                                            # 1.Khoi tao cac bien can thiet
                                            # Khoi tao cac bien thang ngay nam
                                            $date = time();
                                            $day = date('d', $date);
                                            $month = date('n', $date);
                                            $year = date('Y', $date);
                                            $first_day = mktime(0, 0, 0, $month, 1, $year);
                                            $title = date('F', $first_day); //january, febuary, march, april...
                                            # 2.Hien thi cac ngay trong tuan
                                            $day_of_week = date('D', $first_day);
                                            switch ($day_of_week) {
                                                case "Sun":
                                                    $blank = 6;
                                                    break;
                                                case "Mon":
                                                    $blank = 0;
                                                    break;
                                                case "Tue":
                                                    $blank = 1;
                                                    break;
                                                case "Wed":
                                                    $blank = 2;
                                                    break;
                                                case "Thu":
                                                    $blank = 3;
                                                    break;
                                                case "Fri":
                                                    $blank = 4;
                                                    break;
                                                case "Sat":
                                                    $blank = 5;
                                                    break;
                                            }
                                            //Dem so ngay trong thang hien tai
                                            $days_in_month = cal_days_in_month(0, $month, $year);

                                            $day_count = 1; //ngay trong tuan
                                            echo "<tr>";
                                            while ($blank > 0) //vong lap tao o trong tuan dau
                                            {
                                                echo "<td></td>";
                                                $blank = $blank - 1;
                                                $day_count++;
                                            }
                                            #4.So ngay trong thang
                                            $day_num = 1; //ngay trong thang
                                            //Hien thi cho het so ngay cua thang
                                            while ($day_num <= $days_in_month) {
                                                echo "<td class='LuyenTaptd prac'> $day_num/$month </td>";
                                                $day_num++;
                                                $day_count++;
                                                //Ta tao hang moi moi tuan
                                                if ($day_count > 7) {
                                                    echo "</tr><tr>";
                                                    $day_count = 1;
                                                }
                                            }
                                            ?>

                                            <?php
                                            $str_search = array(
                                                "Mon",
                                                "Tue",
                                                "Wed",
                                                "Thu",
                                                "Fri",
                                                "Sat",
                                                "Sun",
                                                "am",
                                                "pm",
                                                ":"
                                            );
                                            $str_replace = array(
                                                "Thứ hai",
                                                "Thứ ba",
                                                "Thứ tư",
                                                "Thứ năm",
                                                "Thứ sáu",
                                                "Thứ bảy",
                                                "Chủ nhật",
                                                " phút, sáng",
                                                " phút, chiều",
                                                " giờ "
                                            );
                                            $timenow = gmdate("D, d/m/Y - g:i a.", time() + 7 * 3600);
                                            $timenow = str_replace($str_search, $str_replace, $timenow);
                                            echo "Hôm nay, " . $timenow;
                                            ?>



                                        </tbody>
                                    </table>
                                </div>
                                <div class="Hoctap">
                                    <div class="Hoctapcoban">
                                        <h6>Học tập cơ bản</h6>
                                        <table style="width: 330px; height: 352px">
                                            <?php $dem = 0;
                                            for ($i = 1; $i <= 6; $i++) {
                                            ?>
                                                <tr class="Hoctaptr">
                                                    <?php for ($j = 1; $j <= 6; $j++) {
                                                        if ($i == 6 && $j == 5) break;
                                                        $dem++;
                                                        echo '<td class="Hoctaptd">';
                                                        echo '<span class="color">';
                                                        echo "$dem";
                                                        echo '</span><div class="percent"></div> </td>';
                                                    }
                                                    ?>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="Hoctapnangcao">
                                        <h6>Học tập nâng cao</h6>
                                        <table style="width: 330px; height: 352px">
                                            <?php
                                            for ($i = 1; $i <= 7; $i++) {

                                            ?>
                                                <tr class="Hoctaptr">
                                                    <?php for ($j = 1; $j <= 6; $j++) {
                                                        if ($i == 7 && $j == 3) break;
                                                        $dem++;
                                                        echo '<td class="Hoctaptd">';
                                                        echo '<span class="color">';
                                                        echo "$dem";
                                                        echo '</span><div class="percent"></div> </td>';
                                                    }
                                                    ?>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="cv-right" class="col-md-3 col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src='../js/jquery.js?v=<?php echo time() ?>'></script>
<script src="../js/UploadProfile.js?v=<?php echo time() ?>"></script>

</html>