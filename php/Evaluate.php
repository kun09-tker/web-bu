<?php
session_start();
$index = isset($_POST["index"]) ? $_POST["index"] : 0;
$id = isset($_SESSION["userInWeb"]) ? $_SESSION["userInWeb"] : "";
$con = mysqli_connect("localhost", "root", "", "typing");
$value = "";
$idList = "";
$like = "";
$dislike = "";
if ($index == 0 && $id != "") {
    $value = $_POST["value"];
    $idList = $_POST["idList"];
    $check = $con->query("SELECT* From evaluate where id_user = '$id' AND id_list = '$idList'");
    if ($check->num_rows > 0) {
        $update = "UPDATE evaluate SET value = '$value' where id_user = '$id' AND id_list = '$idList'";
        if (!mysqli_query($con, $update)) {
            print_r(mysqli_error($con));
        }
    } else {
        print_r("insert");
        // $update = "UPDATE pass_lesson SET password = '$md5password' WHERE email = '$email'";
        $insert = "INSERT INTO evaluate (id_user,id_list,value) 
        value ('$id','$idList','$value')";
        if (!mysqli_query($con, $insert)) {
            print_r(mysqli_error($con));
        }
    }
}
if ($index == 1 && $id != "") {
    $idList = $_POST["idList"];
    $like = $_POST["countLike"];
    $dislike = $_POST["countDisLike"];
    $update = "UPDATE list_test SET thich = '$like', khong_thich = '$dislike' where id = '$idList'";
    if (!mysqli_query($con, $update)) {
        print_r(mysqli_error($con));
    }
}
