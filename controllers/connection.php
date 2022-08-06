<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "restoapp-practice";

    $conn = mysqli_connect($host, $username, $password, $db);

    if($conn) {
        echo "successfully connected to the $db";
    } else {
        echo mysqli_connect_error();
    }


    //make sure you define your tables properly. Unique usernames, and auto increment ids
?>