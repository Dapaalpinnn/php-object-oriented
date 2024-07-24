<?php 

require_once "data/Mahasiswa.php";

/* 
* Namespace
* Tempat menyimpan class 
* Hampir sama seperti folder
*/

$mahasiswa = new \Data\Class\Mahasiswa();
$mahasiswa->name = "Alexa";
$mahasiswa->department = "Departemen Teknik Informatika";
$mahasiswa->sayWelcomeMahasiswa();

$mahasiswa = new \Data\Library\Mahasiswa;
$mahasiswa->name = "Stevee";
$mahasiswa->sayWelcomeMahasiswa();

?>