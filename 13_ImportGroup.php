<?php 

require_once "data/Mahasiswa.php";
require_once "data/Helper.php";

use Data\Class\{Mahasiswa};
use function Helper\{Welcome};
use const Helper\APPLICATION as VERSION;

$mahasiswa = new Mahasiswa();
$mahasiswa->name = "John Michael";
$mahasiswa->department = "Teknik Informatika";
$mahasiswa->sayWelcomeMahasiswa();

Welcome();
echo "APP Version: " . VERSION;

?>