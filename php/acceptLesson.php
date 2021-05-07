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
            array_push($lessonArr, $row[1]);
        }
    }
    $js = json_encode($lessonArr);
    echo $js;
}

