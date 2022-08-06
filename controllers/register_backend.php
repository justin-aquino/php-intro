<?php
    require("connection.php");
    $username = $_POST['username'];
    $password = sha1($_POST['password']); //sha1 for hashing password
    $confirm_password = sha1($_POST['confirm-password']); //must also hash in login to compare the hash.

    if ($password != $confirm_password){
        //password do not match
        header("location: ../register.php");
    } else  {
        //checks if username already exists
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            header("location: ../register.php");
        } else {
            //save to the database.
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            mysqli_query($conn, $sql);


            //error handling
            if(mysqli_error($conn)){ //checking for error in query. Different from checking db connection error.
                echo mysqli_error($conn);
            } else {
                header("location: ../login.php");
            }
        }
    }

?>