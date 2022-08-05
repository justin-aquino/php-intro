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
        header("location: form.html"); //this redirects you to form.html if you try to visit gallery without logging in.
    }
?>

<!-- PHP CAN MIX with HTML AND CSS IN ONE FILE. -->

<style>
    section {
        display: flex;
        justify-content: space-evenly;
    }

    section img {
        width: 30%;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <form action="logout.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</head>
<body>

    <nav>
        <img src="https://placekitten.com/200/500" alt="">
        <span>Hello User!</span>
    </nav>
    <h1>Gallery</h1>
    <section>
        <img src="https://placekitten.com/200/320" alt="">
        <img src="https://placekitten.com/200/330" alt="">
        <img src="https://placekitten.com/200/340" alt="">
    </section>


</body>
</html>


