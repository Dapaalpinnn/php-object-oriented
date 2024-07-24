<?php 

trait ConflictOne
{
    public function helo($name): void {
        echo "Hello $name" .  PHP_EOL; 
    }
    public function greet($name): void {
        echo "Selamat pagi $name" . PHP_EOL;
    }
}
trait ConflictTwo 
{
    public function helo($name): void {
        echo "Hello $name, Welcome to Administrator" .  PHP_EOL; 
    }
    public function greet($name) :void {
        echo "Selamat Sore $name" . PHP_EOL;
    }
}

class SolveConflict 
{
    use ConflictOne, ConflictTwo 
    {
        ConflictOne::helo insteadOf ConflictTwo;
        ConflictTwo::greet insteadOf ConflictOne;
    }
}

$sample = new SolveConflict();
$sample->helo("Alexander");
$sample->greet("Budi");

/* 
  * Untuk function "helo" menggunakan trait "One" 
  * Untuk function "greet" menggunakan trait "Two" 
*/

?>