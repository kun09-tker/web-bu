<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$lesson = isset($_POST['lesson']) ? $_POST['lesson'] : null;
$type = isset($_POST['type']) ? $_POST['type'] : 0;
$lessonArr = array();
$RankArr = array();
if ($type == 1) {
    $id = $_POST["lesson"];
    $select = $con->query("SELECT u.first_name, u.last_name ,u.username, pl.time, pl.accuracy, pl.day, u.avt From pass_lesson pl, user u where pl.id_user =u.id AND pl.id_lesson = '$id'  ORDER BY time, accuracy");
    if ($select) {
        while ($row = mysqli_fetch_row($select)) {
            $myfile = fopen($row[6], "r") or die("Unable to open file!");
            array_push($RankArr, array(
                "name" => $row[0] . " " . $row[1],
                "user" => $row[2],
                "time"   => $row[3],
                "acc"   => $row[4],
                "day"   => $row[5],
                "avt" => fread($myfile, filesize($row[6])),
            ));
            fclose($myfile);
        }
    }
    $jsr = json_encode($RankArr);
    echo $jsr;
} else if ($type == 0) {
    $id = $_SESSION["userInWeb"];
    $select = $con->query("SELECT* From pass_lesson where id_user = '$id'");
    if ($select) {
        while ($row = mysqli_fetch_row($select)) {
            array_push($lessonArr, array(
                "lesson" => $row[1],
                "time"   => $row[2],
                "acc"   => $row[3],
                "day"   => $row[4],
            ));
        }
    }
    $js = json_encode($lessonArr);
    echo $js;
}
