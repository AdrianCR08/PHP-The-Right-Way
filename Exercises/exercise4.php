<?php
if ($_POST){
   $name = $_POST['txtName'];
   $last = $_POST['txtLast'];
   echo "Hello ".$name." ".$last;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exeercise 5</title>
</head>
<body>
    <form action="exercise4.php" method="post">
        <label for="Name0">Enter your name: </label>
        <input type="text" name="txtName" id="Name0">
        <br>
        <label for="Last0">Enter your Lastname</label>
        <input type="text" name="txtLast" id="Last0">
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>
