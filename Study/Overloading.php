<?php 

// Secara dinamis membuat properties atau function.

class Zero 
{
    private array $properties = [];
    // Jika property yang diakses tidak ada, maka akan mengakses function __get()
    public function __get($name){
        echo "Accessing properties $name" . PHP_EOL;
    }
    public function __set($name, $value){
        echo "Set property $name with value $value" . PHP_EOL;
    }
    public function __isset($name) :bool {
        echo "isset $name" . PHP_EOL; 
        return false;
    }
    public function __unset($name){
        echo "unset $name" . PHP_EOL;
    }
}

$zero = new Zero();

echo "__GET" . PHP_EOL;
echo $zero -> username . PHP_EOL;

echo "__SET" . PHP_EOL;
echo $zero -> username = "Lynx" . PHP_EOL;

echo "__ISSET" . PHP_EOL;
isset($zero->username);

echo "__UNSET" . PHP_EOL;
unset($zero->username);

?>