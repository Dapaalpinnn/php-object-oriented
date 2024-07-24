<?php 

class Department 
{
    const UNIVERSITAS = "Universitas Negeri Surabaya";
    var string $name;
    var string $department;
    function sayHello(?string $name)
    {
        $university = self::UNIVERSITAS;
        if(is_null($name)){
            echo 
            <<<longtext
            Nama: $this->name
            Departemen: $this->department
            Universitas: $university
            longtext;
        } else {
            echo "Hai $name, Selamat datang di $university" . PHP_EOL;
        }
    }
}

$visitor = new Department();
$visitor->name = "John Doe Smith";
$visitor->department= "Teknik Informatika";
$visitor->sayHello(null);

?>