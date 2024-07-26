<?php
$age = 32; // Variables can be reassigned
echo $age."<br>";
$age = 40;
echo $age;
// Using constants

define("NAME", "Adrian");
// Printing the constant
// No need to use $ anymore
echo NAME;
// Variables can't be reassigned
// NAME = "Liz";