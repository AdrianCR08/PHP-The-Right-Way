<?php
session_start();

$_SESSION['user'] = 'Adrian';
$_SESSION['status'] = 'Logged in';

echo 'Session started'.':<br>';

echo "User: ".$_SESSION['user']." status: ".$_SESSION['status'];
