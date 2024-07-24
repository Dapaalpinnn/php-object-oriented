<?php 

/*
* Getter => Function untuk mengambil data field.
* Setter => Function untuk mengubah data field.
* Encapsulation => Artinya memastikan data sensitif sebuah object tersembunyi dari akses luar.   
* Tujuan dari Encapsulation adalah agar object tetap baik dan valid.
*/

class Category 
{
    private string $name;
    private bool $expensive;
    public function getName() :string {
        return $this->name;
    }
    public function setName(string $name) :void {
        // Menambahkan validasi.
        if(trim($name) != ""){ // Jika tidak sama dengan string kosong, maka akan menerima data
            $this->name = $name;
        }
    }
    public function isExpensive() :bool {
        return $this->expensive;
    }
    public function setExpensive(bool $expensive) :void {
        $this->expensive = $expensive;
    }
}

$category = new Category();
$category -> setName("MacBook");
$category -> setExpensive(true);

$category -> setName("iPhone 13 Pro Max");

// Eksekusi program.
echo "Name: " . $category->getName(). PHP_EOL;
echo "Expensive: " . $category->isExpensive() . PHP_EOL;

?>