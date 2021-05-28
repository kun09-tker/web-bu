<?php

use function PHPSTORM_META\type;

session_start();
$type = isset($_POST["type"]) ? $_POST["type"] : 0;
$lessonArr = array();
$con = mysqli_connect("localhost", "root", "", "typing");
if ($type == 0) {
    $id = $_POST["req"];
    if ($id != "") {
        $select = $con->query("SELECT* From list_test where Name like '%$id%'");
        if ($select->num_rows == 0) {
            $select = $con->query("SELECT* From list_test where Content like '%$id%'");
            // echo $select->num_rows;
        }
        if ($select->num_rows == 0 && is_numeric($id)) {
            $select = $con->query("SELECT* From list_test where id_user = '$id'");
            // echo $select->num_rows;
        }
    } else {
        $select = $con->query("SELECT* From list_test ORDER BY thich DESC, khong_thich ASC");
    }
    if ($select) {
        while ($row = mysqli_fetch_row($select)) {
            array_push($lessonArr, array(
                "idUser" => $row[1],
                "ten"   => $row[2],
                "content"   => $row[3],
                "id"   => $row[0],
                "day" => $row[6],
                "like" => $row[4],
                "dislike" => $row[5],
            ));
        }
    }
    $js = json_encode($lessonArr);
    echo $js;
}
if ($type == 1) {
    $idChange = $_POST["idChange"];
    $delete = "DELETE FROM list_test WHERE  id = '$idChange'";
    $con->query($delete);
}
if ($type == 2) {
    $idTest = $_POST["idTest"];
    $Content = $_POST["Content"];
    $update = "UPDATE list_test SET Content= \"$Content\" WHERE id = $idTest";
    if (!mysqli_query($con, $update)) {
        print_r(mysqli_error($con));
    }
}
