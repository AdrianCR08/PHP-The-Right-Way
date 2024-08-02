<?php

if ($_POST){
    // Get information from HTML form (method POST)
    $name = $_POST['txtName'];

    echo "Hello " . $name;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 2</title>


</head>
<body>
<form action="exercise2.php" method="post">
    <label for="Name0">Enter your name:</label><input type="text" name="txtName" id="Name0">
    <br>
    <input type="submit" value="Send">
</form>
</body>
</html>