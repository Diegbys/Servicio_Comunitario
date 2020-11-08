<?php


$id = $_GET['id'];
$title = $_GET['title'];
$description = $_GET['description'];

include_once 'conexion.php';

$sql_editar = 'UPDATE activitys SET title=?, description=? WHERE id=? AND user_id= ?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($title, $description, $id, $_SESSION['id']));

$sentencia_editar = null;
$pdo = null;

header('location: ../actividades.php');
