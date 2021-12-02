<?php

$link = 'mysql:host=localhost;dbname=jdbc';
$user = "root";
$password = "root";

try{
    $pdo = new PDO($link, $user, $password);    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die("ERROR: No pudo conectar se a la base de datos tipo de error:" . $e->getMessage());
}

?>