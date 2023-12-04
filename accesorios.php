<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios</title>
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shourt icon" href="favicon.png">
</head>

<body>
    <?php require 'modal/modal.php' ?>
    <div class="contenedor-todo">
        <?php require 'layouts/encabezado.php' ?>
        <br>

        <div id="div-botones">
            <div class="boton" id="boton-portero">
                <a class="a-botones-accesorios" href="#sectionPorteros">Porteros</a>
            </div>
            <div class="boton" id="boton-intercom">
                <a class="a-botones-accesorios" href="#sectionIntercomunicadores"> Intercomunicadores </a>
            </div>
            <div class="boton" id="boton-Placas">
                <a class="a-botones-accesorios" href="#sectionPlacas"> Placas</a>
            </div>

            <div class="boton" id="boton-VideoPorteros">
                <a class="a-botones-accesorios" href="#sectionVideoPorteros"> Videoporteros</a>
            </div>

            <div class="boton" id="boton-Camaras">
                <a class="a-botones-accesorios" href="#sectionCamaras"> Camaras de vigilancia</a>
            </div>

            <div class="boton" id="boton-Videoporteros">
                <a class="a-botones-accesorios" href="#sectionRobotica"> Robotica</a>
            </div>
        
        </div>
        
        <?php 
        include_once 'bd/tablas.php';
        ?>
        <?php require 'layouts/porteros.php' ?>
        
        <br>

        <?php require 'layouts/intercomunicadores.php' ?>

        <br>

        <?php require 'layouts/placas.php' ?>

        <br>

        <?php require 'layouts/videoporteros.php' ?>

        <br>

        <?php require 'layouts/camaras.php' ?>

        <br>


        <?php require 'layouts/robotica.php' ?>

        <br>

        <?php require 'layouts/footer.php' ?>
        
        
    </div>

    <?php require 'js/javascript.php' ?>
</body>
</html>