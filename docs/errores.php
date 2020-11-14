<?php
include_once 'componentes/Header.php';

$error_number = $_GET["error_number"];

if ($error_number == 1 || $error_number == 2 || $error_number == 3 || $error_number == 4 || $error_number == 5) {
    $regreso = "crear_usuario.php";
    $error_img = 'img/Error.svg';
} elseif ($error_number == 6 || $error_number == 7) {
    $regreso = "login.php";
    $error_img = 'img/Error2.png';
}

?>

<div class="section"></div>

<!-- <div class="row">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action blue darken-4 white-text">
                <h3>ERROR! <i class="material-icons red-text">warning</i></h3>
            </div>
            <div class="card-content">



                <div class="section"></div>
                <div class="divider"></div>
                <div class="section"></div>
            </div>
        </div>
    </div>
</div> -->

<div class="section"></div>

<div class="container">
    <div class="row">
        <div class="col m6 s12">
            <img style="width: 100%;" src="<?php echo $error_img ?>" alt="">
        </div>
        <div class="col m6 s12 center">
            <h2 class="red-text">Error!<i class="material-icons red-text">warning</i></h2>

            <!-- Errores al crear usuario -->
            <?php if ($error_number == 1) : ?>
                <h5>Ya existe el usuario</h5>
            <?php elseif ($error_number == 2) : ?>
                <h5>El nombre de usuario debe ser mayor o igual a 7 y no contener espacios</h5>
            <?php elseif ($error_number == 3) : ?>
                <h5>La contraseña de usuario debe ser mayor o igual a 7 y no contener espacios</h5>
            <?php elseif ($error_number == 4) : ?>
                <h5>Las constraseñas deben coincidir</h5>
            <?php elseif ($error_number == 5) : ?>
                <h5>El usuario o contraseña no pueden ser vacios</h5>
            <?php endif ?>

            <!-- Errores al Iniciar-->
            <?php if ($error_number == 6) : ?>
                <h5>No se encontró al usuario</h5>
            <?php elseif ($error_number == 7) : ?>
                <h5>Contraseña incorrecta</h5>
            <?php endif ?>

            <div class="section"></div>
            <a href="<?php echo $regreso ?>" class="blue darken-4 white-text waves-effect waves-dark" style="width: 100%; border-radius: 5px;">Volver</a>

        </div>
    </div>

</div>

<div class="section"></div>



<?php
include_once 'componentes/Footer.php';
?>