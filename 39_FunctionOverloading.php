<?php 

/* 
* Function Overloading => Mengakses function yang tidak tersedia, maka php tidak menjadikan error
* PHP akan melakukan fallback function
* __call => Dieksekusi ketika memanggil function yang tidak ada
* __callstatic => Akan dipanggil ketika static function yang akan diakses tidak ada
*/

class myFunctionOverloading 
{
    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments join: $join" . PHP_EOL;
    }
    public static function __callStatic($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call static function $name with argument: $join" . PHP_EOL;
    }
}

$functionOverloading = new myFunctionOverloading();
$functionOverloading->month("January", "February", "March");
myFunctionOverloading::notice("Good Evening", "See You");

?>