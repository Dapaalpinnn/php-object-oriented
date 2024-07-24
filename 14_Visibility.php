<?php 

/*
* Visibility
* Public, Protected, Private
*/

class Product 
{
    protected string $name;
    protected int $price;
    public function __construct (string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
    // Function untuk mengambil data private.
    public function getName():string{
        return $this->name;
    }
    public function getPrice():int{
        return $this->price;
    }
}

$Product = new Product("Apple", 15000);
// Mengakses function untuk mendapatkan data private yang berada di class yang sama.
echo "Product: " . $Product->getName() . PHP_EOL;
echo "Price: " . $Product->getPrice() . PHP_EOL;

class ProductDummy extends Product 
{
    public function infoProduk(){
        echo "Nama Produk: $this->name" . PHP_EOL;
        echo "Harga Produk: $this->price" . PHP_EOL;
    }
}

$Info = new ProductDummy("Cherry",3000);
$Info -> infoProduk();

?>