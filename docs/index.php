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
                    <li><a href="#"><i class="material-icons left">home</i> Inicio</a></li>
                    <li><a href="posts.html"><i class="material-icons left">library_books</i> Posts</a></li>
                    <li><a class="dropdown-trigger" data-target='Valores' href="#"><i class="material-icons left">grade</i> Valores</a></li>
                    <li><a href="ayuda.html"><i class="material-icons left">help</i> Ayuda</a></li>
                    <?php if (!isset($_SESSION['user'])): ?>
                    <li><a href="login.php"><i class="material-icons left">person</i>Iniciar sesión</a></li>
                    <li><a href="crear_usuario.php"><i class="material-icons left">person_add</i>Crear Usuario</a></li>
                    <?php else: ?>
                    <li><a href="actividades.php"><i class="material-icons left">library_books</i>Actividades</a></li>
                    <li><a href="#"><i class="material-icons left">person</i><?php echo $_SESSION['user'] ?> </a></li>
                    <li><a href="php/cerrar.php"><i class="material-icons left">person_add</i>Cerrar Sesión</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </nav>
    </div>

    <!--Desplegable de valores-->
    <ul id='Valores' class='dropdown-content'>
        <li><a class="blue-text text-darken-4" href="valoresSociedad.html">En la sociedad</a></li>
        <li><a class="blue-text text-darken-4" href="valoresPandiemia.html">Frente la pandemia</a></li>
    </ul>

    <!--BARRA DE NAVEGACIÓN PARA MOBILE-->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.html"><i class="blue-text text-darken-4 material-icons left">home</i> Inicio</a></li>
        <li><a href="#"><i class="blue-text text-darken-4 material-icons left">library_books</i> Posts</a></li>
        <li><a class="dropdown-trigger" data-target='Valores-mobile' href="#"><i class="blue-text text-darken-4 material-icons left">grade</i> Valores</a></li>
        <li><a href="ayuda.html"><i class="blue-text text-darken-4 material-icons left">help</i> Ayuda</a></li>
    </ul>

    <!--Desplegable de valores MOBILE-->
    <ul id='Valores-mobile' class='dropdown-content'>
        <li><a class="blue-text text-darken-4" href="valoresSociedad.html">En la sociedad</a></li>
        <li><a class="blue-text text-darken-4" href="valoresPandiemia.html">Frente la pandemia</a></li>
    </ul>




    <!--Slider-->
    <section class="ElSlider animate__animated animate__fadeInLeft">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="img/ig1.jpg">
                    <!-- random image -->
                    <div class="caption left-align">
                        <h3>Página de Instagram disponible</h3>
                        <h5 class=" light grey-text text-lighten-3">No olvides visitar nuestra página de Instagram</h5>
                    </div>
                </li>
                <li>
                    <img src="img/Cancermama1.jpg">
                    <!-- random image -->
                    <div class="caption left-align">
                        <h3>19 de Octubre</h3>
                        <h5 class="light grey-text text-lighten-3">día mundial de la lucha contrael cáncer de mama. Más información en posts.</h5>
                    </div>
                </li>
                <li>
                    <img src="img/unimarcontodos.jpg">
                    <!-- random image -->
                    <div class="caption center-align">
                        <h3>Unimar con Todos</h3>
                        <h5 class="light grey-text text-lighten-3">Proyecto de Servicio Comunitario. Más información en Sobre nosotros.</h5>
                    </div>
                </li>
                <li>
                    <img src="img/valores-p4.jpg">
                    <!-- random image -->
                    <div class="caption right-align">
                        <h3>Valores en frente de una pandemia</h3>
                        <h5 class="light grey-text text-lighten-3">Disponible en la sección de valores, además de los valores dentro de la sociedad.</h5>
                    </div>
                </li>
            </ul>
        </div>
    </section>





    <!--Presentación-->
    <section class="header section container animate__animated animate__fadeInLeft">
        <div class="row">
            <div class="col m6 s12">
                <img class="logo-oficial" src="img/PNG-LOGO-OFICIAL.png" alt="">
            </div>
            <div class="col m6 s12">
                <div class="section"></div>
                <div class="section"></div>
                <h3 class="blue-text text-darken-4">Proyecto de servicio comunitario</h3>
                </br>
                <h2 class="blue-text text-darken-4">UNIMAR CON TODOS</h2>
            </div>
        </div>
    </section>





    <!--Parallax-->
    <div class="parallax-container">
        <div class="parallax"><img src="img/unimarcontodos2.jpg"></div>
    </div>






    <!--Sobre Nosotros-->
    <div class="section"></div>
    <section class="section about-us ">
        <div class="container row">
            <div class="col s12 center">
                <h2 class="blue-text text-darken-4">Sobre nosotros</h2>
                <div class="divider"></div>
                <div class="section"></div>
            </div>
            <div class="col m4 s12">
                <div class="card">
                    <div class="card-content">
                        <p class="center"><i class="material-icons blue-text text-darken-4">home</i></p>
                        <span class="card-title">¿Qué es el servicio comunitario?</span>
                        <p>Es la actividad que deben cursar los estudiantes de educación universitaria en beneficio de las diferentes comunidades.</p>
                    </div>
                    <div class="card-action">
                        <a class="blue-text text-darken-4 modal-trigger" href="#modal1">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col m4 s12">
                <div class="card">
                    <div class="card-content">
                        <p class="center"><i class="material-icons blue-text text-darken-4">home</i></p>
                        <span class="card-title">Proyecto Unimar con Todos</span>
                        <p>brinda a las comunidades neoespartanas información integral sobre aspectos jurídicos, educativos y administrativos</p>
                    </div>
                    <div class="card-action">
                        <a class="blue-text text-darken-4 modal-trigger" href="#">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col m4 s12">
                <div class="card">
                    <div class="card-content">
                        <p class="center"><i class="material-icons blue-text text-darken-4">home</i></p>
                        <span class="card-title">Programadores de la página web.</span>
                        <p>Este sitio web esta realizado por Diegbys Mudarra y Mauricio Bisogno con Sujey Avane como tutora.</p>
                    </div>
                    <div class="card-action">
                        <a class="blue-text text-darken-4 modal-trigger" href="#modal3">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--MODALS-->
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Servicio comunitario</h4>
            <p>Ámbito de aplicación.</p>
            <p> Espacio en el área geográfica del territorio nacional que determine la institución de educación universitaria (art. 3).</p>
            <p>Duración del Servicio Comunitario.</p>
            <p> El servicio comunitario tendrá una duración mínima de ciento veinte (120) horas académicas, cumplidas en un lapso no menor de tres (3) meses. Estas horas no deben ser más de diez (10) por día y no menos de seis (6) por semana.</p>
            <p>Principios que rigen la Ley de Servicio Comunitario</p>
            <ul>
                <li>Solidaridad</li>
                <li>Igualdad</li>
                <li>Corresponsabilidad</li>
                <li>Asistencia humanitaria</li>
                <li>Responsabilidad social</li>
                <li>Participación ciudadana</li>
                <li>Cooperación</li>
                <li>Alteridad</li>
            </ul>
            <p>Fines del Servicio Comunitario</p>
            <ul>
                <li>Fomentar en el estudiante la solidaridad y el compromiso con la comunidad como norma ética y ciudadana</li>
                <li>Hacer un acto de reciprocidad con la sociedad.</li>
                <li>Enriquecer la actividad de educación universitaria, a través del aprendizaje-servicio con la aplicación de los conocimientos adquiridos durante la formación académica, artística, cultural y deportiva.</li>
            </ul>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
    </div>



    <!-- Modal Structure -->
    <div id="modal3" class="modal bottom-sheet">
        <div class="modal-content">
            <h4 class="blue-text text-darken-4">Programadores</h4>
            <ul class="collection">
                <li class="collection-item avatar">
                    <img src="img/mauricio.jpg" alt="" class="circle">
                    <span class="title">Mauricio Bisogno</span>
                    <p>Estudiante de Ingeniería en Sistemas <br> C.I V-27.125.516
                    </p>
                    <a href="#!" class="secondary-content blue-text text-darken-4"><i class="material-icons">account_box</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="img/diegbys.jpg" alt="" class="circle">
                    <span class="title">Title</span>
                    <p>Estudiante de Ingeniería en Sistemas, Desarrollador Web Front-End en Grupos Leiros <br> C.I V-27.873.480
                    </p>
                    <a href="#!" class="secondary-content blue-text text-darken-4"><i class="material-icons">account_box</i></a>
                </li>
            </ul>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
    </div>




    <!--FOOTER-->
    <footer class="page-footer blue darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Recuerda</h5>
                    <p class="grey-text text-lighten-4">¿Cuál es la escencia de la vida? Servir a otros y hacer el bien.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://www.unimar.edu.ve/unimarportal/index.php">Universidad de Margarita</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://www.unimar.edu.ve/unimarportal/universidad/servicio-comunitario.php">Servicio Comunitario UNIMAR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                © 2020 Servicio Comunitario Proyecto Unimar con Todos Diegbys Mudarra Mauricio Bisogno
            </div>
        </div>
    </footer>


    <script src="Materialize/js/materialize.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>