<?php

use function PHPSTORM_META\type;

session_start();
$type = isset($_POST["type"]) ? $_POST["type"] : 0;
$con = mysqli_connect("localhost", "root", "", "typing");
$id =  isset($_SESSION["userInWeb"]) ? $_SESSION["userInWeb"] : "";
if ($type == 1) {
    $avt = $_POST["avt"];
    if ($id != "") {
        $update = "UPDATE user SET avt = '$avt' where id = '$id'";
        if (!mysqli_query($con, $update)) {
            print_r(mysqli_error($con));
        }
    }
}
