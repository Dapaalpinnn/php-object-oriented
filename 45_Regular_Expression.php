<?php 

/* 
* Digunakan untuk melakukan pencarian di string menggunakan pola tertentu (Lebih advance). 
* https://www.php.net/manual/en/ref.pcre.php
* preg_match_all($pattern, $subject) => Mencari pattern. return value boolean
* preg_replace($pattern, $replacement, $subject) => replace semua pattern
* preg_split($pattern, $subject) => Memotong pattern menjadi array
*/

$matches = [];
$result = (bool)preg_match_all("/11|iPh/i", "iPhone 11 Promax, iPad Mini 6", $matches); 
// "i" artinya incase sensitive
print_r($matches) . PHP_EOL;

$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu anjing, bangsat!");
print_r($result) . PHP_EOL;

$result = preg_split("/[\s,-]/", "Perkenalkan nama saya Muhammad Dafa Alvin, saya dari Surabaya");
print_r($result) . PHP_EOL;

?>