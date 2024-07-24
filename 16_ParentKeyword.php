<?php 

class UsernameLogin 
{
    public string $name;
    public string $password;
    public function showUsername(): void
    {
        echo
        <<<longtext
        -- Hide Password --
        Username : $this->name
        Password : ********
        
        longtext . PHP_EOL;
    }
}

class PasswordLogin extends UsernameLogin 
{
    public string $name;
    public string $password;
    public function showUsername(): void
    {
        echo
        <<<longtext
        -- Show Password --
        Username : $this->name
        Password : $this->password

        longtext . PHP_EOL;
    }

    // Akses class parent 
    public function parentShowUsername(): void
    {
        echo parent::showUsername();
    }
}



$username = new UsernameLogin();
$username->name ="Steven Wongso";
$username->password = "rahasia";
$username->showUsername();

$password = new PasswordLogin();
$password->name = "Alexa Michelle";
$password->password = "michele1234";
$password->showUsername();
$password->parentShowUsername();

?>