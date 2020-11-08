<?php
include_once 'conexion.php';


$usuario_nuevo = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = 'SELECT * FROM users WHERE name = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

if ($resultado) {
    echo 'Existe este usuario';
    die();
}

if (password_verify($password2, $password)) {

    $sql_agregar = 'INSERT INTO users (name, password) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);

    if ($sentencia_agregar->execute(array($usuario_nuevo, $password))) {
        header('location: ../index.php');
    } else {
        echo 'No se agregó con exito';
    }

    $sentencia_agregar = null;
    $pdo = null;
} else {
    echo 'Las contraseñas deben ser iguales';
}
