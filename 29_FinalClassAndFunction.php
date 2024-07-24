<?php 

/* 
* Final Class and Final Function
* Tidak akan bisa di overide lagi!
*/

class SosialMedia 
{
    public string $name;
    public string $username;
    public string $password;
}


final class Facebook extends SosialMedia 
{ 
    final public function Login(string $username, string $password) :void 
    {
        echo 
        <<<longtext
        Username: $username
        Password: $password
        Login Berhasil!
        longtext . PHP_EOL;
    }
}

/* 
!Error!
class FakeFacebook extends Facebook 
{
    final public function Login(string $username, string $password) : bool 
    {
        return false;
    }
}
*/

$facebook = new Facebook();
$facebook->name = "Facebook";
$facebook->username = "Lynx";
$facebook->password = "lynx123";
$facebook->Login("Lynx", "lynx123");

print_r($facebook);

?>