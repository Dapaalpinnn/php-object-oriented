<?php 

namespace myTraits;

/*
* Trait
* Bisa membuat abstract function dan konkrit function
* Bisa ditambahkan ke class lebih dari satu 
* Mengakses trait menggunakan kata kunci "use"
*/ 

trait hasName {
    public string $name; // Membuat properties pada Trait.
}

trait SayGoodBye
{
    public function sayGoodBye(?string $name) :void {  
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name, See you again!" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name) :void 
    {  
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

class Person{
    use sayGoodBye, sayHello, hasName; // Mengakses trait menggunakan kata kunci "use"
}

$person = new Person();
$person->name = "Smith Alexa"; 
$person->sayGoodBye("Joe Smith");
$person->hello("Samuel");

var_dump($person);

?>