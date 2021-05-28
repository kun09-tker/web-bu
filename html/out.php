<?php
session_start();
error_reporting(0);
unset($_SESSION["userInWeb"]);
header("Location: ./Trangchu.php");
