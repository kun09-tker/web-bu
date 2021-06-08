<?php
session_start();
$type = isset($_POST["type"]) ? $_POST["type"] : 0;
$con = mysqli_connect("localhost", "root", "", "typing");
$id = isset($_SESSION["userInWeb"]) ? $_SESSION["userInWeb"] : "";
$wpm = "";
$acc = "";
$date = "";
$RankArr = [];
if ($type == "0" && $id != "") {
    $wpm = $_POST["wpm"];
    $date = $_POST["day"];
    $acc = $_POST["acc"];
    $check = $con->query("SELECT* From practice where id_user = '$id' AND day = '$date'");
    $user = $con->query("SELECT* From user where id = '$id'");
    $user = mysqli_fetch_assoc($user);
    if ($user["acc"] >= $acc && $user["wpm"] >= $wpm) {
        $acc = $info["acc"];
        $wpm = $info["wpm"];
    }
    $update = "UPDATE user SET acc = '$acc', wpm ='$wpm' where id ='$id'";
    $con->query($update);
    if ($check->num_rows > 0) {
        $info = mysqli_fetch_assoc($check);
        if ($info["acc"] >= $acc && $info["wpm"] >= $wpm) {
            $acc = $info["acc"];
            $wpm = $info["wpm"];
        }
        print_r("update");
        $update = "UPDATE practice SET acc = '$acc', wpm ='$wpm' where id_user = '$id' AND day = '$date'";
        if (!mysqli_query($con, $update)) {
            print_r(mysqli_error($con));
        }
    } else {
        print_r("insert");
        print_r($acc);
        print_r($wpm);
        // $update = "UPDATE pass_lesson SET password = '$md5password' WHERE email = '$email'";
        $insert = "INSERT INTO practice (id_user,day,wpm,acc) 
        value ('$id','$date','$wpm','$acc')";
        $con->query($insert);
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
