<?php 

require_once "Exception/Validation.php";
require_once "Exception/LoginRequest.php";
require_once "Exception/ValidationExeception.php";

$loginRequest = new LoginRequest();
$loginRequest -> username = "Lynx";
$loginRequest -> password = "dfxgntk324";
validateLoginRequest($loginRequest); 

echo "SUCCESSFULY LOGIN!"

?>