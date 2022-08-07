<?php

    require("connection.php");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $image = $_POST['image'];
    $item_id = $_POST['item_id'];

    
    $sql = "UPDATE items SET name = '$name', price = $price, image = '$image', category_id = $category_id WHERE id = $item_id";

    mysqli_query($conn, $sql);

    if(mysqli_error($conn)) {
        die(mysqli_error($conn));
    }

    header("location: ../gallery.php")

?>