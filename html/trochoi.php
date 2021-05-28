<?php
session_start();
error_reporting(0);
require "../php/xuly.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing_Web-bu</title>
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/NutHang.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css?v=<?php echo time() ?>">
</head>

<body>
    <?php
    include './menu.php'
    ?>
    <script>
        let menu = document.querySelectorAll('.none');
        for (let i = 0; i < menu.length; i++) {
            if (i != 3) {
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
            <a href="../game/ztype/index.php" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number"><img src="../game/ztype/media/title/shipicon.png"></span>
                    <div class="content-title">
                        <p style="margin: unset ;"><strong>PHOBOSLAB ZTYPE</strong></p>
                        <p1 style="margin: unset ;">Bắn phi thuyền
                        </p1>
                    </div>
                </div>
            </a>
            <a href="../game/zombie/index.php" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number"><img src="../game/zombie/css/public/virus.png"></span>
                    <div class="content-title">
                        <p style="margin: unset ;"><strong>KILL ZOMBIE</strong></p>
                        <p1 style="margin: unset ;">Diệt Zombie
                        </p1>
                    </div>
                </div>
            </a>
            <a href="../game/TouchTypeTraining/index.php" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number"><img src="../game/TouchTypeTraining/fav.ico"></span>
                    <div class="content-title">
                        <p style="margin: unset ;"><strong>Touch Type Training</strong></p>
                        <p1 style="margin: unset ;">Luyện đánh máy</p1>
                    </div>
                </div>
            </a>
            <!-- <a href="../game/wordpluck/index.php" class="hangpg__card btn btn-white btn-animated">
                <div class="hangpg__card-content">
                    <span class="content-number"><img src="../game/wordpluck/images/output-onlinepngtools.png"></span>
                    <div class="content-title">
                        <p style="margin: unset ;"><strong>Word Pluck</strong></p>
                        <p1 style="margin: unset ;">Những giọt mưa rơi</p1>
                    </div>
                </div>
            </a> -->
        </div>
    </div>
</body>