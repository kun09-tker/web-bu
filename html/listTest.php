<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$data = $con->query("SELECT u.username,l.Name, l.Content, l.thich, l.khong_thich, l.day, l.id, u.id FROM list_test l,user u WHERE u.id = l.id_user ORDER BY l.thich DESC, l.khong_thich ASC");
$user = isset($_SESSION["userInWeb"]) ? $_SESSION["userInWeb"] : "";
$eva = "";
if ($user != "") {
    $eva = $con->query("SELECT* FROM evaluate WHERE id_user = '$user'");
}
?>
<style>
    .container_list {
        display: flex;
        position: absolute;
        background-color: #fff;
        justify-content: space-between;
        border: 1px solid #000;
        border-radius: 4px;
        width: 35rem;
        height: 20.3rem;
        z-index: 2;
    }

    .container_list .text {
        display: flex;
        width: 30%;
        justify-content: center;
        flex-wrap: wrap;
        overflow-y: scroll;
        border-right: solid 1px black;
        align-content: flex-start;
    }

    .container_list .text-add {
        display: flex;
        margin-top: 5px;
        width: 90%;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        height: 2rem;
        cursor: pointer;
        background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(133, 133, 133, 0.6194852941176471) 0%, rgba(255, 255, 255, 1) 100%);
    }

    .container_list .text-option {
        display: flex;
        margin-top: 10px;
        justify-content: center;
        width: 87%;
        cursor: pointer;
    }

    .container_list .text-option:focus {
        border: 1px solid rgb(75, 231, 197);
    }

    .container_list .content {
        display: flex;
        position: relative;
        width: 100%;
        flex-wrap: wrap;
        justify-content: center;
        align-content: flex-start;
    }

    .container_list .content-title {
        display: flex;
        background-color: rgb(75, 231, 197);
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 1.5rem;
        font-weight: bolder;
    }

    .container_list .content-data {
        display: flex;
        height: 184px;
        width: 94%;
        flex-wrap: wrap;
        overflow-y: scroll;
        margin: 10px 10px 10px 10px;
        padding: 10px 10px 0px 10px;
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 2px 2px 9px 2px rgba(0, 0, 0, 0.16);
    }

    .container_list .info {
        display: none;
        width: 93%;
        justify-content: space-between;
        cursor: pointer;
    }

    .container_list .info_evaluate {
        display: flex;
        width: 22%;
        margin-top: 8px;
    }

    .container_list .like>img {
        transform: translateY(-3px);
        width: 1rem;
        height: 1rem;
    }

    .container_list .unlike {
        margin-left: 14%;
        cursor: pointer;
    }

    .container_list .like {
        cursor: pointer;
    }

    .container_list .unlike>img {
        transform: translateY(-1px);
        width: 1rem;
        height: 1rem;
    }
</style>

<body>
    <header>
        <div class="container_list">
            <div class="text">
                <p class="user" style="display: none;"><?php if (isset($_SESSION["userInWeb"])) echo $_SESSION["userInWeb"] ?></p>
                <button type="submit" class="text-add" id="add">Thêm bài mới</button>
                <?php
                if ($data) {
                    while ($row = mysqli_fetch_row($data)) {
                ?>
                        <button class="text-option" data-user="<?php echo $row[0] ?>" data-name="<?php echo $row[1] ?>" data-content="<?php echo $row[2] ?>" data-like="<?php echo $row[3] ?>" data-dislike="<?php echo $row[4] ?> " data-day="<?php echo $row[5] ?>" data-id="<?php echo $row[6] ?>" data-idUser="<?php echo $row[7] ?>">
                            <?php echo $row[1] ?>
                        </button>
                <?php
                    }
                }
                ?>
                <div class="eva" style="display: block;">
                    <?php
                    if ($eva != "") {
                        while ($row = mysqli_fetch_row($eva)) {
                    ?>
                            <p class="eva_data" data-id_list="<?php echo $row[1] ?>" data-value="<?php echo $row[2] ?>"></p>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class=" content">
                <div class="content-title">Xem trước</div>
                <div class="content-data"></div>
                <div class="info">
                    <div class="info_user">
                        <p class="userInWeb" style="display: none;"><?php if (isset($_SESSION["userInWeb"])) echo $_SESSION["userInWeb"];
                                                                    else echo "" ?></p>
                        <div class="User-add">Người đóng góp: </div>
                        <div class="day">Ngày đóng góp: </div>
                    </div>
                    <div class="info_evaluate">
                        <div class="like"><label class="lb_like">0</label>
                            <img src="../public/avt/likegray.png">
                        </div>
                        <div class="unlike"><label class="lb_dislike">0</label>
                            <img src="../public/avt/dislikegray.png">
                        </div>
                    </div>
                </div>
                <button class="text-add" id="deloy">Áp dụng</button>
            </div>
        </div>
    </header>
</body>