<?php
if (isset($_SESSION["userInWeb"])) session_start();
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
    <title>Document</title>
</head>

<body>
    <?php
    include './menu.php'
    ?>
    <div id="shap" class="shap">
        <div class="timerInfo">
            00:00:00
        </div>
        <div class="content">
            <div class="content__text "></div>
            <img class="content__img"></img>
            <div class="erro">Số lần gõ sai: 0</div>
            <p id='lesson' style="display:none"><?php echo $tent ?></p>
            <p id='numberLesson' style="display: none;"><?php echo $lesson ?></p>
        </div>
        <div class="content1">
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
    </div>
    <script src='../js/jquery.js?v=<?php echo time() ?>'></script>
    <script src='../js/training.js?v=<?php echo time() ?>'></script>
</body>

</html>