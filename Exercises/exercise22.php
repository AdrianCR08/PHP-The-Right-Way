<?php

class Person {
    public string $name; // Property
    private int $age;
    protected float $height;

    public function assignName($newName) {
        $this->name = $newName;

    }

    public function printName(){
        echo "Hi, I'm " . $this->name . "<br>";
    }

    public function showAge(){
        $this->age = 20;
        echo "My age is " . $this ->age . "<br>";
        return $this->age;

    }
}

$student = new Person(); // Instance of an object
$student->assignName("Adrian");
$student->printName();
$student->showAge();

// echo $student->name;

$student1 = new Person();
$student1 ->assignName("Liz");
$student1->printName();
$student1->showAge();


//echo $student1->name;

class Worker extends Person{
    public $job;

    public function introduce(){
        echo "Hi, I'm " . $this->name. " and I'm a ". $this->job . "<br>";
    }
}

$objWorker = new Worker();
$objWorker -> assignName("Carmen");
$objWorker ->job="Teacher";
$objWorker -> introduce();