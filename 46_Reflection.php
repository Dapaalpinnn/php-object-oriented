<?php 

/* 
* Reflection
* membaca kode saat aplikasi berjalan
* Biasanya digunakan saat membuat framework atau library
* Reflection bisa membaca struktur class pada saat aplikasi berjalan
* https://www.php.net/manual/en/book.reflection.php.
*/

require_once "exception/LoginRequest.php";
require_once "exception/ValidationExeception.php";

class ValidationUtil 
{
    // Manual
    public static function validate(LoginRequest $request)
    {
        if(!isset($request->username)){
            throw new ValidationException("Username is null");
        } if(!isset($request->password)){
            throw new ValidationException("Password is null");
        }
    }
    // Reflection 
    static function ValidateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection -> getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if(!$property -> isInitialized($request)){
                throw new ValidationException("$property->name is not set" );
            } else if (is_null($property -> getValue($request))){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}


// Without Reflection
$request = new LoginRequest();
$request -> username = "null";
$request -> password = "null";
// ValidationUtil::validate($request);


// With Reflection
ValidationUtil::ValidateReflection($request);

class RegisterLoginRequest {
    public ?string $name;
    public ?string $email;
    public ?string $password;
}

$register = new RegisterLoginRequest();
$register -> name = "Ahmad";
$register -> email = "amd@gmail.com";
$register -> password = null;

ValidationUtil::ValidateReflection($register);

?>