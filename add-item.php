<?php
    require("controllers/connection.php");
    
    $sql = "SELECT * FROM categories";
    $categories = mysqli_query($conn, $sql)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>
<body>
    <h1>Add Item</h1>

    <form action="controllers/add-item.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id=""> 
        <br>
        <label for="price">Price: </label>
        <input type="text" name="price" id=""> 
        <br>
        <label for="category_id">Category: </label>
        <select name="category_id" id="">
            <?php
                foreach($categories as $category) :?>
                    <option value="<?= $category['id'] ?>"> <?= $category["name"] ?></option> <!-- value should be category because we're saving the id to the db. Not the name. -->
            <?php endforeach ?>
        </select> 
        <br>
        <label for="image">Image: </label>
        <input type="text" name="image" id=""> 
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>