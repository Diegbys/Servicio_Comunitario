<?php
include_once 'componentes/Header.php';

$id = $_GET['id'];


$sql = 'SELECT * FROM activitys INNER JOIN users on activitys.user_id = users.id WHERE activitys.user_id = ?';
$gsent = $pdo->prepare($sql);
$gsent->execute(array($id));
$actividades = $gsent->fetchAll();

$sql_alumno = 'SELECT * FROM users WHERE id = ?';
$gsent_a = $pdo->prepare($sql_alumno);
$gsent->execute(array($id));
$alumno = $gsent->fetch();

?>

<div class="section"></div>
<div class="container">
    <h1 class="blue-text text-darken-4"><i style="font-size: 80px;" class="material-icons left">person</i> Alumno: <?php echo $alumno['name'] ?></h1>
    <div class="divider"></div>

    <div class="row" style="display: flex; align-items: center;">
        <div class="col m6 s12">
            <h3>Actividades</h3>
        </div>
        <div class="col m6 s12 right-align">
            <a href="profesor.php" class="btn blue darken-4">Volver</a>
        </div>
    </div>

    <?php foreach ($actividades as $actividad) : ?>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content black-text">
                    <span class="card-title"> <i class="material-icons left blue-text text-darken-4">library_books</i><?php echo $actividad['title'] ?></span>
                    <p><?php echo $actividad['description'] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach ?>

    <?php if(!$actividades): ?>
        <h5>Este alumno no tiene actividades</h5>
    <?php endif ?>

</div>



<div class="section"></div>

<?php
include_once 'componentes/Footer.php';
?>