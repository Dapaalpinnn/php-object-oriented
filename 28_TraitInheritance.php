<?php 

trait Name
{
    public function name(string $name){
        echo "Nama: $name" . PHP_EOL;
    }
}

trait ID
{
    public function id(int $id) :void {
        echo "NIM: $id" . PHP_EOL;
    }
}

trait Departament
{
    public function department(string $department) :void {
        echo "Jurusan: $department" . PHP_EOL;
    }
}

trait University{
    public function university(?string $university = "Universitas Negeri Surabaya") :void {
        echo "Universitas: $university";
    }
}

trait Data{
    use Name, ID, Departament, University;
}

class Student{
    use Data;
}

$student = new Student();
$student->name("Steven Kurniawan");
$student->id(12748246285);
$student->department("Teknik Informatika");
$student->university();

?>