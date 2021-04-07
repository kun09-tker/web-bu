<?php
if (isset($_POST["type"])) {
    $type = $_POST["type"];
    if ($type == "fj") {
        echo "fj";
    }
    if ($type == "gh") {
        echo "gh";
    }

}