<?php

include_once 'php/conexion.php';

$id_editar = $_GET['id'];

$sql_editar = 'SELECT * FROM activitys WHERE id = ?  and user_id = ?';

$gsent = $pdo->prepare($sql_editar);
$gsent->execute(array($id_editar, $_SESSION['id']));
$resultado = $gsent->fetch();

include_once 'componentes/Header.php';
?>



    <div class="section"></div>
    <div class="container">
        <h2>Editar la actividad</h2>
        <div class="section"></div>
        <div class="divider"></div>
        <div class="section"></div>

        <div class="row">
            <form action="php/editar.php" method="GET" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate" name="title" value="<?php echo $resultado['title'] ?>">
                        <label for="first_name">Título:</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate materialize-textarea" name="description" value="<?php echo $resultado['description'] ?>">
                        <label for="last_name">Descripción:</label>
                    </div>
                    <input style="display:none" name="id" type="text" value="<?php echo $resultado['id'] ?>">
                </div>
                <div class="row center">
                    <button type="submit" class="btn blue">Editar actividad</button>
                </div>
            </form>
        </div>

    </div>
    <div class="section"></div>




<?php 

include_once 'componentes/Footer.php';
$gsent = null;
$pdo = null;

?>