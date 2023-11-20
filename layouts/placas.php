<section id="sectionPlacas" class="sectionImagenes fermax">
            <h1 id="TituloPlacas">Placas FERMAX</h1>

            <div class="imagenes placas">
                <?php 
                    $registros = $placas;

                    foreach($registros as $registro) {
                    ?>
                    <div class="placa <?php echo $registro['id_placas']?>">
                        <div class="div-img placa abrir-modal" data-modal="<?php echo $registro['id_modal']?>">
                            <img class="img placa" src="<?php echo $registro['img']?>" alt="">
                        </div>
                        <div class="nombrePlaca"><?php echo $registro['nombrePlaca']?></div>
                        <a class="btn btn-primary abrir-modal" data-modal="<?php echo $registro['id_modal']?>">Ver</a>
                    </div>
                    <?php
                    }
                    ?>
            </div>
</section>