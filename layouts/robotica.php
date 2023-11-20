<section id="sectionRobotica" class="sectionImagenes">
    <h1 id="TituloRobotica">ACCESORIOS DE ROBOTICA</h1>
    <div class="imagenes robotica">
    <?php 
            $registros = $robotica;

            foreach($registros as $registro) {
            ?>
            <div class="roboticaIMG <?php echo $registro['id_robotica']?>">
                <div class="div-img robotica abrir-modal" data-modal="<?php echo $registro['id_modal']?>">
                    <img class="img robotica" src="<?php echo $registro['img']?>" alt="">
                </div>
                <div class="nombreRobotica"><?php echo $registro['nomRobotica']?></div>
                <a class="btn btn-primary abrir-modal" data-modal="<?php echo $registro['id_modal']?>">Ver</a>
            </div>
            <?php
            }
            ?>

    </div>
</section>