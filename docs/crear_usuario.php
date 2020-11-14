<?php
include_once 'componentes/Header.php';
?>

<div class="section"></div>


<div class="row">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action blue darken-4 white-text">
                <h3>Crear usuario</h3>
            </div>
            <form action="php/agregar_usuario.php" method="POST">
                <div class="card-content">
                    <div class="form-field">
                        <label for="username">Nombre</label>
                        <input type="text" id="username" name="username">
                    </div><br>

                    <div class="form-field">
                        <label for="password">Contraseña</label>
                        <input type="text" id="password" name="password">
                    </div><br>

                    <div class="form-field">
                        <label for="password2">Repite la contraseña</label>
                        <input type="text" id="password2" name="password2">
                    </div><br>

                    <div class="form-field">
                        <button type="submit" class="blue darken-4 btn-large waves-effect waves-dark" style="width:100%;">Crear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="section"></div>




<?php
include_once 'componentes/Footer.php';
?>