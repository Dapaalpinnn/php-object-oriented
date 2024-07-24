<?php 

namespace Location;

abstract class Location {
    public function setLocation($location, $description = "The weather looks pretty sunny!"){
        echo "Set $location , $description" . PHP_EOL;
    }
}

class City extends Location {
    public function setLocation($location, $description = "The weather looks pretty sunny!"){
        echo "Selamat datang di kota $location , $description" . PHP_EOL;
    }
}

class Province extends Location {
    public function setLocation($location, $description = "The weather looks pretty sunny!"){
        echo "Selamat datang di Provinsi $location , $description" . PHP_EOL;
    }
}

class Country extends Location {
    public function setLocation($location, $description = "The weather looks pretty sunny!"){
        echo "Negara $location" . PHP_EOL;
    }
}

// 20_AbstractClass.php

?>