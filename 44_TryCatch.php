<?php 

require_once "Exception/Validation.php";
require_once "Exception/LoginRequest.php";
require_once "Exception/ValidationException.php";

$login = new LoginRequest();
$login->username = "Lynx";
$login->password = "rahasia";

// Multiple Try Catch
try {
    validateLoginRequest($login);
    echo "Succesfully Login, Welcome to Administrator $login->username" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    $message = $exception->getMessage();
    echo "Error found: $message" . PHP_EOL;
    // echo $exception->getTraceAsString() . PHP_EOL; // Tracking lokasi error sebagai string
    print_r($exception->getTrace()); // Tracking lokasi error sebagai dump
} finally {
    echo "Tetap dipanggil baik saat error maupun tidak" . PHP_EOL;
}

?>