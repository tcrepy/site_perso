<?php foreach($film1 as $unfilm){?>
    <div class="pop_up_player1">
        <span class="glyphicon glyphicon-remove ferme_pop_up3"></span>
        <iframe id="video" src="<?php echo $unfilm->film_ba?>" frameborder="0" allowfullscreen></iframe>
    </div>
<?php } ?>
<?php foreach($film2 as $unfilm){?>
    <div class="pop_up_player2">
        <span class="glyphicon glyphicon-remove ferme_pop_up3"></span>
        <iframe id="video" src="<?php echo $unfilm->film_ba?>" frameborder="0" allowfullscreen></iframe>
    </div>
<?php } ?>
<?php foreach($film3 as $unfilm){?>
    <div class="pop_up_player3">
        <span class="glyphicon glyphicon-remove ferme_pop_up3"></span>
        <iframe id="video" src="<?php echo $unfilm->film_ba?>" frameborder="0" allowfullscreen></iframe>
    </div>
<?php } ?>
<?php foreach($film4 as $unfilm){?>
    <div class="pop_up_player4">
        <span class="glyphicon glyphicon-remove ferme_pop_up3"></span>
        <iframe id="video" src="<?php echo $unfilm->film_ba?>" frameborder="0" allowfullscreen></iframe>
    </div>
<?php } ?>
<div class="main">
    <div class="top_accueil">
        <?php foreach($film1 as $unfilm){?>
            <a href="#" > <img src="<?php echo base_url()?>assets/image/play-button.svg" class="accueil_ba_player1"/></a><img src="<?php echo base_url()?>assets/affiches/<?php echo $unfilm->film_affiche?>" class="accueil_ba"/>
        <?php } ?>
        <?php foreach($film2 as $unfilm){?>
            <a href="#" > <img src="<?php echo base_url()?>assets/image/play-button.svg" class="accueil_ba_player2"/></a><img src="<?php echo base_url()?>assets/affiches/<?php echo $unfilm->film_affiche?>" class="accueil_ba"/>
        <?php } ?>
        <?php foreach($film3 as $unfilm){?>
            <a href="#" > <img src="<?php echo base_url()?>assets/image/play-button.svg" class="accueil_ba_player3"/></a><img src="<?php echo base_url()?>assets/affiches/<?php echo $unfilm->film_affiche?>" class="accueil_ba"/>
        <?php } ?>
        <?php foreach($film4 as $unfilm){?>
            <a href="#" > <img src="<?php echo base_url()?>assets/image/play-button.svg" class="accueil_ba_player4"/></a><img src="<?php echo base_url()?>assets/affiches/<?php echo $unfilm->film_affiche?>" class="accueil_ba"/>
        <?php } ?>

    </div>

    <hr>

    <div class="middle_accueil col-md-12 section_accueil">
        <div class="col-md-3 col-md-offset-1">
            <div class="midle_accueil_logo">
                <img src="<?php echo base_url()?>assets/image/recherche.svg" class="logo_accueil" alt="loupe">
            </div>
            <div class="middle_accueil_titre">
                <h3 class="accueil_titre">Rechercher</h3>
            </div>
            <div class="middle_accueil_texte">
                <p class="accueil_texte">Rechercher vos films préférer ou découvrer en de nouveaux</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="midle_accueil_logo">
                <img src="<?php echo base_url()?>assets/image/bookmark-star.svg" class="logo_accueil" alt="etoile">
            </div>
            <div class="middle_accueil_titre">
                <h3 class="accueil_titre">Noter</h3>
            </div>
            <div class="middle_accueil_texte">
                <p class="accueil_texte">Noter et critiquer vos films</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="midle_accueil_logo">
                <img src="<?php echo base_url()?>assets/image/right-arrow.svg" class="logo_accueil" alt="partage">
            </div>
            <div class="middle_accueil_titre">
                <h3 class="accueil_titre">Partager</h3>
            </div>
            <div class="middle_accueil_texte">
                <p class="accueil_texte">Partager vos découvertes avec votre réseau</p>
            </div>
        </div>
    </div>
<?php

echo '<hr>';
echo '<h3 style="text-align: center">Les films les mieux notés</h3>';
echo ' </div>';

echo '<ul class="bxslider">';
echo'<li><a href="'.base_url().'Film/choixfilm?idf=2" class=""><img src="'.base_url().'assets/affiches/matrix.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=18" class="img_slide"><img src="'.base_url().'assets/affiches/die_hard3.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=13" class="img_slide"><img src="'.base_url().'assets/affiches/iron_man2.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=4" class="img_slide"><img src="'.base_url().'assets/affiches/lsda.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=3" class="img_slide"><img src="'.base_url().'assets/affiches/lsdalcda.jpg" /></a></li>';
echo'<li><a href="'.base_url().'Film/choixfilm?idf=37" class=""><img src="'.base_url().'assets/affiches/197090.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=19" class="img_slide"><img src="'.base_url().'assets/affiches/die_hard4.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=14" class="img_slide"><img src="'.base_url().'assets/affiches/iron_man3.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=9" class="img_slide"><img src="'.base_url().'assets/affiches/animatrix.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=5" class="img_slide"><img src="'.base_url().'assets/affiches/watchmen.jpg" /></a></li>';
echo'<li><a href="'.base_url().'Film/choixfilm?idf=38" class=""><img src="'.base_url().'assets/affiches/Max-et-Leon-Palmashow-Affiche-424x600.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=20" class="img_slide"><img src="'.base_url().'assets/affiches/die_hard5.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=15" class="img_slide"><img src="'.base_url().'assets/affiches/mlm.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=10" class="img_slide"><img src="'.base_url().'assets/affiches/lsdaldt.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=6" class="img_slide"><img src="'.base_url().'assets/affiches/mononoke.jpg" /></a></li>';
echo'<li><a href="'.base_url().'Film/choixfilm?idf=36" class=""><img src="'.base_url().'assets/affiches/518191.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=21" class="img_slide"><img src="'.base_url().'assets/affiches/avengers.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=16" class="img_slide"><img src="'.base_url().'assets/affiches/die_hard.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=11" class="img_slide"><img src="'.base_url().'assets/affiches/lsdalrdr.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=7" class="img_slide"><img src="'.base_url().'assets/affiches/matrix_reloaded.jpg" /></a></li>';
echo'<li><a href="'.base_url().'Film/choixfilm?idf=23" class=""><img src="'.base_url().'assets/affiches/lgdlg.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=22" class="img_slide"><img src="'.base_url().'assets/affiches/avengers2.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=17" class="img_slide"><img src="'.base_url().'assets/affiches/die_hard2.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=12" class="img_slide"><img src="'.base_url().'assets/affiches/iron_man.jpg" /></a><a href="'.base_url().'Film/choixfilm?idf=8" class="img_slide"><img src="'.base_url().'assets/affiches/matrix_revolutions.jpg" /></a></li>';

echo '</ul>';
    
?>


   </div>
