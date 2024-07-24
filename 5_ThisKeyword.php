<?php 

class dataPerson 
{
    public string $fullName;
    public function sayMyName(?string $shortName)
    {
        if(is_null($shortName)){
            echo "$this->fullName, is my full name";
        } else {
            echo "$shortName, is the sort name of $this->fullName" . PHP_EOL;
        }
    }
}

$name = new dataPerson();
$name->fullName = "Trent Alexander Arnold";
$name->sayMyName("Trent");


$person = new dataPerson();
$person -> fullName = "Lunar Michelle";
$person -> sayMyName(null);

?>