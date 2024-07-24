<?php 

class NoOne implements IteratorAggregate
{
    private array $users = [];
    public function __get($name){
        return $this->users[$name];
    }
    public function __set($name, $value){
        return $this->users[$name] = $value;
    }
    public function __isset($name) :bool{
        return isset($this->users[$name]);
    }
    public function __unset($name){
        unset($this->users[$name]);
    }
    public function getIterator(): Traversable
    {
        yield "ID"=>$this->id;
        yield "Name"=>$this->name;
        yield "Department"=>$this->department;
        yield "Email"=>$this->email;
        yield "address"=>$this->address;
        yield "Phone"=>$this->mobilePhone;
        yield "Age"=>$this->age;
    }
}

$users = new NoOne();
$users->id = 1245345;
$users->name = "John Smith";
$users->department = "Informatics Engineering";
$users->address = "Pakuwon, Lidah Wetan";
$users->email = "john@example.com";
$users->mobilePhone = 62348372938;
$users->age = 18;

print_r($users);

foreach ($users as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}

?>