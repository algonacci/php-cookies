<?php
if (isset($_POST["submit"])) {
 $username = htmlentities($_POST["username"]);

 setcookie("username", $username, time() + 3600);

 header("Location: page2.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="username" placeholder="Enter an username">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>