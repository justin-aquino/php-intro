<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="index.php" method="post">
      <!-- send the form to index.php
        only post and get method just like EJS
    -->
      <label for="username">username: </label>
      <input type="text" name="username" id="username" />
      <label for="password">password: </label>
      <input type="password" name="password" id="password" />
      <input type="submit" value="submit" />
    </form>

    <!-- 
        The superglobal variables $_GET and $_POST are associative arrays that will contain
        the form data depending on your method.

        so when you submit the form, you can access the username and password values via $_GET/$_POST

    -->
  </body>
</html>
