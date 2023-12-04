<?php 
    include_once 'bd/tablas.php';
    
?>

<link rel="stylesheet" href="css/modales.css">

<!-- CSS MODALES -->
<div id="modales-container">
    <?php 
    $registros = array_merge($porteros, $intercom, $placas, $vportero, $camaras, $robotica);

    foreach($registros as $registro) {
    ?>    
        <div class="contenedor-modal" id="<?php echo $registro['id_modal']?>" role="document">
            <div class="modal-principal" role="document">
                <div class="modal--header"> 
                    <div class="modal--header-container">
                        <p class="modal-title"> <?php echo $registro['nombrePortero'] ?? $registro['nombreCompleto'] ?? $registro['nombreCompletoPlaca'] ?? $registro['nomCom_vportero'] ?? $registro['nombreCamara'] ?? $registro['nomRobotica']?></p>
                        <button class="botonModal-cerrar" onclick="cerrarModal('<?php echo $registro['id_modal']?>')">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="div-modal">
                        <div class="imagen-modal">
                            <img src="<?php echo $registro['img']?>" alt="">
                        </div>

                        <div class="modal-texto">
                            <p><?php echo $registro['descripcion']?></p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <p class="precio"><?php echo $registro['precio']?></p>
                    <a class="btn btn-primary" target="_blank" href="https://api.whatsapp.com/send?phone=977679527&text=Buenas%20tardes,%20quisiera%20preguntar%20acerca%20del%20
                    <?php echo $registro['nombrePortero'] ?? $registro['nombreCompleto'] ?? $registro['nombreCompletoPlaca'] ?? $registro['nomCom_vportero'] ?? $registro['nombreCamara'] ?? $registro['nomRobotica']?>:">PEDIR</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<!-- js/main.js -->
<!-- $("#modales-container").append(modalHtml); -->
