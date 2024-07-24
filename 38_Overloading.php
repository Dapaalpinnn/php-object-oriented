<?php 

/*
* Overloading => Secara dinamis membuat properties atau function (Dinamic Property).
* Akan melakukan fallback function ketika properties yang akan diakses tidak ada
* Bisa menambahkan properties apapun yang kita mau
*/

class Overload 
{
    private array $properties = [];
    // Dieksekusi ketika mengakses properties yang tidak tersedia.
    public function __get($name){
        return $this->properties[$name];
    }
    
    // Dieksekusi ketika mengubah properties yang tidak tersedia.
    public function __set($name, $value){
        return $this->properties[$name] = $value;
    }
    
    // DIeksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia. 
    public function __isset($name) :bool {
        return isset($this->properties[$name]);
    }
    
    // Dieksekusi ketika menggunakan unset() properties yang tidak tersedia.
    public function __unset($name){
        unset($this->properties[$name]);
    }
}

// Memanfaatkan magic function diatas.
$zero = new Overload();
$zero -> username = "Lynx";
$zero -> email = "dfx@example.com";
$zero -> password = "dfgntk2342";

echo "Username: $zero->username" . PHP_EOL;
echo "Email: $zero->email" . PHP_EOL;
echo "Password: $zero->password" . PHP_EOL;

?>