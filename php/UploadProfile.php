<?php

use function PHPSTORM_META\type;

session_start();
$type = isset($_POST["type"]) ? $_POST["type"] : "";
$con = mysqli_connect("localhost", "root", "", "typing");
$idUser = "";
$userArray = [];
if ($type == 0) {
    $idUser = $_POST["idUser"];
    if ($idUser != "") {
        $select = $con->query("SELECT u.avt,u.username,u.first_name,u.last_name,u.wpm,u.acc,u.email,u.tel,u.address,u.bir,COUNT(ps.id_lesson) as total_lesson FROM user u, pass_lesson ps WHERE u.id = ps.id_user AND u.id = '$idUser'");
        $row = mysqli_fetch_row($select);
        $myfile = fopen($row[0], "r") or die("Unable to open file!");
        array_push($userArray, array(
            "avt" => fread($myfile, filesize($row[0])),
            "username" => $row[1],
            "name"   => $row[2] . " " . $row[3],
            "wpm"   => $row[4],
            "acc"   => $row[5],
            "email" => $row[6],
            "tel" => $row[7],
            "address" => $row[8],
            "bir" => $row[9],
            "total" => $row[10],
        ));
        fclose($myfile);
        $js = json_encode($userArray);
        echo $js;
    }
} else if ($type == 1) {
    $avt = $_POST["avt"];
    $idUser = $_POST["idUser"];
    if ($idUser != "") {
        $myfile = fopen("../public/avt/$idUser.txt", "w") or die("Unable to open file!");
        $dir = "../public/avt/$idUser.txt";
        fwrite($myfile, $avt);
        fclose($myfile);
        $update = "UPDATE user SET avt = '$dir' where id = '$idUser'";
        if (!mysqli_query($con, $update)) {
            print_r(mysqli_error($con));
        }
    }
} else if ($type == 2) {
    $idUser = $_POST["idUser"];
    if ($idUser != "") {
        $select = $con->query("SELECT* FROM pass_lesson WHERE id_user = '$idUser'");
        if ($select) {
            while ($row = mysqli_fetch_row($select)) {
                array_push($userArray, array(
                    "idLesson" => $row[1],
                    "acc" => $row[3],
                    "day"   => $row[4],
                ));
            }
        }
        $jsr = json_encode($userArray);
        echo $jsr;
    }
} else if ($type == 3) {
    $idUser = $_POST["idUser"];
    if ($idUser != "") {
        $select = $con->query("SELECT l.Name, l.day,l.thich,l.khong_thich FROM list_test l WHERE l.id_user = '$idUser'");
        while ($row = mysqli_fetch_row(($select))) {
            array_push($userArray, array(
                "name" => $row[0],
                "day" => $row[1],
                "like"   => $row[2],
                "dislike"   => $row[3],
            ));
        }
        $jsr = json_encode($userArray);
        echo $jsr;
    }
} else if ($type == 4) {
    $idUser = $_POST["idUser"];
    if ($idUser != "") {
        $select = $con->query("SELECT* FROM practice p WHERE p.id_user = '$idUser'");
        while ($row = mysqli_fetch_row(($select))) {
            array_push($userArray, array(
                "day" => $row[1],
                "wpm" => $row[2],
                "acc"   => $row[3],
            ));
        }
        $jsr = json_encode($userArray);
        echo $jsr;
    }
}
