<?php
    session_start();
    // $name = "justin";
    // // echo 'Hello World ' . $name ;
    // // echo "Hello $name";

    // // echo 500 <=> 1000; RETURNS -1
    // // echo 1000 <=> 1000; RETURNS 0
    // // echo 2000 <=> 1000; //RETURNS 1


    // // if (true AND true){
    // //     echo "nag true";
    // // } else {
    // //     echo "nag false";
    // // }


    // //VARIABLES
    // /*
    //     - All variables start with $ in PHP, followed by the variable name.
    //     -Name must begin with a letter, or underscore _
    //     -can only contain alpha-numeric and underscore. 
    //     -Case sensitive.
    //     -Can contain number but never begin with a number.
    //     - in PHP, dot means concatenate. 
    //     -There's no back tics in PHP. Double quotes is the equivalent in PHP.
    //     -single quote is literally a string. Double quote is interpolation.
    //     'Hello ' .$name
    //     "Hello $name" both works
    // */

    // //RELATIONAL OPERATORS
    // /*
    //     < LESS THAN
    //     > GREATER THAN
    //     <= LESS THAN OR EQUAL
    //     >= GREATER THAN OR EQUAL
    //     == EQUAL
    //     != NOT EQUAL
    //     <> NOT EQUAL
    //     <=> SPACESHIP THREE WAY COMPARATOR, CHECK KUNG LESS THAN, EQUAL OR GREATER THAN.
    //         - IF LESS THAN, RETURNS -1. IF EQUAL, RETURNS 0, IF GREATER THAN, RETURNS 1
    // */

    // //Numeric/Indexed Array - the same as JS arrays.

    // //ASSOCIATIVE ARRAY
    // /*
    //     -Arrays that have strings as their index. Kind of like objects in JS.

    //     $ppg = [
    //         "pink" => "Blossom",
    //         "blue" => "Bubbles",
    //         "green" => "Buttercup"
    //     ];
    // */

    
    // $ppg = [
    //     "pink" => "Blossom",
    //     "blue" => "Bubbles",
    //     "green" => "Buttercup"
    // ];

    // // echo $ppg["pink"]; //returns blossom
    // // //You can also store the index in a variable. example:

    // // $color = "green";

    // // echo $ppg[$color]; //returns buttercup

    // //MULTI DIMENSIONAL ARRAY

    // // $civilWar = [
    // //     "team iron man" => ["Iron Man", "Black Widow", "Vision"],
    // //     "team cap" => ["Captain America", "Hawkeye", "Scarlet Witch"]
    // // ];

    // //to echo Scarlet Witch,
    // // echo $civilWar["team cap"][2];
    // // //to echo Black Widow,
    // // echo $civilWar["team iron man"][1];

    // //YOU CAN ONLY ECHO STRINGS! YOU HAVE TO LOOP THROUGH ARRAYS.
    // //You can use print_r to print out the whole array.

    // // print_r($civilWar["team cap"])


    // //LOOPS

    // foreach($ppg as $key => $value) {
    //     echo $key . " " . $value . "<br>"; 
        
    //     //Since code blocks in PHP returns HTML, you can concatenate HTML tags to print on next line.
    // }
    
    // //you can go straight to just displaying the values if you dont need the key

    // foreach($ppg as $value) {
    //     echo $value . "<br>";
    // }

    // //FUNCTIONS
    //     /*
    //         -naming convention for functions is snake_case


    //      */

    //      function say_hello ($name, $number) {
    //         echo "hello $name. Call me at $number";
    //      }

    //      say_hello("Justin", 21311);



    //      //ARRAY FILTERS

    //      $numbers = [0,1,2,3,4,5];

    //      function get_even($number) {
    //         return $number % 2 == 0;
    //      }

    //      $even_nums = array_filter($numbers, "get_even" ); //first arg is the paramter that the function is receiving, second arg is the function name

    //      print_r($even_nums);
        // echo "hello"

        // print_r($_POST); //this is where the value from the HTML POST will be stored depending on the method


        //SESSION

        /*
            A session is started with session_start().

            $_SESSION superglobal variable is an associative array.

            $_SESSION["key"] = "value";
            $_SESSION["name"] = "Justin";
            $_SESSION["age"] = 26;
        */

    //LEFT OFF AT 1:28:23 DAY2 PHP
?>
