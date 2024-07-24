<?php 

// Destructor => function yang akan dipanggil ketika program selesai.

class myData 
{
    public function __construct(
        public string $name, 
        public ?string $address, 
        public string $country = "Indonesia"){
        echo
        <<<longtext
        Nama: $name
        Alamat: $address
        Country: $country
        longtext . PHP_EOL;
    }
    function __destruct(){
        $object = $this::class;
        echo "Object $object is Destroyed" . PHP_EOL;
    }
}

$user = new myData(name: "Alexa Michelle", address:"Surabaya");
echo "Program selesai" . PHP_EOL;

?>
