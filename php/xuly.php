<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "typing");
$firstname = "";
$lastname = "";
$email = "";
$username = "";
$password = "";
$re_password = "";
$email_or_username = "";
$erro = array();
$check = true;
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
    }
    if ($resultEmailCheck->num_rows > 0) {
        $erro['email'] = "Email này đã được đăng ký";
        $check = false;
    }
    if (count($erro) == 0) {
        $code = rand(111111, 999999);
        $sign_up = "INSERT INTO user (username,password,email,first_name,last_name,otp) 
            value ('$username','$password','$email','$firstname','$lastname',$code)";
        $con->query($sign_up);
        $subject = "Email Verification Code";
        $message = "Your verification code is $code";
        $sender = "From: vhnvohoainam@gmail.com";
        mail($email, $subject, $message, $sender);
    }
}
if (isset($_POST["dangnhap"])) {
    $email_or_username = $_POST["emailOrUser"];
    $resultEmailOrUserCheck = $con->query("SELECT* From user where username = '$email_or_username' or email = '$email_or_username'");
    $password = $_POST["password"];

    if (mysqli_num_rows($resultEmailOrUserCheck) > 0) {
        $info = mysqli_fetch_assoc($resultEmailOrUserCheck);
        if ($info["password"] == $password) {
            $_SESSION["userInWeb"] = $info["id"];
            header("location: ../html/luyentapcoban.php");
        } 
        else $check = false;
    } 
    else $check = false;
}
