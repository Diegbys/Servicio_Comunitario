<?php
session_start();

$link = 'mysql:host=localhost;dbname=servicio_c';
$usuario = 'root';
$pass = '';

try {

    $pdo = new PDO($link, $usuario, $pass);

    // echo 'Conectado';
    
} catch (PDOException $e) {
    print "¡Error!: ". $e->getMessage() . "<br/>";
    die();
}