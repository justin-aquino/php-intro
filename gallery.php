<?php
    session_start(); //have to do this so you can access $_SESSION variable.

    // if(isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"]){ 
    //     //isset() function checks if a variable has been declared.
    //     echo "user has logged in";
    // } else {
    //     echo "user has failed to login. <br>";
    //     echo "<a href='login.html'>Login</a>";
    // }

    if(!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]) {
        header("location: login.php"); //this redirects you to form.html if you try to visit gallery without logging in.
    }

    require("controllers/items.php");
?>

<!-- PHP CAN MIX with HTML AND CSS IN ONE FILE. -->

<style>
    section {
        display: flex;
        justify-content: space-evenly;
    }

    img {
        width: 100px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <form action="controllers/logout.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</head>
<body>

    <nav>
        <img src="https://placekitten.com/200/500" alt="">
        <span>Hello User!</span>
    </nav>
    <h1>Gallery</h1>
    <a href="add-item.php">
        <button>Add Item</button>
    </a>
    <section>
        <?php
            // foreach($items as $item) {
            //     echo "
            //         <div>
            //             <img src='" . $item['image'] . "' > 
            //         </div>
            //     ";
            //     // You have to use . concat because you already used both single and double quotes
            //     //or you can deconstruct and save them in another variable.
            //     //ex $image = $item["image"]
            
            // }


            //YOU CAN ALSO USE EXTRACT.

            // <?= is shorthand for echo.

            foreach($items as $item) {
                extract($item)
        ?>
            <div>
                <img src="<?php echo $image; ?>" alt="">
                <h2><?php echo $item_name ?></h2>
                <p><?php echo $price ?></p>
                <p><?php echo $category_name ?></p> <!-- you need to JOIN tables to populate
                    check sql query command to avoid overriding the name for the item, and the name for the category.
            -->
                <p>
                    <a href="update_item.php?id=<?= $item_id ?>">
                        <button>Edit</button>
                    </a>
                    <button class="delete-btn">Delete</button>
                </p>
            </div>
        <?php
            } //this is the closing for the foreach and replace { with :
            //you can also  use endforeach; to end the foreach instead of a closing curly.
        ?>
    </section>


</body>
</html>


