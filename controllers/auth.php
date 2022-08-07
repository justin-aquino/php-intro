<?php
 session_start();
    //LOGIN WITH BACKEND
    require("connection.php"); //this basically copies and pastes connection.php

    //TO QUERY TO THE DB:
    $username = $_POST["username"]; //what you receive from the forms.
    $password = sha1($_POST["password"]);
    //NOTE FOR SHA1. Your structure should be atleast VARCHAR(40). anything less will give an error.


    // $sql = "SELECT * FROM users";
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql); //1st arg is the connection, 2nd arg is the sql command. 
    //Will return mysqli_result object. 

    echo $password;
    print_r($result);

    if(mysqli_num_rows($result) == 1) { //pass in query result to get the num_rows
        //credentials exists, so log user in.
        $user = mysqli_fetch_assoc($result);
        $_SESSION["isLoggedIn"] = true;
        $_SESSION["username"] = $user["username"];
        $_SESSION["role"] = $user["role"];
        header("location: ../gallery.php");
    } else {
        $_SESSION["isLoggedIn"] = false;
        header("location: ../login.php");
    }
    //everytime you query, you need to pass the $conn variable so the app knows which db to query from.
    //and then you save it in $result variable.
    
    // $users = [
    //     ["username" => "user1", "password" => "password1"],
    //     ["username" => "user2", "password" => "password2"],
    //     ["username" => "user3", "password" => "password3"],
    // ];

    // $username = $_POST["username"];
    // $password = $_POST["password"];
    // echo "username: $username <br> password: $password";

    //check if user credentials exists in users array



    // // $found = false;

    // //VARIABLES OUTSIDE FUNCTIONS IS NOT ACCESSIBLE INSIDE FUNCTIONS. USE KEYWORD GLOBAL

    // $log = ["username" => $username, "password" => $password];

    // function check_login($user) {
    //     global $log;
    //     return $user == $log;
    // }

    // $result = array_filter($users, "check_login");

    // if(count($result) == 0) {
    //     $_SESSION["isLoggedIn"] = false;
    //     echo "login failed";
    //     header("location: ../login.php");
    // } else {
    //     $_SESSION["isLoggedIn"] = true;
    //     header("location: ../gallery.php");
    // }

// foreach($users as $user){
//     if ($user == $log){
//         $found = true;
//         echo " <br> login successful";
//         break;
//     }
// }
// if (!$found) {
//     echo "<br> login failed";
// }


//REGISTRATION WITH BACKEND

?>