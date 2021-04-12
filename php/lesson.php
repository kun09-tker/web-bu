<?php
    function url(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTP']) && $_SERVER['HTTPS'] != 'off' ? 'http' : 'http',$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']
        );
    }
    use function PHPSTORM_META\type;
    $con = mysqli_connect("localhost","root","","typing");
    if (isset($_GET["lesson"]) && $_GET["lesson"] >=0 && $_GET["lesson"] < 72 && is_numeric($_GET["lesson"])) {
        $lesson = "";
        $lesson = $_GET['lesson'];
        $content = $con->query("SELECT content from lesson where id= $lesson");
        $row = $content->fetch_assoc();
        $tent = $row["content"];

        //
        $url = url();
        $index = strrpos($url,'=');
        $url = substr($url,0,$index+1);
        $url_next = $url.strval($lesson+1);
        $url_again = $url.strval($lesson);
        $url_prev = $url.strval($lesson-1);
    }
    else {
        header("Location: Trangchu.html");
    }
?>