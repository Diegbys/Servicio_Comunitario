<?php
include_once 'componentes/Header.php';
?>




<!--Desplegable de ayuda-->
<ul id="slide-out" class="sidenav sidenav-fixed" style="margin-top: 64px; height: calc(100vh - 64px)">
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header"><i class="material-icons left">android</i>Ingenieros<i class="material-icons right">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a class="blue-text text-darken-4" href="aprender_programar.html">Aprender a programar</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>



<div class="section"></div>
<div class="row">
    <div class="col l9 offset-l3 m12">
        <!--Cuerpo-->
        <h3 class="blue-text text-darken-4">Bienvenido al módulo de ayuda<a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only right"><i class="material-icons">menu</i></a></h3>

        <div class="divider"></div>
        <div class="container">
            <div class="row row-help">
                <div class="col l6 s12 valign-wrapper">
                    <p>Este módulo está enfocado a ayudar a la sociedad en distintas areas, a la izquierda puede encontrar las divisiones con los diferentes temas que tal vez le interesen</p>
                </div>
                <div class="col l6 s12">
                    <img style="width: 100%" src="img/help.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<script src="Materialize/js/materialize.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>