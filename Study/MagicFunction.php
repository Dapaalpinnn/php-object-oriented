<?php 

class DataEmail
{
    public string $name = "Jane Lestari";
    private int $phone = 6285376283753;
    // Constructor
    public function __construct(){
        echo "Construct is called" . PHP_EOL;
    }
    // To String
    public function __toString()
    {
        return
        <<<longtext
        Name: $this->name
        Phone: $this->phone

        longtext;
    }
    // Get
    public function __get($propertyName)
    {
        if ($propertyName === "username"){
            return $this->name . PHP_EOL;
        }
        return "Property '$propertyName' does not exist" . PHP_EOL;
    }
    // Set
    public function __set($setName, $value)
    {
        if($setName === "username"){
            return "Property $this->name with value $value" . PHP_EOL;
        }
    }
    // Get private phone
    public function getMobilePhone(){
        return $this->phone;
    }
    // Call
    public function __call($name, $arguments)
    {
        if($name === "mobilePhone"){
            return $this->getMobilePhone() . PHP_EOL;
        }
    }
}

$data = new DataEmail();

$string = (string) $data;
echo $string;


?>