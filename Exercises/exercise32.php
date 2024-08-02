<?php
if ($_POST){
    print_r($_POST);
    print_r($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 32</title>
</head>
<body>
<form action="exercise32.php" enctype="multipart/form-data" method="post">

    <label for="inpFile">Image</label>
    <br>
    <input type="file" name="file" id="inpFile">
    <br>
    <input type="submit" name="send" value="send">
</form>

</body>
</html>
