<?php
$host = "localhost:3306";
$db = "basic";
$user = "root";
$pass = "admin";
$chrs = "utf8mb4";
$attr = "mysql:host=$host;dbname=$db;charset=$chrs";
$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];