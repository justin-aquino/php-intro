<?php
    require("controllers/connection.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM items WHERE id = $id";

    $item = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 
    //since you're only getting one result, convert it to associative array using fetch_assoc so you can
    //access the data right away.

    // print_r($item);

    //UPDATE items SET name = '$name', price = '$price', WHERE id = $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>
    <form action="">
        <label for="name">Name: </label>
        <input type="text" name="name" id="" value="<?= $item['name'] ?>">
        <label for="price">Price: </label>
        <input type="number" name="price" id="" value="<?= $item['price'] ?>">
        <label for="category">category: </label>
        <input type="text" name="category" id="" value="<?= $item['category_id'] ?>">
        <label for="image">image: </label>
        <input type="text" name="image" id="" value="<?= $item['image'] ?>">

        <input type="submit" value="Submit">
    </form>
</body>
</html>