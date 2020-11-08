<?php

include_once 'conexion.php';
$id = $_GET['id'];

$sql_eliminar = 'DELETE FROM activitys WHERE id = ? and user_id = ?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id, $_SESSION['id']));

header('location: ../actividades.php');

$sentencia_eliminar = null;
$pdo = null;
