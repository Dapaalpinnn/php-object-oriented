<?php 

// Sangat berguna ketika ingin melakukan konversi dari tipe data array ke object secara otomatis!

// Konversi array ke object
$name = 
[
    "firstname" => "Steve", 
    "middlename" => "Alexa", 
    "lastname" => "Budiarto", 
];

// Menggunakan stdclass
$obj = (object)$name;
print_r($obj);

echo "Nama depan = $obj->firstname" . PHP_EOL;
echo "Nama tengah = $obj->middlename" . PHP_EOL;
echo "Nama belakang = $obj->lastname" . PHP_EOL;

// Mengembalikan ke bentuk array
$otherArray = (array) $obj; 
print_r($otherArray);

// Latihan stdclass ada di folder Latihan.

?>


