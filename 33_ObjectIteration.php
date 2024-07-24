<?php 

/*
* Saat membuat object, bisa dilakukan iterasi ke semua properties menggunakan foreach
* Secara default, Object Iteration hanya bisa diakses oleh property yang visibility public
*/

class LearnObjectIteration implements IteratorAggregate
{
    var string $name;
    public string $email;
    public string $department;
    public string $faculty;
    public string $university = "Universitas Negeri Surabaya";
    public function getIterator(): Traversable
    {
        $array =
        [
            "Nama" => $this->name,
            "Jurusan" => $this->department,
            "Fakultas" => $this->faculty,
            "Universitas" => $this->university
        ];

        return new ArrayIterator($array);

    }
}

$data = new LearnObjectIteration();
$data->name = "Lynx";
$data->email = "df@example.com";
$data->department = "Teknik Informatika";
$data->faculty = "Vokasi";
$data->university = "Universitas Negeri Surabaya";

// Ketika kita melakukan perulangan foreach, maka php akan otomatis memanggil function getIterator(). 
foreach ($data as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}

?>