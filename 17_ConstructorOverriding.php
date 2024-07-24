<?php 

class DataPosition
{
    public function __construct(
        public string $name = "Enter a username", 
        public string $tittle = "Enter a position"){
    
    }
    public function sayHelloPosition(): void
    {
        echo 
        <<<longtext
        -- Data Nama dan Jabatan dalam Perusahaan --
        
        longtext . PHP_EOL;
    }
}

class DataManager extends DataPosition
{
    // Overide argument constructor
    public function __construct(public string $name = "")
    {
        parent::__construct($name, "Manager"); // Memanggil parent constructor (Direkomendasikan)
    }
    public function sayHelloPosition() :void
    {
        echo 
        <<<longtext
        Name: $this->name
        Position: $this->tittle

        longtext . PHP_EOL;
    }
}

class DataVicePresident extends DataManager 
{
    public function __construct(public string $name = ""){
        parent::__construct($name, "Vice President");
    }
    public function sayHelloPosition():void
    {
        echo 
        <<<longtext
        Name: $this->name
        Position: $this->tittle
        
        longtext . PHP_EOL;  
    }
}
 
$data = new DataPosition();
$data->sayHelloPosition();

$manager = new DataManager();
$manager->name = "Michelle";
$manager->tittle = "Senior Manager";
$manager->sayHelloPosition();

$vp = new DataVicePresident();
$vp->name = "Ahmad Setiawan";
$vp->tittle = "Vice President";
$vp->sayHelloPosition();

?>