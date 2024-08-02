<?php
$txtName = $_POST['txtName'] ?? "";
$rdoTools = $_POST['favorite_tool'] ?? "";


$chkHTML = isset($_POST['boxHTML']) ? "checked" : "";
$chkCSS = isset($_POST['boxCSS']) ? "checked" : "";
$chkPHP = isset($_POST['boxPHP']) ? "checked" : "";

$ddlAnime = isset($_POST['Anime']) ?? "";

$txtComments = $_POST['comments'] ?? "";
print_r($_POST);
echo  "<br>";
//print_r($_POST);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 31</title>
</head>
<body>
<?php
if ($_POST){

    echo '<strong>Hola</strong>:' . htmlspecialchars($txtName);
    echo '<strong>You selected </strong>:' . htmlspecialchars($rdoTools) . "<br>";

"<br>";
} ?>

<label for="input_Name">Name:</label><br>
<form action="exercise31.php" method="post">
    <input type="text" name="txtName" id="input_Name" value="<?php echo $txtName ?>"><br>
    <label for="choice">Your favorite tool</label><br>

        <label for="html">HTML</label>
        <input type="radio" <?php echo ($rdoTools == "HTML")?"checked":""; ?> id="html" name="favorite_tool" value="HTML" checked><br>

        <label for="css">CSS</label>
        <input type="radio" <?php echo ($rdoTools == "CSS")?"checked":""; ?> id="css" name="favorite_tool" value="CSS"><br>

        <label for="php">PHP</label>
        <input type="radio" <?php echo ($rdoTools == "PHP")?"checked":""; ?> id="php" name="favorite_tool" value="PHP"><br>

    <br>

    <label for="choice">What you're learning</label><br>

    <label for="html">HTML</label>
    <input type="checkbox" <?php echo $chkHTML?> name="boxHTML" id="chkHTML" value="yes">
    <label for="css">CSS</label>
    <input type="checkbox" <?php echo $chkCSS?> name="boxCSS" id="chkCSS" value="yes">
    <label for="php">PHP</label>
    <input type="checkbox" <?php echo $chkPHP?> name="boxPHP" id="chkPHP" value="yes">

    <br>
    <label for="ddlAnime">Favorite Anime</label>
    <select name="Anime" id="ddlAnime">
        <option value="Naruto" <?php echo ($ddlAnime =="Naruto")?"selected": ""?>>Naruto</option>
        <option value="Bleach" <?php echo ($ddlAnime =="Bleach")?"selected": ""?>>Bleach</option>
        <option value="Boruto" <?php echo ($ddlAnime =="Boruto")?"selected": ""?>>Boruto</option>
        <option value="None">[None of the Above]</option>
    </select>

    <br>
    <label for="txtComments">Any questions?</label><br>
    <textarea name="comments" id="txtComments" cols="30" rows="10"><?php echo htmlspecialchars($txtComments); ?></textarea>
    <br>
    <input type="submit" value="Send"><br>
</form>
</body>
</html>
