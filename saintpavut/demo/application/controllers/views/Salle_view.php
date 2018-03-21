voici nos articles <hr>
<?php foreach ($tous as $unarticle ){  ?>

    <div class="item">
        <?php echo $unarticle->salle_nom ?>
        code : <?php echo $unarticle->salle_code ?>,
        nombre de place max : <?php echo $unarticle->salle_place_max ?>,
        <?php
            $s = $unarticle->salle_surface;
            $pm = $unarticle->salle_place_max;
            echo 'nombre de m² par place : '.$s/$pm ?><hr>


    </div>

<?php }  ?>