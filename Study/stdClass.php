<?php 

// Latihan stdClass
class AddressUser {
    public function __construct(public string $name, public string $addres, public string $country = "United States") {
        
    }
}

$dataDiri = new AddressUser("Samuel Doe", "California");
print_r($dataDiri);

$arrayData = (array) $dataDiri; // Semua properti pada class data diri menjadi key pada array!
print_r($arrayData);

?>

