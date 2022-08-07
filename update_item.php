<?php
    require("controllers/connection.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM items WHERE id = $id";

    $item = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 
    //since you're only getting one result, convert it to associative array using fetch_assoc so you can
    //access the data right away.

    // print_r($item);
    $sql = "SELECT * FROM categories";
    $categories = mysqli_query($conn, $sql);

    $selected;

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
    <!-- <form action="">
        <label for="name">Name: </label>
        <input type="text" name="name" id=""  ?>">
        <label for="price">Price: </label>
        <input type="number" name="price" id=""  ?>">
        <label for="category">category: </label>
        <input type="text" name="category" id="">
        <label for="image">image: </label>
        <input type="text" name="image" id="" >

        <input type="submit" value="Submit">
    </form> -->
    <form action="controllers/update-item.php?item_id=<?= $item['id'] ?>" method="post">
        <label hidden for="item_id">item_id</label>
        <input hidden type="number" name="item_id" value="<?= $item['id'] ?>">
        <label for="name">Name: </label>
        <input type="text" name="name" value="<?= $item['name'] ?>"> 
        <br>
        <label for="price">Price: </label>
        <input type="text" name="price" value="<?= $item['price'] ?>"> 
        <br>
        <label for="category_id">Category: </label>
        <select name="category_id" value="<?= $item['category_id'] ?>">
            <?php
                foreach($categories as $category) :?>
                    <option 
                        <?= 
                            $category['id'] == $item['category_id'] ? 'selected' : ''
                        ?>
                        value="<?=  $category['id'] ?>"> <?= $category["name"] ?>
                    </option> <!-- value should be category because we're saving the id to the db. Not the name. -->
            <?php endforeach ?>
        </select> 
        <br>
        <label for="image">Image: </label>
        <input type="text" name="image" value="<?= $item['image'] ?>"> 
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>