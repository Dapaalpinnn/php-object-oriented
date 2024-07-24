<?php 

require_once "Data/Location.php";

/* 
* Abstract Class
* Tidak bisa dibuat sebagai object secara langsung dan hanya bisa diturunkan
* Turunannya bisa dijadikan object
*/

use Location\{Location,City, Province, Country};

/* 
!ERROR CODE!
$myLocation = new Location();
$myLocation->setLocation("Disini");
*/

$city = new City();
$city -> setLocation("Surabaya");

$province = new Province();
$province -> setLocation("Jawa Timur");

$country = new Country();
$country -> setLocation("Indonesia");

?>