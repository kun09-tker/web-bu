<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$id = isset($_SESSION["userInWeb"]) ? $_SESSION["userInWeb"] : "";
$wpm = "";
$acc = "";
$date = "";
if ($id != "") {
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
        // $update = "UPDATE pass_lesson SET password = '$md5password' WHERE email = '$email'";
        $insert = "INSERT INTO practice (id_user,day,wpm,acc) 
        value ('$id','$date','$wpm','$acc')";
        $con->query($insert);
    }
}
