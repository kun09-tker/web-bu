<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$lesson = "";
$id = "";
$time = "";
$acc = "";
$date = date("Y/m/d");
if (
    isset($_POST["lesson"])
    && isset($_SESSION["userInWeb"])
    && isset($_POST["time"])
    && isset($_POST["acc"])
) {
    $lesson = $_POST["lesson"];
    $id = $_SESSION["userInWeb"];
    $time = $_POST["time"];
    $acc = $_POST["acc"];
    $check = $con->query("SELECT id_user From pass_lesson where id_user = '$id' AND id_lesson = '$lesson'");
    //print_r($check);
    if ($check->num_rows > 0) {
        print_r("update");
        $update = "UPDATE pass_lesson SET time = '$time', accuracy = '$acc', day = '$date' where id_user = $id AND id_lesson = $lesson";
        //$con->query(($update));
        if (!mysqli_query($con, $update)) {
            print_r(mysqli_error($con));
        }
    } else {
        print_r("insert");
        // $update = "UPDATE pass_lesson SET password = '$md5password' WHERE email = '$email'";
        $insert = "INSERT INTO pass_lesson (id_user,id_lesson,time,accuracy,day) 
        value ('$id','$lesson','$time','$acc','$date')";
        $con->query($insert);
    }
}
