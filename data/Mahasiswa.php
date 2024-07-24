<?php 

namespace Data\Class
{

    require_once "Helper.php";
    use Helper;

    class Mahasiswa
    {
        public string $name;
        public string $app = Helper\APPLICATION;
        public string $department = "Departemen Teknik Informatika";
        public function sayWelcomeMahasiswa()
        {
            echo 
            <<<longtext
            Hi $this->name, Welcome to $this->department
            Application Class Version: $this->app
            longtext;
        }
    }
}

namespace Data\Library 
{
    require_once "Helper.php";
    use Helper;
    class Mahasiswa
    {
        public string $name;
        public string $app = Helper\APPLICATION;
        public string $library_department = "Perpustakaan Departemen Teknik Informatika";
        function sayWelcomeMahasiswa()
        {
            echo
            <<<longtext
            Selamat datang di $this->library_department, $this->name
            Application Library Version: $this->app
            longtext;
        }
    }
}
    
?>