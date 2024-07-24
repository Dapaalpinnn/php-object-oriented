<?php 

abstract class VehicleShow {
    public string $name;
    public abstract function show() :void;
}

class CarBrand extends VehicleShow {
    public function show():void {
        echo "Car $this->name is being shown";
    }
}

class MotorCycleBrand extends VehicleShow {
    public function show():void {
        echo "MotorCycle $this->name is being shown";
    }
}



interface ShowRoom {
    public function toShow(string $name) :VehicleShow;
}

class ShowRoomCar implements ShowRoom 
{
    public function toShow(string $name): CarBrand
    {
        $car = new CarBrand;
        $car->name = $name;
        return $car;
    }
}

class ShowRoomMotorcycle implements ShowRoom
{
    public function toShow(string $name): MotorCycleBrand
    {
        $motor = new MotorCycleBrand();
        $motor->name = $name;
        return $motor;
    }
}



$showCar = new ShowRoomCar();
$car = $showCar->toShow("BMW");
var_dump($car);

$showMotor = new ShowRoomMotorcycle();
$motor = $showMotor->toShow("Satria");

?>