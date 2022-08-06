<?php

    require("connection.php");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $image = $_POST['image'];

    // echo "$name $price $category_id $image";

    $sql = "INSERT INTO items (name, price, image, category_id)
            VALUES ($name, $price, $image, $category_id)
            "
    msqli_query($conn, $sql)
?>