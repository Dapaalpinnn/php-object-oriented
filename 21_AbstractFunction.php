<?php 

/* 
    * Abstract Function 
    * Tidak boleh membuat block function
    * wajib di override pada class child
*/

abstract class Animal{
    public abstract function run($name):void;
}

class Cat extends Animal
{
    // Overide function.
    public function run($name) :void {
        echo "Cat $name is Running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    // Overide function.
    public function run($name) :void {
        echo "Dog $name is Running" . PHP_EOL;
    }
}

$miaw = new Cat();
$miaw -> run(name: "Luna");

$dog = new Dog();
$dog -> run(name: "Doggy");

?>

