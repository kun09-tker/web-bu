<?php
session_start();
error_reporting(0);
//session_destroy();
$con = mysqli_connect("localhost", "root", "", "typing");
$check = true;
$firstname = "";
$lastname = "";
$email = "";
if (isset($_SESSION["e"])) $email = $_SESSION["e"];
$username = "";
$md5password = "";
$code = 0;
if (isset($_SESSION["otp"])) $code = $_SESSION["otp"];
$password = "";
$re_password = "";
$otp = "";
$email_or_username = "";
$erro = array();
$count = 0;
if (isset($_POST["dangky"])) {
    // echo "<h1>HI</h1>";
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $re_password = $_POST["re_password"];
    $resultUserCheck = $con->query("SELECT username From user where username = '$username'");
    $resultEmailCheck = $con->query("SELECT email from user where email = '$email'");
    if ($password !== $re_password) {
        $erro['re_password'] = "Mật khẩu nhập lại không khớp";
        $check = false;
    }
    if ($resultUserCheck->num_rows > 0) {
        $erro['user'] = "Tên username của bạn đã tồn tại";
        $check = false;
    }
    if ($resultEmailCheck->num_rows > 0) {
        $erro['email'] = "Email này đã được đăng ký";
        $check = false;
    }
    if (count($erro) == 0) {
        $code = rand(111111, 999999);
        $subject = "Email Verification OTP";
        $message = "Your verification OTP is $code";
        $sender = "From: ah09program@gmail.com";
        mail($email, $subject, $message, $sender);
        $_SESSION["otp"] = $code;
        $_SESSION["user"] = $username;
        $_SESSION["fi"] = $firstname;
        $_SESSION["ls"] = $lastname;
        $_SESSION["pass"] = $password;
        $_SESSION["e"] = $email;
        $_SESSION["count"] = 0;
        header("location: ../html/otp.php");
    }
}
if (isset($_POST["forgotPassword"])) {
    $email = $_POST["Email"];
    $code = rand(111111, 999999);
    $subject = "Email Verification OTP";
    $message = "Your verification OTP is $code";
    $sender = "From: ah09program@gmail.com";
    mail($email, $subject, $message, $sender);
    $_SESSION["otp"] = $code;
    $_SESSION["e"] = $email;
    $_SESSION["count"] = 0;
}
if (isset($_POST["forgotOTP"])) {
    $otp = $_POST["OTP"];
    $code = $_SESSION["otp"];
    if ($code != $otp) {
        $erro['otp'] = "Mã OTP không đúng";
        $count = $_SESSION["count"] + 1;
        $_SESSION["count"] = $count;
        // print_r($count);
    }
    if ($count > 4) {
        $_SESSION["otp"] = NULL;
        $_SESSION["e"] = NULL;
        header("location: ../html/Trangchu.php");
    }
    if (count($erro) == 0) {
        $_SESSION["otp"] = NULL;
        $_SESSION["count"] = NULL;
        header("location: ../html/changePassword.php");
    }
}
if (isset($_POST["changePassword"])) {
    $password = $_POST["password"];
    $re_password = $_POST["re_password"];
    $email = $_SESSION["e"];
    if ($password !== $re_password) {
        $erro['re_password'] = "Mật khẩu nhập lại không khớp";
        $check = false;
    }
    if (count($erro) == 0) {
        $md5password = md5($password);
        $update = "UPDATE user SET password = '$md5password' WHERE email = '$email'";
        $con->query($update);
        header("location: ../html/dangnhap.php");
        $_SESSION["e"] = NULL;
    }
}
if (isset($_POST["active"])) {
    $otp = $_POST["otp"];
    $code = $_SESSION["otp"];
    $firstname = $_SESSION["fi"];
    $lastname = $_SESSION["ls"];
    $email =  $_SESSION["e"];
    $username = $_SESSION["user"];
    $md5password = md5($_SESSION["pass"]);
    if ($code != $otp) {
        $erro['otp'] = "Mã OTP không đúng";
        $count = $_SESSION["count"] + 1;
        $_SESSION["count"] = $count;
    }
    if ($count > 4) {
        $_SESSION["otp"] = NULL;
        $_SESSION["e"] = NULL;
        header("location: ../html/Trangchu.php");
    }
    if (count($erro) == 0) {
        $sign_up = "INSERT INTO user (username,password,email,first_name,last_name) 
        value ('$username','$md5password','$email','$firstname','$lastname')";
        $con->query($sign_up);
        $info = mysqli_fetch_assoc($con->query("SELECT* From user where username = '$username'"));
        $_SESSION["userInWeb"] = $info["id"];
        $_SESSION["otp"] = NULL;
        $_SESSION["user"] = NULL;
        $_SESSION["fi"] = NULL;
        $_SESSION["ls"] = NULL;
        $_SESSION["pass"] = NULL;
        $_SESSION["e"] = NULL;
        header("location: ../html/luyentapcoban.php");
    }
}
if (isset($_POST["dangnhap"])) {
    $check = true;
    $email_or_username = $_POST["emailOrUser"];
    $resultEmailOrUserCheck = $con->query("SELECT* From user where username = '$email_or_username' or email = '$email_or_username'");
    $password = $_POST["password"];

    if (mysqli_num_rows($resultEmailOrUserCheck) > 0) {
        $info = mysqli_fetch_assoc($resultEmailOrUserCheck);
        if ($info["is_verified"] != "no verified") $erro["lock"] = "lock";
        if ($info["password"] == md5($password) && $info["is_verified"] == "no verified") {
            $_SESSION["userInWeb"] = $info["id"];
            header("location: ../html/luyentapcoban.php");
        } else $check = false;
    } else $check = false;
}
if (isset($_POST["dong_gop"])) {
    $firstname = $_POST["name"];
    $lastname = $_POST["content"];
    $username = $_SESSION["userInWeb"];
    $list = $con->query("SELECT* From list_test where Name = '$firstname'");
    if ($list->num_rows > 0) {
        $erro['name'] = "Tên này đã tồn tại";
        $check = false;
    }
    if (count($erro) == 0) {
        $sign_up = "INSERT INTO list_test (id_user,Name,Content) 
        value ('$username','$firstname','$lastname')";
        $con->query($sign_up);
        echo '<script>alert("Thành công!. Cám ơn bạn đã đóng góp");</script>';
    }
}
