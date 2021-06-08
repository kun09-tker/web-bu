<?php
session_start();
$type = isset($_POST["type"]) ? $_POST["type"] : 0;
$con = mysqli_connect("localhost", "root", "", "typing");
$id = isset($_SESSION["userInWeb"]) ? $_SESSION["userInWeb"] : "";
$wpm = "";
$acc = "";
$count = "";
$wpm_avg = "";
$acc_avg = "";
$date = "";
$RankArr = [];
if ($type == "0" && $id != "") {
    $wpm = $_POST["wpm"];
    $date = $_POST["day"];
    $acc = $_POST["acc"];
    $check = $con->query("SELECT* From practice where id_user = '$id' AND day = '$date'");
    if ($check->num_rows > 0) {
        $info = mysqli_fetch_assoc($check);
        $count = $info["count"] + 1;
        $wpm = (($count - 1) * $info["wpm"] + $wpm) / ($count);
        $acc = (($count - 1) * $info["acc"] + $acc) / ($count);
        print_r("update");
        $update = "UPDATE practice SET count = '$count', acc = '$acc', wpm ='$wpm' where id_user = '$id' AND day = '$date'";
        if (!mysqli_query($con, $update)) {
            print_r(mysqli_error($con));
        }
    } else {
        print_r("insert");
        print_r($acc);
        print_r($wpm);
        // $update = "UPDATE pass_lesson SET password = '$md5password' WHERE email = '$email'";
        $insert = "INSERT INTO practice (id_user,day,wpm,acc,count) 
        value ('$id','$date','$wpm','$acc','1')";
        $con->query($insert);
    }
    $total = $con->query("SELECT SUM(p.wpm) as wpm, SUM(p.acc) as acc, COUNT(p.wpm) as total FROM practice p WHERE p.id_user ='$id'");
    $total = mysqli_fetch_assoc($total);
    if ($total["total"] > 0) {
        $wpm_avg = ($total["wpm"]) / ($total["total"]);
        $acc_avg = ($total["acc"]) / ($total["total"]);
        $update = "UPDATE user SET acc = '$acc_avg', wpm ='$wpm_avg' where id = '$id'";
        $con->query($update);
        echo $wpm . " " . $acc . " " . $count;
    }
}
if ($type == 1) {
    $select = $con->query("SELECT * FROM user ORDER BY acc DESC, wpm DESC");
    if ($select) {
        while ($row = mysqli_fetch_row($select)) {
            $myfile = fopen($row[9], "r") or die("Unable to open file!");
            array_push($RankArr, array(
                "name" => $row[5] . " " . $row[6],
                "user" => $row[1],
                "wpm"   => $row[7],
                "acc"   => $row[8],
                "avt" => fread($myfile, filesize($row[9])),
                "id" => $row[0],
            ));
            fclose($myfile);
        }
    }
    $jsr = json_encode($RankArr);
    echo $jsr;
}
