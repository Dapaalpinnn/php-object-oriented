<?php 

/* 
* Properties Type Declaration
* Default Value
* Nullable Properties
*/

class PropertyType
{
    public string $nama; // Properties Data Type Declaration
    public int $nim;
    public string $programStudi;
    public ?string $alamat; // Nullable properties "?" (Properties tersebut bisa null) 
    public string $perguruanTinggi = "Universitas Negeri Surabaya"; // Default Value (=)
}

$mahasiswa = new PropertyType();
$mahasiswa->nama = "Alexander Arnold";
$mahasiswa->nim = 23091378467;
$mahasiswa->programStudi = "Teknik Lingkungan";
$mahasiswa->alamat = "Wonokromo, Kota Surabaya";

var_dump($mahasiswa)

?>