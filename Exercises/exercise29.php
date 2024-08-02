<?php
require_once 'exercise27.php';

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
    echo "Successfully connected from exercise29<br>";


    $sql = "SELECT * FROM `fotos`";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(); // Execute the prepared statement

    $res = $stmt->fetchAll();

    foreach ($res as $r) {
        print_r($r);
    }




} catch (PDOException $e){
    throw new PDOException($e -> getMessage(), (int)$e -> getCode());
    echo "Something went wrong<br>";
}