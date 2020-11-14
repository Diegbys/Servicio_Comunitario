<?php

include_once 'php/conexion.php';

if (!isset($_SESSION['user'])) {
    header('location:index.php');
}

$sql_leer = 'SELECT * FROM activitys WHERE user_id = ?';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute(array($_SESSION['id']));
$resultado = $gsent->fetchAll();

if ($_POST) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql_agregar = 'INSERT INTO activitys (title, description, user_id) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($title, $description, $_SESSION['id']));

    $sentencia_agregar = null;
    $pdo = null;


    header('location: actividades.php');
}

include_once 'componentes/Header.php';

?>


<div class="container">
    <h1>Actividades</h1>
    <div class="divider"></div>
    <div class="section"></div>

    <ul class="collection">

        <?php if (!$resultado) : ?>
            <div class="section"></div>
            <h5 class="blue-text text-darken-4">No hay actividades disponibles</h5>
            <div class="section"></div>
        <?php endif ?>


        <?php foreach ($resultado as $dato) : ?>

            <li class="collection-item avatar">
                <i class="material-icons circle">play_arrow</i>
                <span class="title">
                    <a href="#"><?php echo $dato['title'] ?></a>
                </span>
                <p><?php echo $dato['description'] ?> <br>
                    Saludos!
                </p>
                <div class="secondary-content valign-wrapper">
                    <a href="editar_actividad.php?id=<?php echo $dato['id'] ?>" class=""><i class="material-icons">create</i></a>
                    <a href="php/eliminar.php?id=<?php echo $dato['id'] ?>"><i class="material-icons red-text">delete</i></a>
                </div>
            </li>

        <?php endforeach ?>
    </ul>


    <div class="section"></div>
    <div class="divider"></div>
    <div class="section"></div>

    <div class="row">
        <form action="" method="POST" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" class="validate" name="title">
                    <label for="first_name">Título:</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" class="validate materialize-textarea" name="description">
                    <label for="last_name">Descripción:</label>
                </div>
            </div>
            <div class="row center">
                <button type="submit" class="btn blue">Agregar actividad</button>
            </div>
        </form>
    </div>
</div>

<?php

include_once 'componentes/Footer.php';


$gsent = null;
$pdo = null;

?>
