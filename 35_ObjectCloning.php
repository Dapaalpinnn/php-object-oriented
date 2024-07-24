<?php 

/*
* Object Cloning
* Menyalin semua properties di object awal ke object baru
*/

class LearnObjectCloning
{
    var string $name;
    public string $email;
    public string $department;
    public string $faculty;
    public string $university = "Universitas Negeri Surabaya";
    // Menghapus properties, "unset" menggunakan function __clone().
    public function __clone()
    {
        unset($this->email);
    }
}

$data = new LearnObjectCloning();
$data->name = "Lynx";
$data->email = "df@example.com";
$data->department = "Teknik Informatika";
$data->faculty = "Vokasi";
$data->university = "Universitas Negeri Surabaya";

$data2 = clone $data;

print_r($data);
print_r($data2);

?>