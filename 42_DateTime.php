<?php 

/* 
* DateTimeZone
* Mengubah timezone Datetime 
*/

date_default_timezone_set('Asia/Jakarta'); 
$now = new DateTime();
// Atau
$timezone = new DateTime();
$timezone -> setTimezone(new DateTimeZone("America/Toronto"));  
print_r($timezone);

/* 
* Datetime Function
* setTime($hour,$minute,$second) => Mengubah waktu Datetime
* satDate($year,$month,$day) => Mengubah tanggal Datetime
* setTimestamp($unixTimestamp) => Mengubah waktu unix Datetime
*/

/* 
* DateInterval
* Manipulasi waktu dan tanggal sebagian saja menggunakan dateInterval.
* Diawali dengan P (Period).
* https://www.php.net/manual/en/dateinterval.construct.php (Satuan Period)
*/

$now->add(new DateInterval("P1Y")); // Menambah Interval waktu
$timeInterval = new DateInterval("P2Y"); // Mengurangi Interval waktu
$timeInterval->invert = true;
$now->add($timeInterval);

/* 
* Format DataTime 
* Membuat datetime menjadi string
* https://www.php.net/manual/en/datetime.format.php
*/

$time_string = $now->format("Y-m-d H:i:s");
echo "Time learn to succes: $time_string" . PHP_EOL;

/* 
* ParseDateTime
* Mengubah string menjadi datetime
* Menggunakan static function createFromFormat() dari class DataTime
*/

$parse_time = DateTime::createFromFormat("Y-m-d H:i:s", "2020-11-28 09:32:11", new DateTimeZone("Asia/Jakarta"));
if ($parse_time) {
    echo "Successfully parse the datetime!" . PHP_EOL;
    var_dump($parse_time);
} else {
    echo "Check Your input dataTime" . PHP_EOL;
}

?>