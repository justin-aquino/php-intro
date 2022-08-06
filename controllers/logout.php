<?php
    session_start();

    if(isset($_POST["logout"])){
        $_SESSION["isLoggedIn"] = false;
        header("location: ../login.php");
    } else {
        echo "error 404";
    }

?>