<?php
include_once 'conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = 'SELECT * FROM users WHERE name = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($username));
$resultado = $sentencia->fetch();


if (!$resultado) {
    echo 'No se encontró el usuario';
    header('location: ../errores.php?error_number=6');
    die();    
}

if(password_verify($password, $resultado['password'])){
   $_SESSION['user'] = $username;
   $_SESSION['id'] = $resultado['id'];
   header('location: ../index.php');

} else {
    echo 'Contraseña incorrecta';
    header('location: ../errores.php?error_number=7');
    die();
}

