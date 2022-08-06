<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "user";

    $conn = mysqli_connect($server, $username, $password, $database);
    if ($conn) {
        echo "connected";
    }else {
        die("error due to " . mysqli_connect_error());
    }

?>