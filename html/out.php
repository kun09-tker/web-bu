<?php
session_start();
error_reporting(0);
session_destroy();
echo "<script>window.history.go(-1);</script>";
