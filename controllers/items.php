<?php
    require("controllers/connection.php");
    $sql = "SELECT items.name AS item_name,
            price, 
            categories.name AS category_name,
            image,
            items.id AS item_id,
            categories.id AS category_id
            FROM items JOIN categories ON items.category_id = categories.id";
    $items = mysqli_query($conn, $sql);
?>