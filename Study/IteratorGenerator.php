<?php 

/* 
* Object Iteration
* Membuat iterasi secara manual, bisa memilih data apa saja yang akan diekspos
* Implements interface IteratorAggregate
* Wajib Menambahkan function getIterator()
*/

class myIteration implements IteratorAggregate 
{
    var string $username = "Samuel Doe";
    public string $department = "Informatics Engineering";
    protected string $email = "df@gmail.com";
    private string $password = "dfgntk876";
    public function getIterator(): Traversable
    {
        $array = 
        [
            "Username" => $this->username,
            "Department" => $this->department,
            "Email" => $this->email,
        ];

        return new ArrayIterator($array); // Mengambalikan sebagai array iterator
    }
}

// Ketika melakukan perulangan foreach maka akan memanggil function getIterator() 
$data = new myIteration();
foreach ($data as $property => $value){
    echo "$property => $value" . PHP_EOL;
}

?>