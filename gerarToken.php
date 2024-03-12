<?php
include_once("includes/php-jwt/JWT.php");

use Firebase\JWT\JWT as JWT;

$secret = "meusegredo";

//Data de criação
$issuedAt = time();

//Válido para 30 dias
//$expirationTime =  $issuedAt + 60 * 60 * 24 * 30;

//Válido para 20 segundos
$expirationTime =  $issuedAt + 20;

$payload = [
    'id' => 1,
    'name' => "nunex",
    'iat' => $issuedAt,
    'exp' => $expirationTime
];

$jwtToken = JWT::encode($payload, $secret, "HS256");

echo $jwtToken;
