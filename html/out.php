<?php
session_start();
error_reporting(0);
unset($_SESSION["userInWeb"]);
echo "<script>window.history.go(-1);</script>";
