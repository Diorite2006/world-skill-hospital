<?php

    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "db_ws_hospital";

    $conn = mysqli_connect($host, $user, $password, $db);
    $conn->set_charset("utf8");

    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");
    $time = date("H:i:s");

    if(!$conn){
        echo "No connect";
    }

?>