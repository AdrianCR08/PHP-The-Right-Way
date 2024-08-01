<?php
require_once 'exercise27.php';

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
    echo "Successfully connected<br>";

    $sql = "INSERT INTO `fotos` (`id`, `name`, `path`) VALUES (NULL, 'Don\'t give up', 'fotos/2024/up.jpeg')";
    // $pdo->exec($sql);


}catch (PDOException $e){
    throw new PDOException($e -> getMessage(), (int)$e -> getCode());
    echo "Something went wrong<br>";
}
