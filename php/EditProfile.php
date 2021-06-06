<?php
session_start();
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "typing");
$id = $_SESSION["userInWeb"];
$select = $con->query("SELECT * FROM user WHERE id = '$id'");
$select = mysqli_fetch_assoc($select);
$tel = $select["tel"];
$bir = $select["bir"];
$address = $select["address"];
$first_name = $select["first_name"];
$last_name = $select["last_name"];
if (isset($_POST["edit"])) {
    $tel = $_POST["tel"];
    $bir = $_POST["bir"];
    $address = $_POST["address"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    if ($tel != "") {
        $con->query("UPDATE user u SET u.tel = '$tel' WHERE u.id = '$id'");
    }
    if ($bir != "") {
        $con->query("UPDATE user u SET u.bir = '$bir' WHERE u.id = '$id'");
    }
    if ($address != "") {
        $con->query("UPDATE user u SET u.address = '$address' WHERE u.id = '$id'");
    }
    if ($first_name != "") {
        $con->query("UPDATE user u SET u.first_name = '$first_name' WHERE u.id = '$id'");
    }
    if ($last_name != "") {
        $con->query("UPDATE user u SET u.last_name = '$last_name' WHERE u.id = '$id'");
    }
    header("Location: ./profile2.php");
}
