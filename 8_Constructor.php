<?php 

/* 
* constructor adalah function yang akan dipanggil saat pertama kali object dibuat.
* Digunakan untuk mengatur nilai awal dari variabel-variabel dalam objek.
* Membuat constructor menggunakan fitur baru PHP 8
*/

class DataLocation 
{
    public function __construct(
        public string $name, 
        public ?string $address, 
        public string $country = "Indonesia"){
    }
}

$user = new DataLocation(name: "Alex", address: "Wonokromo");
var_dump($user)

?>
