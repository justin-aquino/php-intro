<?php
    session_start();

    if(isset($_POST["logout"])){
        $_SESSION["isLoggedIn"] = false;
        echo "logout successful.";
    } else {
        echo "error 404";
    }

?>