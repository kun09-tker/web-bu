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
    <title>Typing_Web-bu</title>
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
                <a href="<?php echo $url_prev ?>" class="button">Previous</a>
                <a href="<?php echo $url_again ?>" class="button">Again</a>
                <a href="<?php echo $url_next ?>" class="button">Next</a>
            </div>
        </div>
    </div>
    <div class="ranking">
        <div class="quiz-window-header">
            <div class="quiz-window-title">Bảng xếp hạng</div>
        </div>
        <div class="quiz-window-body">
            <div class="gui-window-awards">
            </div>
        </div>
    </div>
    <script src='../js/jquery.js?v=<?php echo time() ?>'></script>
    <script src='../js/training.js?v=<?php echo time() ?>'></script>
</body>

</html>