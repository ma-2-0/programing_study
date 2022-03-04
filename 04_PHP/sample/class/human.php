<?php

class BusinessMan extends Human {
    private $work;

    function __construct($lastName, $fistName, $age, $hobby, $work){
        parent::__construct($lastName, $fistName, $age, $hobby);
        $this->work =  $work;
    }

    function sayBusinessHello() {
        echo "こんにちは私の名前は" . $this->lastName . " " . $this->fistName ."です" . $this->work."の仕事をしています".PHP_EOL;
    }
}

class Human {
    protected $lastName;
    protected $fistName;
    protected $age;
    protected $hobby;

    function __construct($lastName, $fistName, $age, $hobby){
        $this->lastName = $lastName;
        $this->fistName = $fistName;
        $this->age = $age;
        $this->hobby =  $hobby;
    }

    function sayHello() {
        echo "こんにちは私の名前は" . $this->lastName . " " . $this->fistName ."です".PHP_EOL;
    }
}

$matsuo2 = new BusinessMan("やまだ", "たろう", 34, "旅行", "エンジニア");
$matsuo2->sayHello();
$matsuo2->sayBusinessHello();
