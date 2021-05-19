<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$data = $con->query("SELECT* From list_test");
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
        height: 220px;
        width: 94%;
        flex-wrap: wrap;
        overflow-y: scroll;
        margin: 10px 10px 10px 10px;
        padding: 10px 10px 0px 10px;
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 2px 2px 9px 2px rgba(0, 0, 0, 0.16);
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
                        <button class="text-option" data-name="<?php echo $row[2] ?>" data-content="<?php echo $row[3] ?>"><?php echo $row[2] ?></button>
                <?php
                    }
                }
                ?>
            </div>
            <div class="content">
                <div class="content-title">Xem trước</div>
                <div class="content-data"></div>
                <button href="./addTest.php" class="text-add" id="deloy">Áp dụng</button>
            </div>
        </div>
    </header>
</body>