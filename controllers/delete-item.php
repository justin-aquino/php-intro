<?php
    require("connection.php");

    $sql = "DELETE FROM items WHERE id = $id";

    mysqli_query($conn, $sql);
    
    if(mysqli_error($conn)) {
       die(mysqli_error($conn)); //if there's an error, die prints the error and stops.
    } else {
        header("location: ../gallery.php");
    }
?>