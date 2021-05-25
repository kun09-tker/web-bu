<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$name = "";
if (
    isset($_POST["name"])
) {
    $name = $_POST["name"];
    $data = $con->query("SELECT* From list_test where Name = '$name'");
    $data = mysqli_fetch_assoc($data);
    echo $data["Content"];
}
if (isset($_POST["saveName"])) {
    $_SESSION["saveName"] = $_POST["saveName"];
}
if (isset($_POST["saveOnlyTest"])) {
    $_SESSION["saveOnlyTest"] = $_POST["saveOnlyTest"];
}
