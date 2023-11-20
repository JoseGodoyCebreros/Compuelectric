<section id="sectionIntercomunicadores" class="sectionImagenes belcom">
            <h1 id="TituloIntercomunicadores">Intercomunicadores BELCOM</h1>
            <h1 id="subtituloIntercomunicadores">Intercomunicadores para oficina</h1>
            <div class="imagenes intercom">
            <?php 
                    $registros = $intercom;

                    foreach($registros as $registro) {
                    ?>
                    <div class="intercomIMG <?php echo $registro['id_intercom']?>">
                        <div class="div-img intercom abrir-modal" data-modal="<?php echo $registro['id_modal']?>">
                            <img class="img intercom" src="<?php echo $registro['img']?>" alt="">
                        </div>
                        <div class="nombreIntercom"><?php echo $registro['titulo']?></div>
                        <a class="btn btn-primary abrir-modal" data-modal="<?php echo $registro['id_modal']?>">Ver</a>
                    </div>
                    <?php
                    }
                    ?>
            </div>
</section>