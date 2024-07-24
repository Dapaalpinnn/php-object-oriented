<?php 

// Overeriding => Membuat ulang / menimpa

class TheManager 
{
    public string $name;
    public function sayHello():void{
        echo "My name is Manager " . $this -> name . PHP_EOL;
    }
}

class VicePresident extends TheManager
{
    public function sayHello():void{
        echo "My name is VP " . $this -> name . PHP_EOL;
    }
}

$manager = new TheManager();
$manager->name = "John Smith";
$manager->sayHello();

$vp = new VicePresident();
$vp->name = "Ahmad Setiawan";
$vp->sayHello()

?>