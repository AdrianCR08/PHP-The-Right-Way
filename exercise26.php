<?php
/*
 * Static Methods
 */

class anyClass{
    public static function anyClass(){
        echo "This is a static method<br>";
    }
}

$obj = new anyClass();
$obj -> anyClass();

// If we want to access a method without the need of instance, we would create a reference to the class
anyClass::anyClass();