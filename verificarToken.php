<?php
include_once("includes/php-jwt/JWT.php");
include_once("includes/php-jwt/Key.php");
include_once("includes/php-jwt/JWTExceptionWithPayloadInterface.php");
include_once("includes/php-jwt/BeforeValidException.php");
include_once("includes/php-jwt/SignatureInvalidException.php");
include_once("includes/php-jwt/ExpiredException.php");


use Firebase\JWT\JWT as JWT;
use Firebase\JWT\Key as Key;
$secret = "meusegredo";

try{
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MSwibmFtZSI6Im51bmV4IiwiaWF0IjoxNzEwMjc1MTczLCJleHAiOjE3MTAyNzUxOTN9.UNTQnmYYAoMMKW7rxGfxQCvuXPheVDO8jKj6gFU8Mlk";
    $decodedToken = JWT::decode($token, new Key($secret, "HS256"));

    print_r($decodedToken);
}catch(Exception $e){
    echo $e->getMessage();
}

