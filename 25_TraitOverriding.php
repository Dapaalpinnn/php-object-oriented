<?php 

require_once "24_Trait.php";

trait LetsRun {
    public abstract function run() :void; // Trait abstract function
}

class MorningRun 
{
    use myTraits\hasName;
    use LetsRun;
    // Trait abstract function wajib di override.
    public function run() :void {
        echo "The runner $this->name is Running Marathon!" . PHP_EOL;
    }
}

$run = new MorningRun();
$run->name = "Alexander";
$run->run();

/* 
 * Trait Overrriding:
 * (Parent Class = Overide by => Trait)
 * (Trait = Overide by => Child Class)
*/

?>