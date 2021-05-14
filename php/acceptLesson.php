<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$row = "";
$lessonArr = array();
if (isset($_SESSION["userInWeb"])) {
    $id = $_SESSION["userInWeb"];
    $select = $con->query("SELECT* From pass_lesson where id_user = '$id'");
    if ($select) {
        while ($row = mysqli_fetch_row($select)) {
            $lesson = $row[1];
            if ($lesson > 33) $lesson = $lesson -  43;
            array_push($lessonArr, array(
                "lesson" => $row[1],
                "time"   => $row[2],
                "acc"   => $row[3],
                "day"   => $row[4],
            ));
        }
    }
    $js = json_encode($lessonArr);
    // echo "hello world";
    echo $js;
}
