<?php
// Send information through the URL
if ($_GET){
    $name = $_GET['txtName'];

    echo "Hello ".$name;
}