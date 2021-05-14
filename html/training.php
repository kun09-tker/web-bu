<?php
session_start();
error_reporting(0);
require "../php/lesson.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/training.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
    <link href='//fonts.googleapis.com/css?family=Roboto:100,400,300?v=<?php echo time() ?>' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/raking-table.css?v=<?php echo time() ?>">
    <title>Document</title>
</head>

<body>
    <?php
    include './menu.php'
    ?>
    <div id="shap" class="shap">
        <div class="top">
            <div class="accept acceptnull">
            </div>
            <div class="timerInfo">
                00:00:00
            </div>
            <div class="accept">
                &#x2714;&nbsp;Đã hoàn thành
            </div>
        </div>
        <div class="content">
            <div class="content__text "></div>
            <img class="content__img"></img>
            <div class="erro">Số lần gõ sai: 0</div>
            <p id='lesson' style="display:none"><?php echo $tent ?></p>
            <p id='numberLesson' style="display: none;"><?php echo $lesson ?></p>
        </div>
        <div class="content1">
            <div class="acc">&nbsp;
                &nbsp;
                00.00 %</div>
            <div class="shapTick">
                <div class="content-elip">
                    <div class="tick1"></div>
                    <div class="tick2"></div>
                </div>
                <div class="content-elip-shadow1"></div>
                <div class="content-elip-shadow2"></div>
            </div>
            <div class="shapButton">
                <div class="button"><a href="<?php echo $url_prev ?>">Previous</a></div>
                <div class="button"><a href="<?php echo $url_again ?>">Again</a></div>
                <div class="button"><a href="<?php echo $url_next ?>">Next</a></div>
            </div>
        </div>
        <div class="quiz-window">
            <div class="quiz-window-header">
                <div class="quiz-window-title">Bảng xếp hạng</div>
                <button class="quiz-window-close">&times;</button>
            </div>
            <div class="quiz-window-body">
                <div class="gui-window-awards">
                    <ul class="guiz-awards-row guiz-awards-header">
                        <li class="guiz-awards-header-star">&nbsp;</li>
                        <li class="guiz-awards-header-name">Tên</li>
                        <li class="guiz-awards-header-user">Username</li>
                        <li class="guiz-awards-header-exactly">Độ chính xác</li>
                        <li class="guiz-awards-header-time">Thời gian</li>
                        <li class="guiz-awards-header-day">Ngày</li>

                    </ul>
                    <ul class="guiz-awards-row guiz-awards-row-even">
                        <li class="guiz-awards-star"><span class="star goldstar"></span></li>
                        <li class="guiz-awards-name">Golden Star
                            <div class="guiz-awards-subtitle">90-100% correct answers</div>
                        </li>
                        <li class="guiz-awards-user">mồn lèo</li>
                        <li class="guiz-awards-exactly">100%</li>
                        <li class="guiz-awards-time">12s</li>
                        <li class="guiz-awards-day">12-10-2020</li>
                    </ul>
                    <ul class="guiz-awards-row">
                        <li class="guiz-awards-star"><span class="star silverstar"></span></li>
                        <li class="guiz-awards-name">Silver Star
                            <div class="guiz-awards-subtitle">80-90% correct answers</div>
                        </li>
                        <li class="guiz-awards-user"><span class="null"></span></li>
                        <li class="guiz-awards-exactly"><span class="null"></span></li>
                        <li class="guiz-awards-time"><span class="null"></span></li>
                        <li class="guiz-awards-day"><span class="null"></span></li>
                    </ul>
                    <ul class="guiz-awards-row guiz-awards-row-even">
                        <li class="guiz-awards-star"><span class="star bronzestar"></span></li>
                        <li class="guiz-awards-name">Bronze Star
                            <div class="guiz-awards-subtitle">70-80% correct answers</div>
                        </li>
                        <li class="guiz-awards-user"></li>
                        <li class="guiz-awards-exactly"></li>
                        <li class="guiz-awards-time"></li>
                        <li class="guiz-awards-day"></li>
                    </ul>
                    <ul class="guiz-awards-row">
                        <li class="guiz-awards-star"><span class="star rhodiumstar"></span></li>
                        <li class="guiz-awards-name">Rhodium Star
                            <div class="guiz-awards-subtitle">60-70% correct answers</div>
                        </li>
                        <li class="guiz-awards-user"><span class="null"></span></li>
                        <li class="guiz-awards-exactly"><span class="null"></span></li>
                        <li class="guiz-awards-time"><span class="null"></span></li>
                        <li class="guiz-awards-day"><span class="null"></span></li>
                    </ul>
                    <ul class="guiz-awards-row guiz-awards-row-even">
                        <li class="guiz-awards-star"><span class="star platinumstar"></span></li>
                        <li class="guiz-awards-name">Platinum Star
                            <div class="guiz-awards-subtitle">50-60% correct answers</div>
                        </li>
                        <li class="guiz-awards-user"></li>
                        <li class="guiz-awards-exactly"></li>
                        <li class="guiz-awards-time"></li>
                        <li class="guiz-awards-day"></li>
                    </ul>
                    <ul class="guiz-awards-row">
                        <li class="guiz-awards-star"><span class="star"></span></li>
                        <li class="guiz-awards-name">Star</li>
                        <li class="guiz-awards-user"><span class="null"></span></li>
                        <li class="guiz-awards-exactly"><span class="null"></span></li>
                        <li class="guiz-awards-time"><span class="null"></span></li>
                        <li class="guiz-awards-day"><span class="null"></span></li>
                    </ul>
                </div>
                <!-- <div class="guiz-awards-buttons"><button class="guiz-awards-but-back"><i class="fa fa-angle-left"></i> Back</button></div> -->
            </div>
        </div>
    </div>
    <script src='../js/jquery.js?v=<?php echo time() ?>'></script>
    <script src='../js/training.js?v=<?php echo time() ?>'></script>
</body>

</html>