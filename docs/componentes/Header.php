<?php
include_once 'php/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Servicio Comunitario</title>
    <link  rel="icon"   href="img/Logo Blanco.png" type="image/png" />
    <link rel="stylesheet" href="Materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!--BARRA DE NAVEGACIÓN-->
    <div class="navbar-fixed animate__animated animate__bounce">
        <nav class="blue darken-4">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img style="width: 50px; height: 50px; margin-top: 10px; margin-left: 10px;" class="responsive-img left" src="img/Logo Blanco.png" alt=""><span class="hide-on-small-only">Unimar con todos</span></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php"><i class="material-icons left">home</i> Inicio</a></li>
                    <li><a href="posts.php"><i class="material-icons left">library_books</i> Posts</a></li>
                    <li><a class="dropdown-trigger" data-target='valores' href="#"><i class="material-icons left">grade</i> Valores</a></li>
                    <li><a href="ayuda.php"><i class="material-icons left">help</i> Ayuda</a></li>
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <li><a href="login.php"><i class="material-icons left">person</i>Iniciar sesión</a></li>
                        <li><a href="crear_usuario.php"><i class="material-icons left">person_add</i>Crear Usuario</a></li>
                    <?php else : ?>
                        <li><a href="actividades.php"><i class="material-icons left">library_books</i>Actividades</a></li>
                        <li><a href="#"><i class="material-icons left">person</i><?php echo $_SESSION['user'] ?> </a></li>
                        <li><a href="php/cerrar.php"><i class="material-icons left">exit_to_app</i>Cerrar Sesión</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </nav>
    </div>

    <!--Desplegable de valores-->
    <ul id='valores' class='dropdown-content'>
        <li><a class="blue-text text-darken-4" href="valoresSociedad.php">En la sociedad</a></li>
        <li><a class="blue-text text-darken-4" href="valoresPandiemia.php">Frente la pandemia</a></li>
    </ul>

    <!--BARRA DE NAVEGACIÓN PARA MOBILE-->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php"><i class="blue-text text-darken-4 material-icons left">home</i> Inicio</a></li>
        <li><a href="posts.php"><i class="blue-text text-darken-4 material-icons left">library_books</i> Posts</a></li>
        <li><a class="dropdown-trigger" data-target='Valores-mobile' href="#"><i class="blue-text text-darken-4 material-icons left">grade</i> Valores</a></li>
        <li><a href="ayuda.php"><i class="blue-text text-darken-4 material-icons left">help</i> Ayuda</a></li>
        <?php if (!isset($_SESSION['user'])) : ?>
            <li><a href="login.php"><i class="blue-text text-darken-4 material-icons left">person</i>Iniciar sesión</a></li>
            <li><a href="crear_usuario.php"><i class="blue-text text-darken-4 material-icons left">person_add</i>Crear Usuario</a></li>
        <?php else : ?>
            <li><a href="actividades.php"><i class="blue-text text-darken-4 material-icons left">library_books</i>Actividades</a></li>
            <li><a href="#"><i class="blue-text text-darken-4 material-icons left">person</i><?php echo $_SESSION['user'] ?> </a></li>
            <li><a href="php/cerrar.php"><i class="blue-text text-darken-4 material-icons left">exit_to_app</i>Cerrar Sesión</a></li>
        <?php endif ?>
    </ul>

    <!--Desplegable de valores MOBILE-->
    <ul id='Valores-mobile' class='dropdown-content'>
        <li><a class="blue-text text-darken-4" href="valoresSociedad.php">En la sociedad</a></li>
        <li><a class="blue-text text-darken-4" href="valoresPandiemia.php">Frente la pandemia</a></li>
    </ul>