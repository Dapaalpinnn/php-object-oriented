<?php 

class Manager 
{
    public function __construct(public string $name, public string $position){
        echo "My Name is $name and my position is $position" . PHP_EOL;
    }
}

class VicePresident extends Manager{

}

$manager = new Manager(name: "Alexander", position: "Senior Manager");
$vp = new VicePresident(name: "John Doe", position: "Vice President");

?>