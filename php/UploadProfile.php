<?php

use function PHPSTORM_META\type;

session_start();
$type = isset($_POST["type"]) ? $_POST["type"] : 0;
$con = mysqli_connect("localhost", "root", "", "typing");
$id =  isset($_SESSION["userInWeb"]) ? $_SESSION["userInWeb"] : "";
if ($type == 1) {
    $avt = $_POST["avt"];
    $idUser = $_POST["idUser"];
    if ($id != "") {
        $myfile = fopen("../public/avt/$idUser.txt", "w") or die("Unable to open file!");
        $dir = "../public/avt/$idUser.txt";
        fwrite($myfile, $avt);
        fclose($myfile);
        $update = "UPDATE user SET avt = '$dir' where id = '$id'";
        if (!mysqli_query($con, $update)) {
            print_r(mysqli_error($con));
        }
    }
}
