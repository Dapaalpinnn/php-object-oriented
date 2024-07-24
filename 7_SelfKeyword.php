<?php 

class SelfKeyword
{
    const AUTHOR = "Pramoedya Ananta Toer";
    public string $name;
    public ?string $book;
    public function reading(?string $name){
        $author = self::AUTHOR;
        if(is_null($name)){
            echo "Hi {$this -> name}, Happy reading '$this->book' by $author" . PHP_EOL;
        } else {
            echo
            <<<longtext
            Hi $name, Welcome to the Library!.
            Your book '$this->book' by $author is ready!
            longtext; 
        }
    }
}

$user = new SelfKeyword();
$user -> name = "Steven Kurniawan";
$user -> book = "Bumi Manusia";
$user -> reading("Steven Kurniawan");

?>