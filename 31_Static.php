<?php 

/* 
* Static
* Biasanya digunakan sebagai utility
*/

// Static Properties
class MathHelper{
    static public string $name = "MathHelper";
}

echo MathHelper::$name . PHP_EOL; // Mengakses static menggunakan class
$change = MathHelper::$name = "Math"; // Mengubah Static
echo "Change static value: $change" . PHP_EOL;


// Static Function
class Math 
{
    static public function sumAll(int ...$numbers) :int 
    {
        $total = 1;
        foreach ($numbers as $number){
            $total *= $number;
        }
        return $total;
    }
}

$total = Math::sumAll(11,23,43,8,45,32,10); 
echo "Total: $total" . PHP_EOL;

?>