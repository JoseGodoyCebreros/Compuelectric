<section id="sectionPorteros" class="sectionImagenes belcom">
            <h1 id="TituloPorteros">Porteros BELCOM</h1>
            <h1 class="subtituloPorteros">Porteros para edificio basico</h1>
            <div class="imagenes porteros">
                <?php 
                    $registros = $porteros;

                    for ($i = 0; $i < 8; $i++) {
                        $registro = $registros[$i];
                    ?>
                    <div class="portero <?php echo $registro['id_porteros']?>">
                        <div class="div-img portero abrir-modal" data-modal="<?php echo $registro['id_modal']?>">
                            <img class="img porteros" src="<?php echo $registro['img']?>" alt="">
                        </div>
                        <div class="nombrePortero"><?php echo $registro['nombre']?></div>
                        <a class="btn btn-primary abrir-modal" data-modal="<?php echo $registro['id_modal']?>">Ver</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
</section>
<br>  
<section id="sectionPorteros2" class="sectionImagenes belcom">
            <h1 class="subtituloPorteros">Porteros para edificio</h1>
            <div class="imagenes porteros">
            <?php 
                    $registros = $porteros;

                    for ($i = 8; $i < 12; $i++) {
                        $registro = $registros[$i];
                    ?>
                    <div class="portero <?php echo $registro['id_porteros']?>">
                        <div class="div-img portero abrir-modal" data-modal="<?php echo $registro['id_modal']?>">
                            <img class="img porteros" src="<?php echo $registro['img']?>" alt="">
                        </div>
                        <div class="nombrePortero"><?php echo $registro['nombre']?></div>
                        <a class="btn btn-primary abrir-modal" data-modal="<?php echo $registro['id_modal']?>">Ver</a>
                    </div>
                    <?php
                    }
                    ?>
            </div>
</section>
