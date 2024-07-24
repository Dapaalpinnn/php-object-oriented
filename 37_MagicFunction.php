<?php 

/*  
    * Magic function
    * https://www.php.net/manual/en/language.oop5.magic.php
    * Magic function biasanya diawali dengan underscore 2 kali (__) 
*/

class User 
{
    public string $username;
    public string $email;
    private string $password;
    public function setPassword(string $password) :void {
        $this->password = $password;
    }
    public function __invoke(...$args) :void 
    {
        $join = join(", ", $args);   
        echo "Invoke: $join";
    }
    public function __toString()
    {
        return
        <<<longtext
        Username: $this->username
        Email: $this->email
        Password: $this->password
        
        longtext;
    }
    public function __debugInfo() :array
    {
        return 
        [
            "Id" => 23428638926,
            "Level" => 67,
            "Rank" => "Ace Master",
            "Version" => "4.2.05"
        ];
    }
}

$user = new User();
$user->username = "dfxaming";
$user->email = "dfxaming@gmail.com";
$user->setPassword("dfxgntk23");

// To String
/* 
    $dataString = (string) $user;
    echo $dataString . PHP_EOL;
*/

echo $user;

// Debug info
$info = print_r($user);

// Invoke
$user("Username", "Email", "Password"); // Variable digunakan sebagai function 

?>