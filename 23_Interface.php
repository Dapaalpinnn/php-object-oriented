<?php 

/*   
* Interface mirip seperti abstract class, yang membedakan: 
* semua method/function otomatis abstract dan tidak memiliki block.
* Tidak boleh memiliki properties
* Untuk Mewariskan menggunakan kata kunci implements
*/

interface Brand{
    public function Brand(string $brand);
}

// Mewarisi sesama interface menggunakan kata kunci "extends".
interface Type extends Brand{
    public function Type(string $type);
}

interface Price extends Type{
    public function Price(int $price);
}

class ProductMotorcycle implements Price
{
    public function Brand(string $brand){
        echo "Brand Motor: $brand" . PHP_EOL;
    }
    public function Type(string $type){
        echo "Tipe Motor: $type" . PHP_EOL;
    }
    public function Price(int $price){
        echo "Harga Motor: $price" . PHP_EOL;
    }

}

$product = new ProductMotorcycle();
$product->Brand(brand: "Suzuki");
$product->Type(type: "Suzuki Satria F150");
$product->Price(price: 23_000_000);

?>