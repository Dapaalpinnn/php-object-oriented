<?php 

class Vehicle
{
    public function __construct(public string $name, public string|int $machine){
        
    }
}

class Toyota extends Vehicle{

}

class BMW extends Vehicle{

}

class Lamborghini extends Vehicle{

}

class Store{
    public Vehicle $vehicle;
}

$store = new Store();
$store->vehicle = new Toyota(name: "Toyota Fortuner", machine: "2755CC");
var_dump($store);

$store->vehicle = new BMW(name: "BMW Series Gran Coupe", machine:"1998CC");
var_dump($store);

$store->vehicle = new Lamborghini(name: "Lamborghini Aventador", machine: "6498CC");
var_dump($store);


// Function Argument Polymorphism
function ShowVehicle(Vehicle $vehicle){
    echo 
    <<<longtext
    Show Vehicle $vehicle->name
    Machine: $vehicle->machine
    longtext . PHP_EOL;
}

ShowVehicle(new Toyota(name: "Toyota Fortuner", machine: "2755CC"));
ShowVehicle(new BMW(name: "BMW Series Gran Coupe",machine: "1998CC"));
ShowVehicle(new Lamborghini(name: "Lamborghini Aventador", machine: "6498CC"));

?>