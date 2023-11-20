<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shourt icon" href="favicon.png">
</head>

<body>
    <div class="contenedor-todo">
        <?php require 'layouts/encabezado.php' ?>

        <div class="informacion-contacto" id="informacion-contacto">
            <br>
            <p id="contacto-titulo"> Somos una empresa de ventas de accesorios de computadoras, camaras de vigilancia, intercomunicadores,
                robotica.</p>
            <br>
            <p>Si tienes algún dispositivo electrónico de computo que tenga problemas técnicos, nosotros somos tu
                solución, a través de nuestros profesionales altamente calificados te brindaremos un diagnostico
                acertado</p>
        </div>
        <br>

        <div class="informacion">
            <div class="info mision">
                <h1>MISION</h1>
                <h2>Pensar en las necesidades de nuestros clientes, ofreciéndoles de manera oportuna y ágil productos. Asesoria y servicios de calidad.</h2>
            </div>
            <div class="info vision">
                <h1>VISIÓN</h1>
                <h2>Queremos convertirnos en el proveedor de confianza para nuestros clientes, ofreciéndoles soluciones personalizadas, asesoramientos satisfaciendo sus necesidades tecnológicas y de hogar con garantía.</h2>
            </div>
            <div class="info valores">
                <h1>VALORES</h1>
                <h2>En Compuelectric buscamos estar atentos a las nuevas tendencias para conseguir ofrecer siempre los productos más actuales del mercado. Logrando nuestros objetivos y colaborando con todos nuestros socios comerciales con compromiso e integridad.</h2>
            </div>
        </div>
        
        <br>
        <div class="info-contacto">
            <p><span id="NumeroTelefono">Numero de telefono:</span> +51 977 679 527 <img id="iconoTelefono" src="img/pagina/llamada-telefonica.png" alt=""> </p>
            <p> <span id="Correo">Correo:</span> compuelectric.777@gmail.com <img id="iconoCorreo" src="img/pagina/sobre.png" alt=""> </p>
            <br>
            <ul>
                <li id="tituloHorario">HORARIO DE ATENCION</li>
                <li>Lunes 08:00 am - 20:00 pm</li>
                <li>Martes 08:00 am - 20:00 pm</li>
                <li>Miercoles 08:00 am - 20:00 pm</li>
                <li>Jueves 08:00 am - 20:00 pm</li>
                <li>Viernes 08:00 am - 20:00 pm</li>
                <li>Sabado 08:00 am - 20:00 pm</li>
                <li>Domingo - CERRADO</li>
            </ul>
        </div>

        <br>
        <div id="direccion">Nos encontramos en <p>Av. mexico 107 // tienda 202 - 2do piso // COMPUELECTRIC - SERVICIO
                TECNICO // Comas, Lima, Peru</p>
        </div>
        <br>
        <div id="container-map">
            <a target="_blank"
                href="https://www.google.com/maps/place/Compu+Electric/@-11.9573198,-77.0532127,20.5z/data=!4m6!3m5!1s0x9105cfd4632d6bf7:0xc960b1e866ed0114!8m2!3d-11.9572109!4d-77.053377!16s%2Fg%2F11dylq_6r3">
                <img id="mapa" src="img/pagina/mapa.png" title="Ubicacion en Google Maps" alt="">
            </a>

            <img id="tienda" src="img/pagina/tienda.jpg" alt="">
            
        </div>
        <br>
        
        <?php require 'layouts/footer.php' ?>
    </div>

    <?php require 'js/javascript.php' ?>
</body>

</html>