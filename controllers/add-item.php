<?php

    require("connection.php");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $image = $_POST['image'];

    echo "$name $price $category_id $image";

    $sql = "INSERT INTO items (name, price, image, category_id)
            VALUES ('$name', $price, '$image', $category_id)
            ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_error($conn)){
        die(mysqli_error($conn));
    }

    header("location: ../gallery.php");
?>