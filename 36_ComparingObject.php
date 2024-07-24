<?php 

/*
* Comparing Object: Membandingkan 2 buah object
* Operator '==' (Equals) -> Membandingkan semua properties yang terdapat pada object
* Operrator '===' (identity) -> Membandingkan apakah object identik, artinya mengacu pada object yang sama 
*/

class Student 
{
    public string $id;
    public string $name;
    public int $value;
    private string $desciption;
    public function setDescription(string $desciption = "Welcome") :void {
        $this->desciption = $desciption;
    }
    public function __clone(){
        unset($this->desciption);
    }
}

$student1 = new Student();
$student1->id = "245";
$student1->name = "Christoper";
$student1->value = 90;

$student2 = new Student();
$student2->id = "245";
$student2->name = "Christoper";
$student2->value = 90;

var_dump($student1 == $student2); // Membandingkan semua properties dan value.
var_dump($student1 === $student2); // Memastikan berada di object yang sama. (Lokasi memory)

?>