<div class="mdl-grid">
    <?php foreach ($recherche as $unemanif) { ?>
        <div class="item mdl-cell mdl-cell--3-col mdl-cell--4-col-phone mdl-cell--4-col-tablet">
            <?php
            $mpp = $unemanif->manif_prix_place;
            $mi = $unemanif->manif_intitule;
            $mpp = $mpp * 1.12265;
            $id = $unemanif->manif_id;
            ?>
            <div class="desc">
                <?php echo '<p>' . strtoupper($mi) ?>
                <br>au prix de <?php echo $mpp ?> $ </p>
                <p><?php echo $unemanif->manif_description ?></p>
            </div>
            <img class="img_manif"
                 src="<?php echo base_url(); ?>public/photos/<?php echo $unemanif->manif_photo ?> ">
            <br>
            <img class="barre"
                 src="<?php echo base_url(); ?>Manifestation/barre/<?php echo $unemanif->manif_id ?>">
            <br>
            <a href="#"
               onClick="window.open('<?php echo base_url() ?>detail/<?php echo $unemanif->manif_id ?>','_blank','toolbar=0, location=0, directories=0, status=0, scrollbars=1, resizable=1, copyhistory=0, menuBar=0, width=750, height=550, left=1000, top=400');return(false)">
                <button class="detail mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Détails
                </button>
            </a>
            <hr>
        </div>
    <?php } ?>
</div>