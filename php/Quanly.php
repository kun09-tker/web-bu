<?php
session_start();
$type = isset($_POST["type"]) ? $_POST["type"] : 0;
$lessonArr = array();
$con = mysqli_connect("localhost", "root", "", "typing");
if ($type == 0) {
    $id = $_POST["req"];
    if ($id != "") {
        $select = $con->query("SELECT* From user where first_name like '%$id%'");
        if ($select->num_rows == 0) {
            $select = $con->query("SELECT* From user where last_name like '%$id%'");
            // echo $select->num_rows;
        }
        if ($select->num_rows == 0) {
            $select = $con->query("SELECT* From user where email like '%$id%'");
            // echo $select->num_rows;
        }
        if ($select->num_rows == 0) {
            $select = $con->query("SELECT* From user where username like '%$id%'");
            //echo $select->num_rows;
        }
        if ($select->num_rows == 0 && is_numeric($id)) {
            $select = $con->query("SELECT* From user where wpm like '%$id%'");
            // echo $select->num_rows;
        }
        if ($select->num_rows == 0 && is_numeric($id)) {
            $select = $con->query("SELECT* From user where id = '$id'");
            // echo $select->num_rows;
        }
        if ($select->num_rows == 0 && is_numeric($id)) {
            $select = $con->query("SELECT* From user where acc like '%$id%'");
            // echo $select->num_rows;
        }
    } else {
        $select = $con->query("SELECT* From user");
    }
    if ($select) {
        while ($row = mysqli_fetch_row($select)) {
            array_push($lessonArr, array(
                "ten" => $row[5] . " " . $row[6],
                "email"   => $row[3],
                "username"   => $row[1],
                "wpm"   => $row[7],
                "check" => $row[4],
                "id" => $row[0],
                "acc" => $row[8],
            ));
        }
    }
    $js = json_encode($lessonArr);
    echo $js;
}
if ($type == 1) {
    $idChange = $_POST["idChange"];
    $statusChange = $_POST["statusChange"];
    if ($statusChange == "true") $statusChange = "verified";
    else $statusChange = "no verified";
    $update = "UPDATE user SET is_verified='$statusChange' WHERE id = '$idChange'";
    $con->query($update);
}
