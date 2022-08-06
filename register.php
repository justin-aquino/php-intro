<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form action="controllers/register_backend.php" method="post">
        <label for="username">username: </label>
        <input type="text" name="username" id="username" />
        <br>
        <label for="password">password: </label>
        <input type="password" name="password" class="password" />
        <br>
        <label for="confirm-password">confirm password: </label>
        <input type="password" name="confirm-password" class="password" />
        <br>
        <input type="submit" value="submit" />
    </form>
</body>
</html>