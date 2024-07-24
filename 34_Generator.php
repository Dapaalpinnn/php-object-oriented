<?php 

/*
    * Generator => Membuat iterator secara otomatis  
    * Menggunakan kata kunci yield.
*/ 

class myIteration implements IteratorAggregate 
{
    var string $username = "Dafa Alvin";
    public string $gender = "Laki-laki";
    protected string $email = "df@gmail.com";
    private string $password = "dfgntk876";
    public function getIterator(): Traversable
    {
            // Generator "yield" key => value 
            yield "Username" => $this->username;
            yield "Jenis Kelamin" => $this->gender;
            yield "Email" => $this->email;
    }
}

// Ketika melakukan perulangan foreach maka akan memanggil function getIterator() 
$data = new myIteration();
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}

?>