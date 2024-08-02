<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 7</title>
</head>
<body>
<form action="exercise7.php" method="post">
    <label for="txtA">Enter a first value</label>
    <input type="text" name="valueA" id="txtA">
    <select name="operation" id="op0">
        <option value="add">+</option>
        <option value="less">-</option>
        <option value="times">*</option>
        <option value="under">/</option>
    </select>
    <br>
    <label for="txtB">Enter a second value</label>
    <input type="text" name="valueB" id="txtB">
    <br>
    <input type="submit" value="Send">
    <br>
    <div class="result" id="res0">
        <?php
        if (isset($_POST['valueA']) && isset($_POST['valueB'])){
            $valA = $_POST['valueA'];
            $valB = $_POST['valueB'];
            $valC = 0; // Initialize $valC
            $operation = $_POST['operation'];

            if (is_numeric($valA) && is_numeric($valB)) {
                switch ($operation){
                    case 'add':
                        $valC = $valA + $valB;
                        echo 'Result: ' . $valC;
                        break;
                    case 'less':
                        $valC = $valA - $valB;
                        echo 'Result: ' . $valC;
                        break;
                    case 'times':
                        $valC = $valA * $valB;
                        echo 'Result: ' . $valC;
                        break;
                    case 'under':
                        if ($valB != 0){
                        $valC = $valA / $valB;
                        echo 'Result: ' . $valC;
                        }else echo 'Division by zero is not allowed<br>';
                        break;
                    default:
                        echo 'Invalid operation selected';
                        exit;
                }

            } else {
                echo 'Please enter valid numbers.';
            }
        }
        ?>
    </div>
</form>
</body>
</html>