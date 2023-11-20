<section id="sectionVideoPorteros" class="sectionImagenes belcom">
    <h1 id="TituloVideoPorteros">Video Porteros BELCOM</h1>
    <h2 id="subtituloVideoPorteros">VIDEOPORTEROS PARA EDIFICIO</h2>
    <div class="imagenes videoporteros" id="imagenes-videoporteros1">
    <?php 
                    $registros = $vportero;

                    for ($i = 0; $i < 6; $i++) {
                        $registro = $registros[$i];
                    ?>
                    <div class="videoporteroIMG <?php echo $registro['id_vportero']?>">
                        <div class="div-img videoportero abrir-modal" data-modal="<?php echo $registro['id_modal']?>">
                            <img class="img videoportero" src="<?php echo $registro['img']?>" alt="">
                        </div>
                        <div class="nombreVideoPortero"><?php echo $registro['nom_vportero']?></div>
                        <a class="btn btn-primary abrir-modal" data-modal="<?php echo $registro['id_modal']?>">Ver</a>
                    </div>
                    <?php
                    }
                    ?>
    </div>

    <br>

    <!-- OFICINA -->

    <h2 id="subtituloVideoPorteros">VIDEOPORTEROS PARA OFICINA</h2>
    <div class="imagenes videoporteros" id="imagenes-videoporteros2">
    <?php 
                    $registros = $vportero;

                    for ($i = 6; $i < 11; $i++) {
                        $registro = $registros[$i];
                    ?>
                    <div class="videoporteroIMG <?php echo $registro['id_vportero']?>">
                        <div class="div-img videoportero abrir-modal" data-modal="<?php echo $registro['id_modal']?>">
                            <img class="img videoportero" src="<?php echo $registro['img']?>" alt="">
                        </div>
                        <div class="nombreVideoPortero"><?php echo $registro['nom_vportero']?></div>
                        <a class="btn btn-primary abrir-modal" data-modal="<?php echo $registro['id_modal']?>">Ver</a>
                    </div>
                    <?php
                    }
                    ?>
    </div>
</section>