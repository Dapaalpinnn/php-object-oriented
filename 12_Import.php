<?php 

require_once "data/Mahasiswa.php";
require_once "data/Helper.php";

use Data\Class\Mahasiswa as ClassMahasiswa;
use Data\Library\Mahasiswa as LibraryMahasiswa;
use const Helper\APPLICATION as APP;
use function Helper\Welcome as Welcome;

$mahasiswa = new ClassMahasiswa();
$mahasiswa->name = "Steven Kurniawan";
$mahasiswa->department = "Teknik Informatika";
$mahasiswa->sayWelcomeMahasiswa();

$mahasiswa = new LibraryMahasiswa();
$mahasiswa->name = "Ahmad Wongso";
$mahasiswa->sayWelcomeMahasiswa();

?>