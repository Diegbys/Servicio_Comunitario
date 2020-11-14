<?php
include_once 'componentes/Header.php';

$sql = 'SELECT u.id, u.name, u.rol_id,
(SELECT COUNT(*) FROM activitys as a2 WHERE a2.user_id = u.id) as numero  
FROM activitys as a 
RIGHT JOIN users as u ON u.id = a.user_id
GROUP BY u.name';

$gsent = $pdo->prepare($sql);
$gsent->execute();
$alumnos = $gsent->fetchAll();


?>

<div class="section"></div>

<div class="container">
    <h1 class="blue-text text-darken-4">Bienvenido !</h1>
    <div class="divider"></div>
    <div class="section"></div>

    <div class="row" style="display: flex; align-items: center;">
        <div class="col s2">
            <img style="width: 100%;" src="img/user.svg" alt="">
        </div>
        <div class="col s10">
            <h5>Profesor: <?php echo $_SESSION['user'] ?></h5>
        </div>
    </div>


    <h2 class="blue-text text-darken-4 center">Alumnos</h2>
</div>

<div class="row">
    <?php foreach ($alumnos as $alumno) : ?>
        <?php if($alumno['rol_id'] != 2): ?>
        <div class="col s12 m6 l3">
            <a href="alumno_detalle.php?id=<?php echo $alumno['id'] ?>">
                <div class="card">
                    <div class="card-content black-text">
                        <span class="card-title"> <i class="material-icons left blue-text text-darken-4">person_outline</i> Alumno:</span>
                        <span class="card-title"><?php echo $alumno['name'] ?></span>
                        <p>Número de actividades: <?php echo $alumno['numero'] ?></p>
                    </div>
                </div>
            </a>
        </div>
        <?php endif ?>
    <?php endforeach ?>

</div>

<div class="section"></div>

<?php
include_once 'componentes/Footer.php';
$gsent = null;
$pdo = null;
?>